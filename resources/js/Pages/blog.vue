<script setup>
import Post from '@/Components/posts/post.vue';
import layeoutVue from '@/Layouts/layeout.vue';
import AllPostsHeader from "../Components/hero-section/all-posts-header.vue";
import { Link } from '@inertiajs/inertia-vue3'
defineProps({
    posts:Array
})
</script>
<template>
    <layeoutVue>

        <header class="max-w-xl mx-auto mt-20 text-center w-full h-full m-10">
            <div v-if="$page.props.auth.user">
                <h2
                    class="font-mono font-semibold text-lg text-center mt-20 text-gray-600 md:text-2xl lg:3xl"
                >
                    welcome back
                    <span class="secondary-color">
                        {{ $page.props.auth.user.name }}</span
                    >
                </h2>
                <div class="flex gap-3 justify-center">
                    <p
                        class="mt-10 align-bottom font-sans font-semibold text-gray-500"
                    >
                        {{ $page.props.auth.user.name }}
                    </p>
                    <img
                        class="mt-7 w-12 h-12 rounded-full round-border"
                        src="logo.jpg"
                        alt=""
                    />
                </div>
            </div>
            <AllPostsHeader title="letest blog posts " />


            <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-2 mb-5"></div>

            <form method="GET" action="#" class="flex items-center m-6">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div
                        class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-5 h-5 text-gray-500 dark:text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </div>
                    <input
                        name="search"
                        type="text"
                        id="simple-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                        placeholder="Search"
                        required=""
                    />
                </div>
                <button
                    type="submit"
                    class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300"
                >
                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                        ></path>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form>
        </header>
        <section


            class="grid grid-cols-1 md:grid md:grid-cols-2 lg:grid-cols-3 gap-8 m-10"
        >
<Post v-for="post in posts.data" :key="post.id" :post="post" />
</section>



<section  class="flex justify-end m-10">
  <ul class="inline-flex items-center -space-x-px">

    <li v-for="link in posts.links" :key="link.id">
      <Link :href="link.url" v-html="link.label" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300  bg-blue-50 hover:bg-blue-100 hover:text-blue-700"></Link>
    </li>

  </ul>
    </section>
    </layeoutVue>
</template>
