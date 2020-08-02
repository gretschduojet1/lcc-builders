@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Contact {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Get in touch with {{ $page->siteName }}" />
@endpush

@section('body')
<div class="container mx-auto">
    <div class="flex-no-wrap lg:flex">
        <div class="w-full lg:w-1/4 bg-blue-900">
            <div class="py-8 px-8">
                <p class="text-white font-bold text-2xl">Contact Information:</p>
                <div class="pl-4">
                    <p><a href="tel:5551234567" class="text-white"><i class="fas fa-phone-alt text-yellow-500"></i> Call (555)123-4567</a></p>
                    <p class="text-white"><i class="far fa-clock text-yellow-500"></i> Hours: M-F, 8AM-5PM</p>
                    <p class="text-white"><i class="fas fa-map-marked-alt text-yellow-500"></i> Address: 1234 Fake Street</p>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-3/4 p-8 lg:pl-8">
            <h1>Contact Us</h1>

            <p class="mb-8 text-xl">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue lorem sit amet leo ornare, vel efficitur est ultrices. Cras blandit nec justo non imperdiet. Duis et feugiat lorem. Cras bibendum lectus sit amet ullamcorper auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
            </p>

            <form action="/contact" class="mb-12">
                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full md:w-1/2 mb-6 md:mb-0 px-3">
                        <label class="block mb-2 text-gray-800 text-sm font-semibold" for="contact-name">
                            Name
                        </label>

                        <input
                            type="text"
                            id="contact-name"
                            placeholder="Jane Doe"
                            name="name"
                            class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                            required
                        >
                    </div>

                    <div class="w-full px-3 md:w-1/2">
                        <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-email">
                            Email Address
                        </label>

                        <input
                            type="email"
                            id="contact-email"
                            placeholder="email@domain.com"
                            name="email"
                            class="block w-full border shadow rounded-lg outline-none mb-2 px-4 py-3"
                            required
                        >
                    </div>
                </div>

                <div class="w-full mb-12">
                    <label class="block text-gray-800 text-sm font-semibold mb-2" for="contact-message">
                        Message
                    </label>

                    <textarea
                        id="contact-message"
                        rows="4"
                        name="message"
                        class="block w-full border shadow rounded-lg outline-none appearance-none mb-2 px-4 py-3"
                        placeholder="A lovely message here."
                        required
                    ></textarea>
                </div>

                <div class="flex justify-end w-full">
                    <input
                        type="submit"
                        value="Submit"
                        class="block bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold leading-snug tracking-wide uppercase shadow rounded-lg cursor-pointer px-6 py-3"
                    >
                </div>
            </form>
        </div>
    </div>
    
</div>
@stop
