<script setup>
import { Link } from '@inertiajs/inertia-vue3'
import { ref } from '@vue/reactivity'
import moment from 'moment'

defineProps({
    post:Array
})

const short = (title, limit) => {
    if (title.length > limit) title = title.substr(0, limit) + "...";
    return title;
};

</script>
<template>


 <main>
      <!-- <section
        class="grid grid-cols-1 md:grid md:grid-cols-2 lg:grid-cols-3 gap-8 m-10"
      > -->
      <section
            class="card-bg card-border rounded-md lg:col-span-2 hover:bg-gray-200 cursor-pointer shadow-md md:col-span-2"
        >
            <!-- this the wrapper for all content -->
            <div class="wrapper grid grid-cols-1 gap-3">
                <!-- image container -->

                <section class="m-4">
                    <img
                        class="rounded-lg card-border card-h"
                        src="/atomic.jpg"
                        alt=""
                    />
                </section>
                <!-- card header,excert and title text dev -->
                <section>
                    <div class="space-x-2 ml-5">
                        <Link
                            :href="
                                route(
                                    'posts.under.one.category',
                                    post.category.slug
                                )
                            "
                            class="px-2 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                            style="font-size: 10px"
                            >{{ post.category.title }}</Link
                        >
                    </div>
                </section>

                <Link :href="route('post.show', post.slug)" class="px-5 py-4">
                    <h1 class="text-2xl font-extrabold sm:text-2xl mb-3">
                        {{ short(post.title, 25) }}
                    </h1>
                    <p class="text-gray-900 leading-7 text-md">
                        {{ short(post.excerpt, 60) }}
                    </p>
                    <p class="mt-4 mx-1 block text-gray-500 text-mono text-xs">
                        Published
                        <time
                            >{{
                                moment(post.created_at)
                                    .startOf("hour")
                                    .fromNow()
                            }}
                        </time>
                    </p>
                    <!-- this is user and image and  name -->
                    <section class="flex justify-between">
                        <!-- user name -->
                        <div class="flex gap-3">
                            <Link
                                :href="
                                    route('authors.post', post.author.username)
                                "
                            >
                                <p
                                    class="mt-5 align-bottom text-sm font-semibold text-gray-500"
                                >
                                    {{ post.author.name }}
                                </p>
                            </Link>
                            <img
                                class="mt-4 ml-4 w-10 h-10 rounded-full round-border"
                                src="/atomic.jpg"
                                alt=""
                            />
                        </div>
                        <!-- readmore button -->
                        <div class="p-4 mt-2">
                            <Link :href="route('post.show', post.slug)">
                                <button
                                    class="font-sans font-semibold btn-bg rounded-lg text-sm h-8"
                                >
                                    read more
                                </button></Link
                            >
                        </div>
                    </section>
                </Link>
            </div>
        </section>


    </main>
</template>
<style>
</style>
