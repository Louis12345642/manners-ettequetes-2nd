<script setup>
import layeoutVue from "@/Layouts/layeout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import allPostsHeaderVue from "@/Components/hero-section/all-posts-header.vue";
import post from "../admin/post.vue";
import { Static } from "vue";
import Statistic from "./statistic.vue";
import tableVue from './table.vue'
import addminlayout from './layeout/addminlayout.vue'
defineProps({
    posts: Array,
});
</script>

<template>
<addminlayout :posts="posts">
    <section class="three-ccard-wrapper grid grid-cols-2 justify-items-center p-6 gap-10">
    <!-- <Statistic/>
    <Statistic/> -->
    </section>
    <tableVue :posts="posts" />
</addminlayout>
</template>
<style>
.card-border-2{
    border: 3px solid rgb(1, 114, 207);
}

</style>
