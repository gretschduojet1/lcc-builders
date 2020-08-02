@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <div class="container mx-auto py-8 px-8">
        <h1>Services</h1>

        <img src="https://media.istockphoto.com/vectors/construction-worker-avatar-flat-icon-flat-vector-illustration-symbol-vector-id1213274762"
            alt="About image"
            class="flex rounded-full h-64 w-64 bg-contain mx-auto md:float-right my-6 md:ml-10">

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
