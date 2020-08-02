@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')

    <div class="container mx-auto py-8 px-8">
        <h1>About Us</h1>

        <img src="https://media.istockphoto.com/vectors/-vector-id860428936"
            alt="About image"
            class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

        <p class="mb-6 text-xl md:text-base">
            LCC Builders was founded when James Leonard decided to embark on a new chapter of his life and form his 
            owncommercial construction company, parting ways with a very successful 24-year run with Magnum Builders Inc.  
            Through those years, Mr. Leonard had theprivilege to learn much from his partnerand mentor, Ernesto Magana, 
            owner of Magnum Builders, Inc.
        </p>

        <p class="mb-6 text-xl md:text-base">
            Once Mr. Leonard founded LCC Builders, Cameron Crisfield joined forces to run the field crews and projects.  
            A great partnership was formed with both having their own expertise but same goal, to take care of our clients 
            first and foremost.
        </p>

        <p class="mb-6 text-xl md:text-base">
            With the utilization of RedTeam Construction Software, the communication between field and office, as well as 
            overall project management, has been extremelyefficient.  Companies utilizing the newer construction management 
            software are more productivewith better quality control than those whom haven’t made the transition.
        </p>

        <p class="mb-6 text-xl md:text-base">
            After a little over a year in business, LCC Builders, has completed a multitude of projects successfully with 
            grateful clients.  We have built up our office and crews with quality personnel, all while keeping within the 
            parameters of our business magnificationplan.  Most of our staff emanatedfrom previous relationships and work 
            experience with James Leonard and Cameron Crisfield.
        </p>

        <p class="mb-6 text-xl md:text-base">
            We are excited to see that the future holds for us, and hope you will decide to become a partof our future.
        </p>
    </div>
@endsection
