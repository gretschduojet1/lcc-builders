<template>
    <div>
        <div class="title-container">
            <div>
                <h3 class="title">
                    Our Projects
                </h3>
            </div>
            <div class="filters" v-bind:key="filter.title" v-for="filter in filters">
                <span class="filter" v-bind:class="{ active: currentFilter === filter.title }" v-on:click="setFilter(filter.title)">{{filter.title}}</span>
            </div>
        </div>
        <transition-group class="projects" name="projects" >
            <div class="project" v-bind:key="project.title" v-for="project in filteredProjects">
				<h4>{{project.title}}</h4>
				<p>Category: <span>{{project.category}}</span></p>
				<div class="flex flex-wrap" >
					<div class="w-full lg:w-1/3 max-w-sm m-2 mb-2" v-for="index in project.galleryImageCount" :key="index">
						<img class="w-full h-64 object-cover" v-bind:src="buildThumbnailPath(project.galleryDirectory, index)">
					</div>
				</div>
            </div>
        </transition-group>
    </div>
</template>

<script>
export default {
    name: 'gallery',
    data() {
        return {
		currentFilter: 'ALL',
		imagePath: '/assets/images/gallery/',
		thumbName: '/lcc_builders_gallery_thumb_',
		imageName: '/lcc_builders_gallery_thumb_',

		filters: [
			{title: 'ALL'},
			{title: 'MEDICAL'},
			{title: 'OFFICE'},
			{title: 'RESTAURANT'},
			{title: 'HOTEL'}
		],
		projects: [
			{title: "TK Medical", image: "https://picsum.photos/g/200?image=122", galleryDirectory: 'tk_medical', galleryImageCount: 7, category: 'MEDICAL'},
			{title: "Teshima", image: "https://picsum.photos/g/200?image=116", galleryDirectory: 'teshima', galleryImageCount: 2, category: 'OFFICE'},
			{title: "Sunsets, Inc.", image: "https://picsum.photos/g/200?image=121", galleryDirectory: 'sunsets_inc', galleryImageCount: 16, category: 'OFFICE'},
			{title: "RKE", image: "https://picsum.photos/g/200?image=133", galleryDirectory: 'RKE', galleryImageCount: 8, category: 'OFFICE'},
			{title: "Beachside Restaurant", image: "https://picsum.photos/g/200?image=134", galleryDirectory: 'beachside_restaurant', galleryImageCount: 5, category: 'RESTAURANT'},
			{title: "Anaheim Hilton", image: "https://picsum.photos/g/200?image=115", galleryDirectory: 'anaheim_hilton', galleryImageCount: 3, category: 'HOTEL'},
			{title: "1601 PCH", image: "https://picsum.photos/g/200", galleryDirectory: '1601_pch', galleryImageCount: 19, category: 'HOTEL'},
		],

	}},
	methods: {
		setFilter: function(filter) {
			this.currentFilter = filter;
		},
		buildThumbnailPath: function(directory, index) {
			return this.imagePath + directory + '/thumbs/' + this.thumbName + index + '.jpg';
			
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

.filter {
	font-family:arial;
	padding: 6px 6px;
	cursor:pointer;
	border-radius: 6px;
	transition: all 0.35s;
}

.filter.active {
	box-shadow:0px 1px 3px 0px #00000026;
}

.filter:hover {
	background:lightgray;
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
