document.addEventListener("DOMContentLoaded", function () {
    var typed = new Typed(".auto-type", {
        strings: ["Student", "Programmer", "Passionate Learner", "Coding Enthusiasm"],
        typeSpeed: 100,
        backSpeed: 100,
        loop: true
    });

    const isDarkMode = localStorage.getItem('darkMode') === 'enabled';

  // Apply dark mode if enabled
  if (isDarkMode) {
    document.documentElement.classList.add('dark-mode');
  }

  // Toggle dark mode on button click
  document.getElementById('dark-mode-toggle').addEventListener('click', () => {
    const html = document.documentElement;
    const isDarkModeEnabled = html.classList.toggle('dark-mode');

    // Save dark mode preference to local storage
    localStorage.setItem('darkMode', isDarkModeEnabled ? 'enabled' : 'disabled');
  });
})