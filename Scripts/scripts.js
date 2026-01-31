// Improved scroll reveal – force visible for in-view sections on load
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.section-reveal');
    const revealOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px' // Trigger earlier
    };

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, revealOptions);

    sections.forEach(section => {
        // Immediate visibility check for sections already in view
        const rect = section.getBoundingClientRect();
        if (rect.top < window.innerHeight * 0.9 && rect.bottom > 0) {
            section.classList.add('visible');
        }
        revealObserver.observe(section);
    });
});

// Smooth anchor scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', e => {
        e.preventDefault();
        document.querySelector(anchor.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
    });
});