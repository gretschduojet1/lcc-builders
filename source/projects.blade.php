@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />

@endpush

@section('body')
<div style="background: urL(https://media.istockphoto.com/photos/safety-construction-picture-id146961790?s=2048x2048);" class="w-full h-52 mb-12">
    <div class="container mx-auto flex py-12">
        <div class="w-1/2 bg-gray-700 p-8">
            <h4>Our Work</h4>
            <p>Paetos dignissim at cursus elefeind norma arcu. Pellentesque mode accumsan est in tempus, etos at ullamcorper quam suscipit lacus maecenas tortor. Erates vitae node metus. Suspendisse est gravida ornare.</p>
        </div>
    </div>
</div>
<div class="container mx-auto px-4">
<gallery></gallery>
</div>
@endsection
