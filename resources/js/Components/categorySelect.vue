<script setup>
defineProps({
    posts:Array,
    title:String,

})
</script>

<template>

<select id="countries" class=" w-full p-2.5 border-none  bg-red-100 hover:bg-gray-200 focus:border-none active:border-none cursor-pointer outline-0 text-xs font-bold uppercase rounded-md ">
  <option selected>{{title}}</option>
  <option class="lowercase font-bold rounded-lg text-sm" v-for="post in posts" :key="post.id" value="US">{{post.category.title}}</option>

</select>

</template>
