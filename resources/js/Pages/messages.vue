<script setup>
import addminlayout from './admin/layeout/addminlayout.vue'
defineProps({
    messages:Array,
    posts:Array
})


</script>
<template>
<addminlayout :posts="posts">
    <main class="grid grid-cols-1 ml-10  justify-center mt-8 gap-10 md:grid md:grids-cols-2 lg:grid lg:grid-cols-3">
    <div v-for="message in messages" :key="message.id" class="max-w-sm p-6 card-bg border border-gray-200 rounded-lg shadow-md ">
    <a href="#">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{message.name}}</h5>
    </a>
    <p class="mb-3 font-normal text-gray-700 ">{{message.message}}</p>
<div class="text-sm text-gray-500">
    {{message.email}}
</div>
</div>
 </main>
</addminlayout>




</template>
