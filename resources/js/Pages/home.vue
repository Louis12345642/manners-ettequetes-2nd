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

    <header class="max-w-xl mx-auto mt-20 text-center w-full h-full ">
            <h1 class="text-4xl">
                Latest <span class="text-blue-500">Laravel From Scratch</span> News
            </h1>


            <p class="text-sm mt-8">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora a eius assumenda vitae ab accusamus similique dignissimos reprehenderit temporibus mollitia?
            </p>

            <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
                <!--  Category -->


                <!-- Other Filters -->

                <!-- <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
                    <select class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold">
                        <option value="category" disabled selected>Other Filters
                        </option>
                        <option value="foo">Foo
                        </option>
                        <option value="bar">Bar
                        </option>
                    </select>

                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                         height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222"
                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </div> -->

                <!-- Search -->

            </div>
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
<FeaturedPost :posts='posts'/>
<AllPostsHeader title="old-posts" />


<section   class="grid grid-cols-1 md:grid md:grid-cols-2 lg:grid-cols-3 gap-8 m-10">
    <post  v-for="post in posts.slice(6)" :key="post.id" :post='post'/>

</section>


 </layeout>
</template>
<style>
</style>
