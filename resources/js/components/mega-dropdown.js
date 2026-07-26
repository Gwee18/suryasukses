document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.site-navbar');
    const items = document.querySelectorAll('.mega-nav-item');

    const setNavbarOffset = () => {
        if (!navbar) return;
        const height = navbar.getBoundingClientRect().height;
        document.documentElement.style.setProperty('--navbar-offset', `${height}px`);
    };

    setNavbarOffset();
    window.addEventListener('load', setNavbarOffset);
    window.addEventListener('resize', setNavbarOffset);

    const closeAll = () => {
        items.forEach((item) => item.classList.remove('is-open'));
    };

    items.forEach((item) => {
        const toggle = item.querySelector('.mega-toggle');

        toggle.addEventListener('click', (e) => {
            e.preventDefault();
            const isOpen = item.classList.contains('is-open');
            closeAll();
            if (!isOpen) {
                setNavbarOffset();
                item.classList.add('is-open');
            }
        });
    });

    document.addEventListener('click', (e) => {
        if (!e.target.closest('.mega-nav-item')) {
            closeAll();
        }
    });

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeAll();
    });
});