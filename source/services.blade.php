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
                We provide everything needed to give your construction project the quality you expect, as well as the responsiveness, honesty, and service you deserve.
                </p>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-8">
        <p class="mb-6 text-xl md:text-base">
            LCC Builders is a full-service construction company located in the South Bay with over 30 years of general contracting experience. 
        </p>
        <p class="mb-6 text-xl md:text-base">
            The success of the company is attributed to dedicated employees who place a high value on integrity and have the experience to excel in all phases of commercial construction.

        </p>
        <p class="mb-6 text-xl md:text-base">
        We offer a wide variety of construction services customized for the success of each project. Our objective is to offer every client personal attention to budgets, scheduling, project management, supervision, and quality throughout.
        </p>
        
        <div class="flex-no-wrap lg:flex">
            <div class="w-full lg:w-1/2">
                <h3 class="text-xl">CONSTRUCTION SERVICES</h3>
                <ul class="ml-10 text-xl md:text-base">    
                    <li>Project Planning & Budgeting</li>
                    <li>General Construction / Contracting</li>
                    <li>Design Assist</li>
                    <li>Design‐ Build</li>
                    <li>Construction Management</li>
                    <li>Project / Critical Path Scheduling</li>
                    <li>Value Engineering</li>
                    <li>Structural Enhancement / Retrofitting</li>
                    <li>Tenant Improvements</li>
                    <li>Building Renovations & Restorations</li>
                    <li>Material Testing</li>
                    <li>Core & Shell</li>
                    <li>Historical Renovations</li>
                    <li>Lean Construction</li>
                </ul>
            </div>
            <div class="w-full lg:w-1/2">
                <h3 class="text-xl mb-0 py-0">MARKETS WE SERVE</h3>
                <h2 class="text-lg mb-0 py-0 mt-0">Commercial/Professional</h2>
                <ul class="ml-10 text-xl md:text-base">    
                    <li>Office Building</li>
                    <li>Medical Office Building</li>
                    <li>Healthcare</li>
                    <li>Retail</li>
                    <li>Hospitality</li>
                    <li>Restaurant</li>
                    <li>Institutional Buildings </li>
                    <li>Public Works</li>
                </ul>
                <h2 class="text-lg mb-0 py-0 mt-0">Industrial</h2>
                <ul class="ml-10 text-xl md:text-base">    
                    <li>Office Building</li>
                    <li>Medical Office Building</li>
                    <li>Healthcare</li>
                    <li>Retail</li>
                    <li>Hospitality</li>
                    <li>Restaurant</li>
                    <li>Institutional Buildings </li>
                    <li>Public Works</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
