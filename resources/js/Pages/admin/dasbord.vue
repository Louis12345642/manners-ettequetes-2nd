<script setup>
import layeoutVue from "@/Layouts/layeout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import allPostsHeaderVue from "@/Components/hero-section/all-posts-header.vue";
import post from "../admin/post.vue";
import { Static } from "vue";
import Statistic from "./statistic.vue";
import tableVue from './table.vue'
defineProps({
    posts: Array,
});
</script>

<template>
    <main>
        <nav
            class="card-bg p-4 card-border lg:grid grid-cols-2 lg:gap-10 justify-items-around"
        >
            <div>
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    class="text-xs font-bold uppercase"
                    >Dashboard</Link
                >
            </div>

            <section class="flex justify-end gap-10 mx-10">
                <div>
                    <form>
                        <label
                            for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only"
                            >Search</label
                        >
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                            >
                                <svg
                                    aria-hidden="true"
                                    class="w-5 h-5 text-gray-500 dark:text-gray-400"
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
                            </div>
                            <input
                                type="search"
                                id="default-search"
                                class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Search..."
                                required
                            />
                            <!-- <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button> -->
                        </div>
                    </form>
                </div>

                <div>
                    <svg
                        aria-hidden="true"
                        class="w-5 h-5 mt-1"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </div>
            </section>
        </nav>
        <section class="lg:grid lg:grid-cols-5">


            <div class="lg:col-span-1 card-bg h-screen card-border p-4 cars-border">
                <div class="flex justify-center p-4">
                    <img class="w-20 h-20 rounded-full card-border-2 " src="https://i.pravatar.cc/60" alt="">


                </div>
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    class="text-xs font-bold uppercase flex justify-center"
                    >Dashboard</Link
                >


                <div class="mt-10 p-4 pb-4">
                    <h4 class="hover:bg-gray-200 pointer p-5 card-border rounded mb-4">
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                        class="text-xs font-bold uppercase"
                        >USERS MANAGEMENT</Link
                    >
                </h4>

                <h4 class="hover:bg-gray-200 pointer p-5 card-border rounded mb-4">
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                        class="text-xs font-bold uppercase"
                        >categories</Link
                    >
                </h4>
                <h4 class="hover:bg-gray-200 pointer p-5 card-border rounded mb-4">
                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                        class="text-xs font-bold uppercase"
                        >posts</Link
                    >
                </h4>
                <div class="hover:bg-gray-200 pointer p-5 card-border rounded mb-4">

                    <Link
                        v-if="$page.props.auth.user"
                        :href="route('dashboard')"
                        class="text-xs font-bold uppercase"
                        >Dashboard</Link
                    >
                </div>
                </div>
            </div>
            <div class="bg-gray-200 card-border lg:col-span-4 overflow-scroll max-h-screen ">

                <section class="three-ccard-wrapper grid grid-cols-2 justify-items-center p-6 gap-10">
    <Statistic/>
    <Statistic/>




                </section>
                <section class="p-10">
             <tableVue :posts="posts"/>
                </section>
            </div>
        </section>
    </main>
</template>
<style>
.card-border-2{
    border: 3px solid rgb(1, 114, 207);
}

</style>
