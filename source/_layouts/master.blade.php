<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="icon" href="/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ $page->baseUrl }}{{ mix('css/main.css', 'assets/build') }}">
         <!-- Place your kit's code here -->
         <script src="https://kit.fontawesome.com/4cefca3d5b.js" crossorigin="anonymous"></script>
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
        <header class="flex items-center shadow border-b h-24 py-4" role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
                <div class="flex items-center bg-white">
                    <a href="{{ $page->baseUrl }}" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <img class="h-20 md:h-24 mr-3" src="{{ $page->baseUrl }}/assets/img/llc_builders_logo.jpg" alt="{{ $page->siteName }} logo" />
                    </a>
                </div>

                <div class="flex flex-1 justify-end items-center min-h-screen">

                    @include('_nav.menu')

                    @include('_nav.menu-toggle')
                </div>
            </div>
        </header>

        @include('_nav.menu-responsive')
        <div id="app">
            <main role="main">
                @yield('body')
            </main>
        </div>  

        <footer class="text-center text-sm py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-none">
                <li class="md:mr-2">
                    &copy; <a href="https://tighten.co" title="{{ $page->siteName }} website">{{ $page->siteName }}</a> {{ date('Y') }}.
                </li>
            </ul>
        </footer>

        <script src="{{ $page->baseUrl }}{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
