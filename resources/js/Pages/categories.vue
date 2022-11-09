<script>
import Layeout from '../Layouts/layeout.vue'

import AllPostsHeader from '../Components/hero-section/all-posts-header.vue'
import FeaturedPost from '../Components/featured/featured-post.vue'
import post from '../Components/posts/post.vue'
import CategoryPost from '@/Components/posts/category-post.vue'

// import FeaturedPost from '../featured/featured-post.vue'
// import AllPostsHeader from '../hero-section/all-posts-header.vue'
// import post from './post.vue'

export default{
  components: { Layeout, FeaturedPost, AllPostsHeader ,post, CategoryPost},
  props:{
    posts:Array,
    category:Array
  },
    setup(props){

return{

}
    },
}
</script>

<template>
 <layeout>

<!-- <AllPostsHeader/> -->
<section>
      <div>
        <h2
          class="font-mono font-semibold text-lg text-center mt-20 text-gray-600 md:text-2xl lg:3xl"
        >
          Latest
          <span class="secondary-color">Manners and Ettequettes</span> blog in {{category.title}} category </h2>
        <div class="flex gap-6 justify-center">

        </div>
      </div>
    </section>

<section   class="grid grid-cols-1 md:grid md:grid-cols-2 lg:grid-cols-3 gap-8 m-10">
    <!-- <post  v-for="post in posts" :key="post.id" :post='post'/> -->
    <category-post v-for="post in posts" :key="post.id" :post="post" :category="category"/>
</section>


 </layeout>
</template>
<style>
</style>
