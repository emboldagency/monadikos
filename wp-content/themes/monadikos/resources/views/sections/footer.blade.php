<footer class="content-info">
    <div class="w-full bg-neutral-100 pt-10 px-6 flex flex-col items-center">
        <div class="w-full max-w-[78.5rem] flex flex-col md:flex-row  items-center gap-[2.1875rem]">
            <div class="flex flex-col items-center md:self-start">
                <img src="{{ get_field('footer_logo', 'options')['url'] }}" alt="Monadikos Equine Logo" class="h-[5.125rem]">
            </div>
            <div class="menus w-fit flex flex-col gap-8 text-center desktop:text-start desktop:flex-row">
                @php(dynamic_sidebar('sidebar-footer'))
            </div>
        </div>
        <div class="flex flex-col items-center md:items-start py-4">
            <p class="text-text-200 text-center !text-gray">&copy; Monadikos Equine™ All Rights Reserved</p>
        </div>
    </div>
</footer>
