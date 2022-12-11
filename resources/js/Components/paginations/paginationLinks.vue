<template>
    <div v-if="links.length > 3">
      <div class="flex flex-wrap -mb-1">
        <template v-for="(link) in links" :key="link.id">
          <Link v-if="link.url === null"  class="mr-1 mb-1 px-4 py-3 text-sm leading-4 text-gray-400 border rounded bg-white " v-html="link.label" ></Link>
          <Link v-else class="mr-1 mb-1 px-4 py-3 text-sm leading-4 border rounded bg-white hover:bg-white focus:border-indigo-500 focus:text-indigo-500 cursor-pointer" :class="{ 'bg-blue-700 text-white': link.active }" :href="link.url" v-html="link.label"> </Link>
        </template>
      </div>
    </div>
  </template>
  <script setup>
  import { Link } from '@inertiajs/inertia-vue3';
defineProps({
    links:Array
})
  </script>
