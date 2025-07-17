<header class="site-header">
    <div class="container flex justify-between items-center py-4 px-5">
        <a href="{{ home_url('/') }}" class="logo">
            <img src="{{ get_field('header_logo', 'options')['url'] }}" alt="Monadikos Equine Logo" class="h-[2.625rem]">
        </a>

        <button id="main-toggle" aria-expanded="false" aria-label="Open Menu" class=" w-[2.625rem] h-[2.1875rem] fa-solid fa-bars text-[1.75rem] cursor-pointer text-black"></button>

    </div>

    <!-- Mobile menu -->
    <nav id="mobile-nav" class="!overscroll-contain overflow-auto pb-60 w-screen block items-start justify-start flex-1 bg-white min-h-screen h-screen z-100">
        {{ wp_nav_menu(['menu' => 'Header Navigation', 'container' => 'nav'] ) }}
        <div class="flex justify-center gap-8 mt-4 relative">
            {{-- <button id="mobile-search-btn" aria-label="Click to Search">
                <x-icons.search-icon class="size-8" />
            </button>
            {{ get_search_form() }} --}}
        </div>
    </nav>
</header>

{{-- <!-- Add this script -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('mobile-menu');

        toggle.addEventListener('click', function () {
            menu.classList.toggle('hidden');
        });
    });
</script> --}}

<!-- Make sure Font Awesome is loaded -->
