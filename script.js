document.addEventListener("DOMContentLoaded", function () {
    var typed = new Typed(".auto-type", {
        strings: ["Student", "Programmer", "Passionate Learner", "Coding Enthusiasm"],
        typeSpeed: 100,
        backSpeed: 100,
        loop: true
    });

    darkModeToggle.addEventListener('click', () => {
        html.classList.toggle('dark-mode');
    });
})