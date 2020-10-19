@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />

    <style>
        .map-responsive{
            overflow:hidden;
            padding-bottom:45%;
            position:relative;
            height:0;
        }
        .map-responsive iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
    </style>
@endpush

@section('body')
<div class="container mx-auto">
    <div class="flex-no-wrap lg:flex">
        <div class="w-full lg:w-full p-8">
            <div class="lg:px-32">
                <h1>Contact Us</h1>
                <div class="map-responsive" style="height:50%">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.787748277129!2d-118.31336048479045!3d33.84358398066319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd4ab2802a4c65%3A0xd2adf7ef49e5f90d!2s20610%20Manhattan%20Pl%20%23108%2C%20Torrance%2C%20CA%2090501!5e0!3m2!1sen!2sus!4v1603090939742!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>

                <div class="flex-no-wrap lg:flex">
                    <div class="w-full lg:w-1/3">
                        <p class="font-bold text-lg lg:mb-2">General Contact Information:</p>
                        <div class="text-sm">
                            <p class="my-2"><a href="tel:4244882257"><i class="fas fa-phone-alt"></i> Call (424)488-2257</a></p>
                            <p class="my-2">20610 Manhattan Place #108 <br>Torrance CA, 90501</p>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/3">
                        <p class="font-bold text-lg lg:mb-2">Direct Inquiry:</p>
                        <div class="text-sm">
                            <p class="font-bold my-2 text-sm">For Project inquiries, Please contact:</p>
                            <p class="my-2">Jim Leonard</p>
                            <p class="my-2"><a href="mailto:Jleonard@lccbldr.com "><i class="far fa-envelope"></i> Jleonard@lccbldr.com </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@stop
