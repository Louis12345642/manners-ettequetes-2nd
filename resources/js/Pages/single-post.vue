
<script>
import layeout from '@/Layouts/layeout.vue'
import { Link } from '@inertiajs/inertia-vue3'
import { ref } from 'vue'
import moment from 'moment'
import comment from '../Components/comment/comment.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue';
export default{
  components: { layeout ,Link,comment,PrimaryButton},
props:{
    singlePost:Array
},
setup(props){
    const singlePost=props.singlePost
    const authorRoute=ref('/author/'+singlePost.author.username)
    const categoryRoute=ref('/categories/'+singlePost.category.slug)
    return{
        moment,
        authorRoute,
        categoryRoute
    }
}
}
</script>

<template>
 <layeout>

    <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6 container">
    <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
        <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
            <img src="/atomic.jpg" alt="" class="rounded-xl">

            <p class="mt-4 block text-gray-400 text-xs">
                Published <time>{{moment(singlePost.created_at).startOf('hour').fromNow()}} </time>
            </p>

            <div class="flex items-center lg:justify-center text-sm mt-4">
                <img class="mt-7 w-16 h-16 rounded-full round-border" src="https://i.pravatar.cc/60"  alt="">
                <div class="ml-5 text-left mt-5">
                 <Link :href="authorRoute">   <h5 class="font-bold">   {{singlePost.author.name}}</h5></Link>
                    <h6>Manners and Ettiquetes</h6>
                </div>
            </div>
        </div>

        <div class="col-span-8">
            <div class="hidden lg:flex justify-between mb-6">
                <Link href="/"
                    class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                    <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path class="fill-current"
                                d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                            </path>
                        </g>
                    </svg>

                    Back to Posts
                </Link>


                <div class="space-x-2">
                    <Link :href="categoryRoute"
                        class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                        style="font-size: 10px">{{singlePost.category.title }}</Link>

                </div>
            </div>

            <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                {{singlePost.title}}

            </h1>

            <div class="space-y-4 lg:text-lg leading-loose space-x-2">
               <p>   {{singlePost.body}}</p>

            </div>
        </div>
    </article>
    <form class="m-auto  " method="POST" >


<header class="flex items-center">
    <img src="https://i.pravatar.cc/60?"
         alt=""
         width="40"
         height="40"
         class="rounded-full">

    <h2 class="ml-4">Want to participate?</h2>
</header>

<div class="mt-6">
    <textarea
        name="body"
        class="w-full text-sm focus:outline-none focus:rounded-lg rounded-lg"
        rows="5"
        placeholder="Quick, thing of something to say!"
        required></textarea>


        <span class="text-xs text-red-500"></span>

</div>

<div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
    <PrimaryButton class="ml-4" >
     submit
    </PrimaryButton>
</div>
</form>
    <comment v-for="comment in singlePost.comment"  :comment="comment" :name="singlePost.author.name" :key="comment.id"/>

</main>
 </layeout>
</template>
<style>

</style>
