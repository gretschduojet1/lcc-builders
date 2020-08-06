<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="{{ $page->baseUrl }}"
        class="ml-6 text-gray-700 text-lg hover:text-blue-600 {{ $page->isActive('/') ? 'active text-gray-900' : '' }}">
        Home
    </a>

    <a title="{{ $page->siteName }} About" href="{{ $page->baseUrl }}/about"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-gray-900' : '' }}">
        About
    </a>

    <a title="{{ $page->siteName }} Services" href="{{ $page->baseUrl }}/services"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/services') ? 'active text-gray-900' : '' }}">
        Services
    </a>

    <a title="{{ $page->siteName }} Projects" href="{{ $page->baseUrl }}/projects"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/projects') ? 'active text-gray-900' : '' }}">
        Projects
    </a>

    <a title="{{ $page->siteName }} Contact" href="{{ $page->baseUrl }}/contact"
        class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/contact') ? 'active text-gray-900' : '' }}">
        Contact
    </a>
</nav>
