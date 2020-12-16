@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <div style="background: urL({{ $page->baseUrl }}/assets/img/services_writing_banner.jpg); background-size:cover; background-position: center;" class="w-full h-52 mb-12">
        <div class="container mx-auto flex py-16 px-6">
            <div class="w-full lg:w-1/2 bg-gray-900 p-8 bg-opacity-75 border border-yellow-500">
                <h4 class="text-yellow-500 text-5xl font-bold">Services</h4>
                <p class="text-white">
                    With the office and technical experience to go along with the field management and scheduling expertise to form a dominant team.
                </p>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-8">
        <p class="mb-6 text-xl md:text-base">
            A more incipient collective of experienced individuals coming together to form LCC Builders. LCC Builders came 
            together with the office and technical experience to go along with the field management and scheduling expertise 
            to form a dominant team.  Our goal is to offer every client personal attention to budgets, scheduling, project 
            details, project management, supervision and quality throughout.
        </p>
        
        <div class="flex-no-wrap lg:flex">
            <div class="w-full lg:w-1/2">
                <h3>Methods</h3>
                <ul class="ml-10 text-xl md:text-base">    
                    <li>Pre-Construction: Budgeting, Scheduling, Design Assist and Planning.</li>
                    <li>General Contracting</li>
                    <li>Construction Management</li>
                    <li>Design Build</li>
                    <li>Lean Construction</li>
                    <li>Value Engineering</li>
                </ul>
            </div>
            <div class="w-full lg:w-1/2">
                <h3>Specializations</h3>
                <ul class="ml-10 text-xl md:text-base">    
                    <li>Aerospace</li>
                    <li>Building Restoration</li>
                    <li>Healthcare</li>
                    <li>Medical Offices</li>
                    <li>Hospitality</li>
                    <li>Retail</li>
                    <li>Seismic Retrofit</li>
                    <li>Tenant Improvements</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
