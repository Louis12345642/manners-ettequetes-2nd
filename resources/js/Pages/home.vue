<script>
import Layeout from '../Layouts/layeout.vue'

import AllPostsHeader from '../Components/hero-section/all-posts-header.vue'
import FeaturedPost from '../Components/featured/featured-post.vue'
import post from '../Components/posts/post.vue'
import DropdownVue from '@/Components/build-in-components/Dropdown.vue'

// import FeaturedPost from '../featured/featured-post.vue'
// import AllPostsHeader from '../hero-section/all-posts-header.vue'
// import post from './post.vue'

export default{
  components: { Layeout, FeaturedPost, AllPostsHeader ,post,DropdownVue},
  props:{
    featuredPosts:Array,
    posts:Array
  },
    setup(props){

return{

}
    },
}
</script>

<template>
 <layeout>

    <header class="max-w-xl mx-auto mt-20 text-center w-full h-full m-10 ">
            <h1 class="text-4xl">
                Latest <span class="text-blue-500">Laravel From Scratch</span> News
            </h1>


            <p class="text-sm mt-8 mx-6">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora a eius assumenda vitae ab accusamus similique dignissimos reprehenderit temporibus mollitia?
            </p>

            <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">


            </div>



            <form method="GET" action="#" class="flex items-center m-6">
    <label for="simple-search" class="sr-only">Search</label>
    <div class="relative w-full">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input name="search" type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  " placeholder="Search" required="">
    </div>
    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        <span class="sr-only">Search</span>
    </button>
</form>


        </header>
    <section>
        <!-- <div>
        <h2
          class="font-mono font-semibold text-lg text-center mt-20 text-gray-600 md:text-2xl lg:3xl"
        >
          Latest
          <span class="secondary-color"> Manners and ettiquetes</span> News
          articles
        </h2>
        <div class="flex gap-6 justify-center">
          <p class="mt-10 align-bottom font-sans font-semibold text-gray-500">
            By John Doe
          </p>
          <img
            class="mt-7 w-12 h-12 rounded-full round-border"
            src="atomic-2.jpg"
            alt=""
          />
        </div>
      </div> -->
    </section>
<FeaturedPost :posts='featuredPosts'/>
<AllPostsHeader title="old-posts" />

<section   class="grid grid-cols-1 md:grid md:grid-cols-2 lg:grid-cols-3 gap-8 m-10">
    <post  v-for="post in posts" :key="post.id" :post='post'/>

</section>
 </layeout>
</template>
<style>
</style>
