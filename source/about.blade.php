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
            LCC Builders was founded when James Leonard decided to embark on a new chapter of his life and form his 
            own commercial construction company, parting ways with a very successful 24-year run with Magnum Builders Inc.  
            Through those years, Mr. Leonard had the privilege to learn much from his partner and mentor, Ernesto Magana, 
            owner of Magnum Builders, Inc.
        </p>

        <p class="mb-6 text-xl md:text-base">
            Once Mr. Leonard founded LCC Builders, Cameron Crisfield joined forces to run the field crews and projects.  
            A great partnership was formed with both having their own expertise but same goal, to take care of our clients 
            first and foremost.
        </p>

        <p class="mb-6 text-xl md:text-base">
            With the utilization of RedTeam Construction Software, the communication between field and office, as well as 
            overall project management, has been extremely efficient.  Companies utilizing the newer construction management 
            software are more productive with better quality control than those whom haven’t made the transition.
        </p>

        <p class="mb-6 text-xl md:text-base">
            After a little over a year in business, LCC Builders, has completed a multitude of projects successfully with 
            grateful clients.  We have built up our office and crews with quality personnel, all while keeping within the 
            parameters of our business magnification plan.  Most of our staff emanated from previous relationships and work 
            experience with James Leonard and Cameron Crisfield.
        </p>

        <p class="mb-6 text-xl md:text-base">
            We are excited to see that the future holds for us, and hope you will decide to become a part of our future.
        </p>
    </div>
@endsection
