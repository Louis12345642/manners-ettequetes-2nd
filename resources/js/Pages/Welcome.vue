<script setup>
import Layeout from "../Layouts/layeout.vue";

import AllPostsHeader from "../Components/hero-section/all-posts-header.vue";
import FeaturedPost from "../Components/featured/featured-post.vue";
import post from "../Components/posts/post.vue";
import DropdownVue from "@/Components/build-in-components/Dropdown.vue";
import { Link } from '@inertiajs/inertia-vue3'
import { computed } from "@vue/reactivity";
import { usePage } from '@inertiajs/inertia-vue3'
import HeaderBanner from "@/Components/featured/HeaderBanner.vue";


const props=defineProps({
    posts: Array,
   canLogin: Boolean,
    canRegister: Boolean,
})
let Errormessage =usePage().props.value.flashError.ErrormessageE
let message =usePage().props.value.flash.message
</script>

<template>


    <layeout :canLogin="canLogin" :canRegister="canRegister">
        <main >

      <header-banner :message="message"  :Errormessage="Errormessage"></header-banner>

        <section></section>
        <br>
        <AllPostsHeader title=" Home Good Ettiquesttes" />

        <FeaturedPost :posts="posts" />


        <!-- <section
            class="grid grid-cols-1 md:grid md:grid-cols-2 lg:grid-cols-3 gap-8 m-10"
        >
            <post v-for="post in posts.slice(8) " :key="post.id" :post="post" />
        </section> -->


        </main>
    </layeout>
</template>
<style></style>
