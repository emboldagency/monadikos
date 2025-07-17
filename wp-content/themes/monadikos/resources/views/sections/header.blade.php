<header class="banner">
    <section class="site-banner bg-black">  
        @if (get_field('sale_banner', 'options'))
            <div class="banner-text text-text-200 text-white text-center py-2">
                {!! get_field('sale_banner', 'options') !!}
            </div>
        @else
            <h1 class="text-display-500">Welcome to Monadikos</h1>
        @endif
    </section>

    <section class="max-desktop:hidden desktop-header">
        @include('partials.desktop-header')
    </section>

    <section class="desktop:hidden mobile-header">
        @include('partials.mobile-header')
    </section>
</header>
