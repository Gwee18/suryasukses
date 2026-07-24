document.addEventListener('DOMContentLoaded', () => {
    const section = document.querySelector('.home-products');
    if (!section) return;

    const tabs = section.querySelectorAll('.home-products-tab');
    const titleEl = section.querySelector('.home-products-title');
    const descEl = section.querySelector('.home-products-desc');
    const linkEl = section.querySelector('.home-products-link');
    const sliderEl = section.querySelector('#homeProductsSlider');

    let sliderTimer = null;

    // Bangun ulang track slider untuk kategori yang sedang aktif
    const buildSlides = (images) => {
        const slidesHtml = images
            .map((src) => `<div class="home-products-slide"><img src="${src}" alt=""></div>`)
            .join('');
        sliderEl.innerHTML = `<div class="home-products-track">${slidesHtml}</div>`;
        return sliderEl.querySelector('.home-products-track');
    };

    // Jalankan auto-slide horizontal setiap 5 detik (nonaktif kalau gambar cuma 1)
    const startSlider = (track, total) => {
        clearInterval(sliderTimer);
        track.style.transform = 'translateX(0%)';

        if (total <= 1) return;

        let current = 0;
        sliderTimer = setInterval(() => {
            current = (current + 1) % total;
            track.style.transform = `translateX(-${current * 100}%)`;
        }, 5000);
    };

    const activateTab = (tab) => {
        tabs.forEach((t) => t.classList.remove('is-active'));
        tab.classList.add('is-active');

        titleEl.textContent = tab.dataset.title;
        descEl.textContent = tab.dataset.desc;
        linkEl.href = tab.dataset.link;

        const images = tab.dataset.images.split('|').filter(Boolean);
        const track = buildSlides(images);
        startSlider(track, images.length);
    };

    tabs.forEach((tab) => {
        tab.addEventListener('mouseenter', () => activateTab(tab));
        tab.addEventListener('click', (e) => {
            e.preventDefault();
            activateTab(tab);
        });
    });

    // Jalankan slider untuk panel pertama yang sudah di-render server-side
    const initialTrack = sliderEl.querySelector('.home-products-track');
    const initialSlides = initialTrack ? initialTrack.querySelectorAll('.home-products-slide').length : 0;
    if (initialTrack) startSlider(initialTrack, initialSlides);
});