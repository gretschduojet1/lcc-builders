@extends('_layouts.master')

@section('body')
    <div class="flex bg-primary-900 bg-cover bg-center pt-12 md:pt-24" style="background-image: url('https://media.istockphoto.com/photos/professional-engineer-architect-worker-with-protective-helmet-and-picture-id1041465228');box-shadow: inset 0 0 0 100vw rgba(7, 25, 43, 0.75);">
        <div class="container mx-auto">
            <div class="w-full md:w-3/4 mx-auto lg:py-24 py-2 text-center text-white">
                <h1 class="text-4xl lg:text-5xl mb-5 lg:mt-5 text-white">CATCHY SLOGAN<br/>CHECK BACK</h1>
                <p class="text-xl px-8 lg:text-2xl text-xl font-serif-primary italic mb-8">Our goal at LCC Builders is to lend our construction knowledge and management expertise to our clients for continuous and successful relationships.</p>
            </div>
        </div>
    </div>
    <div class="bg-gray-900 md:py-12 border-t border-yellow-500">
        <div class="container mx-auto flex-no-wrap lg:flex pr-8 md:px-12">
            <div class="flex w-full lg:w-1/3">
                <div class="w-1/4 clearfix">
                    <i class="fas fa-wrench md:float-none fa-3x text-yellow-500 pr-10 md:pl-8 pt-4 lg:pt-2 md:pt-0"></i>    
                </div>
                <div class="w-3/4 lg:w-2/3">
                    <p class="text-white text-xl mt-0 mb-0">Experience</p>
                    <p class="text-gray-500 mt-0 text-justify">With over 25 years of experience LCC Builder is here to help you with any project no matter the size</p>
                </div>
            </div>
            <div class="flex w-full lg:w-1/3 border-t border-b lg:border-0 border-yellow-500">
                <div class="w-1/4">
                    <i class="fas fa-hammer md:float-none fa-3x text-yellow-500 pr-10 md:pl-8 pt-4 lg:pt-2 md:pt-0"></i>
                </div>
                <div class="w-3/4 md:w-2/3">
                        <p class="text-white text-xl mt-0 mb-0">Honest Service</p>
                        <p class="text-gray-500 mt-0 text-justify">With over 25 years of experience LCC Builder is here to help you with any project no matter the size</p>
                </div>
            </div>
            <div class="flex w-full lg:w-1/3 mb-4">
                <div class="w-1/4">
                    <i class="fas fa-hard-hat md:float-none fa-3x text-yellow-500 pr-10 md:pl-8 pt-4 lg:pt-2 md:pt-0"></i>
                </div>
                <div class="w-3/4 md:w-2/3">
                    <p class="text-white text-xl mt-0 mb-0">Remodeling Experts</p>
                    <p class="text-gray-500 mt-0 text-justify">With over 25 years of experience LCC Builder is here to help you with any project no matter the size</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto flex-no-wrap md:flex mb-0 py-8 px-8 border-t">
        <div class="w-full flex-no-wrap lg:flex">
            <div class="w-full mb-8 lg:w-1/3">
                <img src="https://media.istockphoto.com/photos/architectural-equipment-at-construction-site-picture-id936384788" alt="">
            </div>
            <div class="w-full lg:w-2/3 lg:mx-4 lg:mr-auto lg:pl-8">
                <p class="text-black text-3xl lg:text-4xl font-bold mb-0 mt-0 py-0 leading-tight">Our goal then and now is to provide quality on time projects.</p>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                <p class="mt-6"><a href="/contact" class="bg-blue-800 hover:bg-blue-700 hover:text-white text-white font-bold py-2 px-4 border border-blue-700 rounded text-lg">Contact Us Now</a></p>
            </div>
        </div>
    </div>
    <div class="bg-gray-900 py-12">
        <div class="container mx-auto px-8"> 
            <h3 class="text-yellow-500 font-semibold text-log leading-tight">Recent Projects</h3>
            <div class="flex-no-wrap lg:flex">
                @foreach($projects->where('featured', true) as $featuredProject)
                    <div class="w-full lg:w-1/4 mb-8 mr-auto bg-gray-400 border border-gray-500 rounded-lg overflow-hidden pb-6">
                        @if ($featuredProject->cover_image)
                            <img src="{{ $featuredProject->cover_image }}" alt="{{ $featuredProject->title }} cover image" class="w-full h-48 object-cover">
                        @endif

                        <div class="pt-6 px-6">
                            <h4 class="mt-1 font-semibold text-3xl leading-tight truncate">{{ $featuredProject->title }}</h4>
                            <p class="mt-1 text-lg leading-tight">{{ $featuredProject->description }}</p>
                            <p class="mt-8"><a href="/projects" class="bg-blue-800 hover:bg-blue-700 hover:text-white text-white font-bold py-2 px-4 border border-blue-700 rounded">View Gallery</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
   
@stop
