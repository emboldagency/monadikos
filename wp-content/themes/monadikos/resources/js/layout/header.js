document.addEventListener("DOMContentLoaded", () => {
    const elements = {
        dom: document.documentElement,
        menuBtn: document.querySelector('#main-toggle'),
        mobileNav: document.querySelector('#mobile-nav'),
        parentItems: document.querySelectorAll('li.menu-item-has-children'),
        searchBtn: document.querySelector('#mobile-search-btn'),
        searchForm: document.querySelector('#mobile-nav form.search-form')
    };

    const toggleMenu = () => {
        elements.menuBtn?.classList.toggle('fa-bars');
        elements.menuBtn?.classList.toggle('fa-xmark');
        elements.mobileNav?.classList.toggle('active');
        elements.dom.classList.toggle('!overflow-hidden')
    }

    elements.menuBtn?.addEventListener('click', toggleMenu);
    elements.parentItems?.forEach(item => {
        item.addEventListener('click', () => {
            item.classList.toggle('active');
        });
    });

    elements.searchBtn?.addEventListener('click', () => {
        elements.searchForm?.classList.toggle('active');
    });
});
