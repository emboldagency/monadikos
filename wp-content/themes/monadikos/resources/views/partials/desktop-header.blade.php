<section class="site-header">
    <div class="container max-w-[65.25rem] mx-auto flex justify-between items-center py-4 px-17">
        <div class="logo">
            <a href="{{ home_url('/') }}">
                <img src="{{ get_field('header_logo', 'options')['url'] }}" alt="Monadikos Equine Logo" class="h-[2.625rem]">
            </a>
        </div>
        <div class="menu-container">
            <div class="menu-wrapper mr-10">
                {{ wp_nav_menu(['menu' => 'Header Navigation', 'container' => 'nav'] ) }}
            </div>

            @php
                $headerIcons = get_field('header_icons', 'options');
                $hasIcons = !empty($headerIcons);
            @endphp

            <div class="header-icons flex space-x-4">
                <button class="p-3 m-0">
                    <img src="{{ Vite::asset('resources/images/MagnifyingGlass.svg')}}" alt="Search" class="h-4">
                </button>
                @if ($hasIcons)
                    @foreach ($headerIcons as $icon)
                        <a href="{{ esc_url($icon['icon_link']['url']) }}" class="icon-link p-3 m-0">
                            <img src="{{ esc_url($icon['icon']['url']) }}" alt="" class="h-4">
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>