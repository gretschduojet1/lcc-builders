@extends('_layouts.master')

@section('body')
    <div class="flex bg-primary-900 bg-cover bg-center pt-12 md:pt-24" style="background-image: url('{{ $page->baseUrl }}/assets/img/construction_foreman_homepage_banner.jpg');box-shadow: inset 0 0 0 100vw rgba(7, 25, 43, 0.40);">
        <div class="container mx-auto">
            <div class="w-full md:w-3/4 mx-auto lg:py-24 py-2 text-center">
                <h1 class="text-4xl lg:text-5xl mb-5 lg:mt-5 text-yellow-500">Committed to excellence, we deliver projects that exceed our clients' expectations and meet the highest standards of quality and safety.</h1>
                <p class="text-xl px-8 lg:text-2xl text-xl font-serif-primary italic mb-8 text-white">Our goal at LCC Builders is to lend our construction knowledge and management expertise to our clients for continuous and successful relationships.</p>
            </div>
        </div>
    </div>
    <div class="bg-llcblue py-4 md:py-12 border-t border-yellow-500">
        <div class="container mx-auto flex-no-wrap lg:flex md:px-12">
            <div class="flex w-full lg:w-1/3 py-4 lg:py-0">
                <div class="w-1/4 pl-6 lg:pl-0 clearfix">
                    <i class="fas fa-wrench md:float-none fa-3x text-yellow-500 pr-10 md:pl-8 pt-2 lg:pt-2 md:pt-0"></i>    
                </div>
                <div class="w-3/4 lg:w-2/3 pr-8 lg:pr-0">
                    <p class="text-white text-xl mt-0 mb-0">Experience</p>
                    <p class="text-gray-400 mt-0">With over 30 years’ experience, we have the ability to navigate projects from beginning to end seamlessly.</p>
                </div>
            </div>
            <div class="flex w-full lg:w-1/3 py-4 lg:py-0 border-t border-b lg:border-0 border-yellow-500">
                <div class="w-1/4 pl-6 lg:pl-0">
                    <i class="fas fa-hammer md:float-none fa-3x text-yellow-500 pr-10 md:pl-8 pt-2 lg:pt-2 md:pt-0"></i>
                </div>
                <div class="w-3/4 md:w-2/3 pr-8 lg:pr-0">
                        <p class="text-white text-xl mt-0 mb-0">LCC Motto</p>
                        <p class="text-gray-400 mt-0">To work harder and more efficient than others to provide honest, affordable, quality projects for the commercial property owners.</p>
                </div>
            </div>
            <div class="flex w-full lg:w-1/3 lg:mb-4 py-4 lg:py-0">
                <div class="w-1/4 pl-6 lg:pl-0">
                    <i class="fas fa-hard-hat md:float-none fa-3x text-yellow-500 pr-10 md:pl-8 pt-2 lg:pt-2 md:pt-0"></i>
                </div>
                <div class="w-3/4 md:w-2/3 pr-8 lg:pr-0">
                    <p class="text-white text-xl mt-0 mb-0">Design Assist</p>
                    <p class="text-gray-400 mt-0">We offer pre-construction services, estimating, design assist, scheduling and material selection.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto flex-no-wrap md:flex mb-0 py-8 px-8 border-t">
        <div class="w-full flex-no-wrap lg:flex">
            <div class="w-full lg:w-1/3 mb-8 lg:mb-0">
                <img src="{{ $page->baseUrl }}/assets/img/construction_workstation_homepage.jpg" alt="Our goal then and now is to provide quality on time projects.">
                <p class="mt-8"><a href="{{ $page->baseUrl }}/contact" class="bg-llcblue hover:bg-blue-700 hover:text-white text-white font-bold py-4 px-6 border border-blue-700 rounded text-xs lg:text-xl">Ready to get started? Contact Us Today!</a></p>
            </div>
            <div class="w-full lg:w-2/3 lg:mx-4 lg:mr-auto lg:pl-8">
                <p class="text-gray-700 text-3xl lg:text-4xl font-bold mb-0 mt-0 py-0 leading-tight">Our goal then and now is to provide quality, on time projects.</p>
                <p>
                The key to a successful project is in the preparation. Hard work at the front end of a project usually dictates the success of a project. This has become a mission at LCC Builders, to start 
                off each project making sure all the boxes are checked. We are happy to be involved as early in the project as possible to achieve this objective.
                </p>
                <p class="py-0">
                LCC Builders offers proven client-focused business practices, high standards of quality and safety, and a variety of construction services customized for the success of each project. As your general contractor, we handle all aspects of the organization and implementation of the construction process. We work with you to make your vision a reality as we construct projects that stand the test of time.
                </p>
            </div>
        </div>
    </div>
    <div class="bg-llcblue py-12">
        <div class="container mx-auto px-8"> 
            <h3 class="text-yellow-500 font-semibold text-log leading-tight">Recent Projects</h3>
            <div class="flex-no-wrap lg:flex">
                @foreach($projects->where('featured', true) as $featuredProject)
                    <div class="w-full lg:w-1/4 mb-8 mr-auto bg-gray-400 border border-gray-500 rounded-lg overflow-hidden pb-6">
                        @if ($featuredProject->cover_image)
                            <img src="{{ $featuredProject->cover_image }}" alt="{{ $featuredProject->title }} cover image" class="w-full h-48 object-cover">
                        @endif

                        <div class="pt-6 px-6">
                            <h4 class="mt-1 font-semibold text-2xl leading-tight">{{ $featuredProject->title }}</h4>
                            <p class="mt-1 text-lg leading-tight">{!! $featuredProject->description !!}</p>
                            <p class="mt-8"><a href="{{ $page->baseUrl }}/projects" class="bg-llcblue hover:bg-blue-700 hover:text-white text-white font-bold py-2 px-4 border border-blue-700 rounded">View Gallery</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
   
@stop
