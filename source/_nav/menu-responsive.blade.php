<nav id="js-nav-menu" class="nav-menu hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }}"
                href="{{ $page->baseUrl }}"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/') ? 'active text-blue' : '' }}"
            >Home</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="{{ $page->baseUrl }}/about"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/about') ? 'active text-blue' : '' }}"
            >About</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Services"
                href="{{ $page->baseUrl }}/services"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/contact') ? 'active text-blue' : '' }}"
            >Services</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Projects"
                href="{{ $page->baseUrl }}/projects"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/contact') ? 'active text-blue' : '' }}"
            >Projects</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Contact"
                href="{{ $page->baseUrl }}/contact"
                class="nav-menu__item hover:text-blue-500 {{ $page->isActive('/contact') ? 'active text-blue' : '' }}"
            >Contact</a>
        </li>
    </ul>
</nav>
