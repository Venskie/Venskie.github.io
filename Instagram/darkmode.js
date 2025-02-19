 // Select the button and add an event listener
    const toggleButton = document.getElementById('toggleDarkMode');
    toggleButton.addEventListener('click', () => {
      // Toggle the 'dark-mode' class on the body
      document.body.classList.toggle('dark-mode');

      // Save the current mode to local storage
      const isDarkMode = document.body.classList.contains('dark-mode');
      localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled');
    });

    // Load the saved mode from local storage on page load
    window.addEventListener('load', () => {
      const darkMode = localStorage.getItem('darkMode');
      if (darkMode === 'enabled') {
        document.body.classList.add('dark-mode');
      }
    });





    