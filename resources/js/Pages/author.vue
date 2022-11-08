<script setup>
import Layeout from '../Layouts/layeout.vue'

import AllPostsHeader from '../Components/hero-section/all-posts-header.vue'
import FeaturedPost from '../Components/featured/featured-post.vue'
import post from '../Components/posts/post.vue'

// import FeaturedPost from '../featured/featured-post.vue'
// import AllPostsHeader from '../hero-section/all-posts-header.vue'
// import post from './post.vue'

const props = defineProps(['posts','author']);
</script>

<template>
 <layeout>

<AllPostsHeader :author="props.author"/>

<section   class="grid grid-cols-1 md:grid md:grid-cols-2 lg:grid-cols-3 gap-8 m-10">
    <post  v-for="post in post" :key="post.id" :post='post'/>
</section>


 </layeout>
</template>
<style>
</style>
