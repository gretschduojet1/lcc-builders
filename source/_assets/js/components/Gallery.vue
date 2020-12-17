<template>
    <div>
        <div class="title-container">
            <div>
                <h3 class="title">
                    Our Projects
                </h3>
            </div>
            <div class="filters flex flex-wrap mx-auto mb-8">
				<div v-bind:key="filter.title" v-for="filter in filters">
                	<span class="filter w-full text-sm lg:w-1/4 pl-2 pr-2 cursor-pointer hover:bg-yellow-500 rounded-lg" v-bind:class="{ active: currentFilter === filter.title }" v-on:click="setFilter(filter.title)">{{filter.title}}</span>
				</div>
            </div>
        </div>
        <transition-group class="projects" name="projects" >
            <div class="project" v-bind:key="project.title" v-for="project in filteredProjects">
				<h4 class="leading-tight mb-0">{{project.title}}</h4>
				<p class="mt-0 mb-4"><span class="text-xs bg-yellow-500 p-1 rounded-lg">{{project.category}}</span></p>
				<div class="flex-no-wrap lg:flex lg:flex-wrap mb-12" >
					<div class="w-full md:w-1/3 max-w-sm m-2 mb-2" v-for="index in project.galleryImageCount" :key="index">
						<img class="w-full h-64 object-cover cursor-pointer" v-bind:src="buildThumbnailPath(project.galleryDirectory, index)" @click="openLightBox(project.galleryDirectory, index)">
					</div>
				</div>
            </div>
        </transition-group>
		<div x-show.transition.opacity="open" v-if="this.open" class="p-4 fixed flex justify-center items-center inset-0 bg-black bg-opacity-75 z-50">
			<div x-show.transition="open" class="container max-w-3xl max-h-full shadow-lg overflow-auto clearfix">
				<div class="text-yellow-500 font-bold cursor-pointer float-right" @click="closeLightBox()">X Close</div>
				<img class="w-full rounded-lg" v-bind:src="this.lightBoxImage" alt="">
			</div>
		</div>
    </div>
</template>

<script>
export default {
    name: 'gallery',
    data() {
        return {
		currentFilter: 'ALL',
		imagePath: 'https://gretschduojet1.github.io/lcc-builders/assets/images/gallery/',
		thumbName: '/lcc_builders_gallery_thumb_',
		imageName: '/lcc_builders_gallery_',
		open: false,
		lightBoxImage: '',

		filters: [
			{title: 'ALL'},
			{title: 'MEDICAL'},
			{title: 'OFFICE'},
			{title: 'RESTAURANT'},
			{title: 'HOTEL'}
		],
		projects: [
			{title: "ABPM Medical Offices - Torrance, CA", image: "https://picsum.photos/g/200?image=133", galleryDirectory: 'abpm', galleryImageCount: 17, category: 'MEDICAL'},
			{title: "RKE - Torrance, CA", image: "https://picsum.photos/g/200?image=133", galleryDirectory: 'RKE', galleryImageCount: 21, category: 'OFFICE'},
			{title: "Teshima – Marina Del Rey, CA", image: "https://picsum.photos/g/200?image=116", galleryDirectory: 'teshima', galleryImageCount: 2, category: 'OFFICE'},
			{title: "Beachside Restaurant", image: "https://picsum.photos/g/200?image=134", galleryDirectory: 'beachside_restaurant', galleryImageCount: 5, category: 'RESTAURANT'},
			{title: "Anaheim Hilton – Anaheim, CA", image: "https://picsum.photos/g/200?image=115", galleryDirectory: 'anaheim_hilton', galleryImageCount: 3, category: 'HOTEL'},
			{title: "1601 PCH – Hermosa Beach, CA", image: "https://picsum.photos/g/200", galleryDirectory: '1601_pch', galleryImageCount: 19, category: 'HOTEL'},
			{title: "TK Medical – Torrance, CA", image: "https://picsum.photos/g/200?image=122", galleryDirectory: 'tk_medical', galleryImageCount: 7, category: 'MEDICAL'},
			{title: "Sunsets, Inc. – Harbor City, CA", image: "https://picsum.photos/g/200?image=121", galleryDirectory: 'sunsets_inc', galleryImageCount: 16, category: 'OFFICE'}
		],

	}},
	methods: {
		setFilter: function(filter) {
			this.currentFilter = filter;
		},
		buildThumbnailPath: function(directory, index) {
			return this.imagePath + directory + '/thumbs/' + this.thumbName + index + '.jpg';
		},
		openLightBox(directory, index) {
			this.open = !this.open;
			this.lightBoxImage = this.imagePath + directory + '/' + this.imageName + index + '.jpg';
			console.log(this.lightBoxImage);
		},
		closeLightBox() {
			this.open = !this.open;
		}
    },
    computed: {
        filteredProjects: function() {
           return this.projects.filter(project => project.category == this.currentFilter || this.currentFilter == 'ALL');
            
        }
    }
};
</script>

<style>
.title-container {
	display:flex;
	flex-direction:column;
	justify-content:center;
	align-items:center;
}



.projects-enter {
	transform: scale(0.5) translatey(-80px);
	opacity:0;
}

.projects-leave-to{
	transform: translatey(30px);
	opacity:0;
}

.projects-leave-active {
	position: absolute;
	z-index:-1;
}

.project {
	transition: all .35s ease-in-out;
}

.project-image-wrapper {
	position:relative;
}

.gradient-overlay {
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:150px;
	opacity:0.09;
	background: 
		linear-gradient(to bottom, rgba(0,210,247,0.65) 0%,rgba(0,210,247,0.64) 1%,rgba(0,0,0,0) 100%), 
		linear-gradient(to top, rgba(247,0,156,0.65) 0%,rgba(247,0,156,0.64) 1%,rgba(0,0,0,0) 100%);
	border-bottom-left-radius:10px;
	border-bottom-right-radius:10px;
	border-top-left-radius:3px;
	border-top-right-radius:3px;
}

.project-image {
	width:100%;
	height:150px;
	border-bottom-left-radius:5px;
	border-bottom-right-radius:5px;
	border-top-left-radius:3px;
	border-top-right-radius:3px;
}
</style>
