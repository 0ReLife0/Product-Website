window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    // Check if the page has scrolled at least 0px
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});