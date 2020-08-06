@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />

@endpush

@section('body')
<div style="background: urL(https://media.istockphoto.com/photos/architectural-equipment-at-construction-site-picture-id936384788?s=2048x2048); background-size:cover; background-position: center;" class="w-full h-52 mb-12">
    <div class="container mx-auto flex py-16 px-6">
        <div class="w-full lg:w-1/2 bg-gray-900 p-8 bg-opacity-75 border border-yellow-500">
            <h4 class="text-yellow-500 text-5xl font-bold">Our Work</h4>
            <p class="text-white">Paetos dignissim at cursus elefeind norma arcu. Pellentesque mode accumsan est in tempus, etos at ullamcorper quam suscipit lacus maecenas tortor. Erates vitae node metus. Suspendisse est gravida ornare.</p>
        </div>
    </div>
</div>
<div class="container mx-auto px-4">
    <gallery></gallery>
</div>
@endsection
