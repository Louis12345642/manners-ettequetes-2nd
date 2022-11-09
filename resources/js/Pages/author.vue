<script setup>
import Layeout from '../Layouts/layeout.vue'

import AllPostsHeader from '../Components/hero-section/all-posts-header.vue'
import FeaturedPost from '../Components/featured/featured-post.vue'
import post from '../Components/posts/post.vue'
import authorPostVue from '@/Components/author-post.vue'

// import FeaturedPost from '../featured/featured-post.vue'
// import AllPostsHeader from '../hero-section/all-posts-header.vue'
// import post from './post.vue'

const props = defineProps(['posts','author']);
</script>

<template>
 <layeout>

<!-- <AllPostsHeader :author="props.author"/> -->
<section>
      <div>
        <h2
          class="font-mono font-semibold text-lg text-center mt-20 text-gray-600 md:text-2xl lg:3xl"
        >
          Latest
          <span class="secondary-color">Manners and Ettequettes</span> blog
          article
        </h2>
        <div class="flex gap-6 justify-center">
          <p class="mt-10 align-bottom font-sans font-semibold text-gray-500">
            By {{props.author.name}}
          </p>
          <img
            class="mt-7 w-12 h-12 rounded-full round-border"
            src="atomic-2.jpg"
            alt=""
          />
        </div>
      </div>
    </section>
<section   class="grid grid-cols-1 md:grid md:grid-cols-2 lg:grid-cols-3 gap-8 m-10">
<authorPostVue v-for="post in posts" :key="post.id" :post="post" :author="props.author"/>
</section>
<!-- <post  v-for="post in post" :key="post.id" :post='post' :author="props.author"/> -->


 </layeout>
</template>
<style>
</style>
