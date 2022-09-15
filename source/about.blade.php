@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <div style="background: url({{ $page->baseUrl }}/assets/img/scaffolding_about_banner.jpg); background-size:cover; background-position: center -68px;" class="w-full h-52 mb-12">
        <div class="container mx-auto flex py-16 px-6">
            <div class="w-full lg:w-1/2 bg-gray-900 p-8 bg-opacity-75 border border-yellow-500">
                <h4 class="text-yellow-500 text-5xl font-bold">About Us</h4>
                <p class="text-white">
                    Our goal then and now is to provide quality on time projects.  Learn how our years of experience can help
                    you on your next project. 
                </p>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-8">
        <p class="mb-6 text-xl md:text-base">
            LCC Builders is a Torrance-based general contracting and construction management firm recognized for reliability 
            and customer loyalty. The firm is known for Complete remodels, Tenant Improvement, Medical, Restaurant, and 
            Hospitality Projects.
        </p>

        <p class="mb-6 text-xl md:text-base">
            LCC Builders was founded when James Leonard decided to embark on a new chapter of his life and form his own commercial 
            construction company, parting ways with a very successful 24-year run with Magnum Builders Inc. Through those years, 
            Mr. Leonard had the privilege to learn much from his partner and mentor, Ernesto Magana, owner of Magnum Builders, Inc.
        </p>

        <p class="mb-6 text-xl md:text-base">
            Mr. Leonard was intent on building a professional staff that is committed to excellence in construction and customer service. 
            We have built up an office and crews with quality personnel many of which had previous work relationships with Mr. Leonard.
        </p>

        <p class="mb-6 text-xl md:text-base">
            We take pride in providing full-service contracting capabilities to our clients while maintaining a hands-on 
            approach to project management. Every project receives our personal attention to budgets, scheduling, details, 
            quality, and supervision.
        </p>

        <p class="mb-6 text-xl md:text-base">
            Through the utilization of RedTeam Construction Software, the communication between field and office, as well as 
            overall project management, has been extremely efficient. Companies utilizing the newer construction management 
            software are more productive with better quality control than those who haven’t made the transition
        </p>

        <p class="mb-6 text-xl md:text-base">
            Our business’s success over the years has been built upon developing personal relationships with our project 
            owners/developers and sharing our expertise through every stage of planning and construction. LCC Builders, has completed 
            a multitude of projects successfully with satisfied clients. 
        </p>

        <p class="mb-6 text-xl md:text-base">
            We are excited to see what the future holds for us and hope you will decide to become a part of our future.
        </p>
    </div>
@endsection
