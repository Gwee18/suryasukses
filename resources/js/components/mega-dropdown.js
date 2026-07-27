document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.site-navbar');
    const items = document.querySelectorAll('.mega-nav-item');
    const isDesktop = () => window.matchMedia('(min-width: 992px)').matches;

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

    const openItem = (item) => {
        setNavbarOffset();
        item.classList.add('is-open');
    };

    items.forEach((item) => {
        const toggle = item.querySelector('.mega-toggle');
        const dropdown = item.querySelector('.mega-dropdown');

        toggle.addEventListener('click', (e) => {
            e.preventDefault();
            const isOpen = item.classList.contains('is-open');

            // Kalau item yang diklik sendiri, tinggal toggle biasa
            if (isOpen) {
                closeAll();
                return;
            }

            const currentlyOpenItem = document.querySelector('.mega-nav-item.is-open');

            // Desktop + ada dropdown lain yang masih kebuka -> tutup dulu, baru buka yang baru
            if (isDesktop() && currentlyOpenItem && currentlyOpenItem !== item) {
                const openDropdown = currentlyOpenItem.querySelector('.mega-dropdown');
                currentlyOpenItem.classList.remove('is-open');

                const handleTransitionEnd = (ev) => {
                    if (ev.propertyName !== 'transform') return;
                    openDropdown.removeEventListener('transitionend', handleTransitionEnd);
                    openItem(item);
                };

                if (openDropdown) {
                    openDropdown.addEventListener('transitionend', handleTransitionEnd);
                    // fallback jaga-jaga kalau transitionend gak ke-fire (misal reduced-motion)
                    setTimeout(() => {
                        openDropdown.removeEventListener('transitionend', handleTransitionEnd);
                        if (!item.classList.contains('is-open')) openItem(item);
                    }, 900);
                } else {
                    openItem(item);
                }
                return;
            }

            // Mobile, atau gak ada dropdown lain yang kebuka -> langsung buka
            closeAll();
            openItem(item);
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