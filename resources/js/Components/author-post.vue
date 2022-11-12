<script>
import { Link } from '@inertiajs/inertia-vue3'
import { ref } from '@vue/reactivity'
import moment from 'moment'
export default{
    components:{
        Link

    },
    props:['post'],
    setup(props){
const post= props.post
// const author=props.author
const postRoute=ref('/posts/'+post.slug)
const categoryRoute=ref('/categories/'+post.category.slug)
const authorRoute=ref('/author/'+post.author.username)

return{
    post,
    postRoute,
    categoryRoute,
    authorRoute,
    moment


}
    }
}


</script>
<template>


 <main>
      <!-- <section
        class="grid grid-cols-1 md:grid md:grid-cols-2 lg:grid-cols-3 gap-8 m-10"
      > -->
       <Link :href="postRoute">
        <div
          class="card-bg card-border rounded-md hover:bg-gray-100 cursor-pointer shadow-md"
        >
          <div class="wrapper grid grid-cols-1 gap-3">
            <!-- image container -->

            <div class="m-2">
              <img
                class="rounded-lg card-border"
                src="/djengo.jpg"
                alt=""
              />
            </div>
            <!-- card header,excert and title text dev -->
            <div>

                <div class="space-x-2 ml-5">
                    <Link :href="categoryRoute"
                        class="px-6 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                        style="font-size: 10px">{{post.category.title}}</Link>

                </div>

            </div>
            <div class="p-5">
              <h1 class="mb-4 font-mono font-semibold text-2xl">
               {{post.title}}
              </h1>
              <p class="text-gray-900 leading-7 text-md">
                {{post.body}}
              </p>
              <p class="mt-2 block text-gray-400 text-xs">
                Published <time>{{moment(post.created_at).startOf('hour').fromNow()}} </time>
              </p>
              <section class="flex justify-between">
                <div class="flex gap-3">
               <Link :href="authorRoute">
                <p
                    class="mt-10 align-bottom font-sans font-semibold text-gray-500"
                  >
                  {{post.author.name}}
                  </p></Link>
                  <img
                    class="mt-7 w-12 h-12 rounded-full round-border"
                    src="atomic-2.jpg"
                    alt=""
                  />
                </div>
                <div class="p-4 mt-6">
                  <button
                    class="font-sans font-semibold btn-bg rounded-lg text-sm h-8"
                  >
                    read more
                  </button>
                </div>
              </section>
            </div>
          </div>
        </div>

    </Link>


    </main>
</template>
<style>
</style>
