

ScrollReveal({ reset: true }).reveal('.fadeInBottom', {
    duration: 500,
    distance: '50px',
    origin: 'bottom',
    delay: 0
});

ScrollReveal({ reset: true }).reveal('.fadeInTop', {
    duration: 500,
    distance: '50px',
    origin: 'top',
    delay: 0
});


// This is to disable animations on reduced motion settings
if (window.matchMedia('(prefers-reduced-motion)').matches) {
    ScrollReveal().destroy();
}