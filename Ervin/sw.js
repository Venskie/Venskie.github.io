// sw.js
const CACHE_NAME = 'emergency-finder-v4';
const ASSETS_TO_CACHE = [
  '/',
  '/hospitalfinder.html',
  '/manifest.json',
  '/styles.css',
  '/icons/icon-192.png',
  '/icons/icon-512.png',
  'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css',
  'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js',
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'
];

self.addEventListener('install', e => {
  e.waitUntil(
    caches.open(CACHE_NAME).then(cache => cache.addAll(ASSETS_TO_CACHE))
  );
});

self.addEventListener('activate', e => {
  e.waitUntil(
    caches.keys().then(keys => Promise.all(
      keys.map(key => key !== CACHE_NAME ? caches.delete(key) : null)
    ))
  );
});

self.addEventListener('fetch', e => {
  e.respondWith(
    caches.match(e.request).then(cached => {
      return cached || fetch(e.request).then(networkResponse => {
        // Cache new responses (except dynamic APIs)
        if (e.request.url.includes('/api/') || e.request.url.includes('chrome-extension')) return networkResponse;
        return caches.open(CACHE_NAME).then(cache => {
          cache.put(e.request, networkResponse.clone());
          return networkResponse;
        });
      });
    }).catch(() => {
      // Offline fallback page
      if (e.request.destination === 'document') {
        return caches.match('/');
      }
    })
  );
});
