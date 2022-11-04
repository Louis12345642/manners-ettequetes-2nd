<script>
import Layeout from '../Layouts/layeout.vue'

import AllPostsHeader from '../Components/hero-section/all-posts-header.vue'
import FeaturedPost from '../Components/featured/featured-post.vue'
import post from '../Components/posts/post.vue'

// import FeaturedPost from '../featured/featured-post.vue'
// import AllPostsHeader from '../hero-section/all-posts-header.vue'
// import post from './post.vue'

export default{
  components: { Layeout, FeaturedPost, AllPostsHeader ,post},
    setup() {

    },
}
</script>

<template>
 <layeout>

    <section>
        <div>
        <h2
          class="font-mono font-semibold text-lg text-center mt-20 text-gray-600 md:text-2xl lg:3xl"
        >
          Latest
          <span class="secondary-color">Manners and Ettequettes</span> News
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
      </div>
    </section>
<FeaturedPost/>
<AllPostsHeader/>
<post/>

 </layeout>
</template>
<style>
</style>
