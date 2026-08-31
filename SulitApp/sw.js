/* Sulit.ph Service Worker — cache the shell, keep prices fresh */
const VERSION = 'sulit-v1';
const SHELL_CACHE = `${VERSION}-shell`;
const RUNTIME_CACHE = `${VERSION}-runtime`;

// ⚠️ Every URL here must exist, or install() fails (check DevTools → Application)
const SHELL_URLS = [
  './',
  './index.html',
  './manifest.json',
  './icons/icon-192.png',
  './icons/icon-512.png',
  './icons/icon-maskable-512.png',
  'https://cdn.tailwindcss.com',
  'https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap'
];

// ---------- INSTALL: pre-cache the whole app shell ----------
self.addEventListener('install', (event) => {
  event.waitUntil(
    caches.open(SHELL_CACHE)
      .then((cache) => cache.addAll(SHELL_URLS))
      .then(() => self.skipWaiting())
  );
});

// ---------- ACTIVATE: purge old versions ----------
self.addEventListener('activate', (event) => {
  event.waitUntil(
    caches.keys()
      .then((keys) => Promise.all(
        keys.filter((k) => !k.startsWith(VERSION)).map((k) => caches.delete(k))
      ))
      .then(() => self.clients.claim())
  );
});

// Allow the page to trigger an immediate update
self.addEventListener('message', (event) => {
  if (event.data === 'SKIP_WAITING') self.skipWaiting();
});

// ---------- FETCH ----------
self.addEventListener('fetch', (event) => {
  const req = event.request;
  if (req.method !== 'GET') return;

  const url = new URL(req.url);

  // 1) prices.json — NETWORK-FIRST: freshest scrape wins, cached copy is the fallback
  if (url.pathname.endsWith('/prices.json')) {
    event.respondWith(
      fetch(req)
        .then((res) => {
          const copy = res.clone();
          caches.open(RUNTIME_CACHE).then((c) => c.put(req, copy));
          return res;
        })
        .catch(() => caches.match(req))
    );
    return;
  }

  // 2) Navigations — serve cached HTML instantly, refresh it in the background
  if (req.mode === 'navigate') {
    event.respondWith(
      caches.match('./index.html').then((cached) => {
        const networkRefresh = fetch(req)
          .then((res) => {
            const copy = res.clone();
            caches.open(SHELL_CACHE).then((c) => c.put('./index.html', copy));
            return res;
          })
          .catch(() => cached);
        return cached || networkRefresh;
      })
    );
    return;
  }

  // 3) Immutable CDN assets (Tailwind, Google Fonts) — cache-first
  if (url.origin === 'https://cdn.tailwindcss.com' ||
      url.origin === 'https://fonts.googleapis.com' ||
      url.origin === 'https://fonts.gstatic.com') {
    event.respondWith(
      caches.match(req).then((cached) =>
        cached || fetch(req).then((res) => {
          const copy = res.clone();
          caches.open(RUNTIME_CACHE).then((c) => c.put(req, copy));
          return res;
        })
      )
    );
    return;
  }

  // 4) Same-origin assets (icons etc.) — cache-first with runtime fill
  if (url.origin === self.location.origin) {
    event.respondWith(
      caches.match(req).then((cached) =>
        cached || fetch(req).then((res) => {
          if (res.ok) {
            const copy = res.clone();
            caches.open(RUNTIME_CACHE).then((c) => c.put(req, copy));
          }
          return res;
        })
      )
    );
  }
});