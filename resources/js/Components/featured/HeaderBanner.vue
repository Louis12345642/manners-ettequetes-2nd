
<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import allPostsHeaderVue from '../hero-section/all-posts-header.vue';
defineProps({
    message:String,
    Errormessage:String
})

</script>

<template>
 <header >


    <section
  class="relative bg-[url(https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80)] bg-cover bg-center bg-no-repeat"
>
  <div
    class="absolute inset-0 bg-white/75 sm:bg-transparent sm:bg-gradient-to-r sm:from-white/95 sm:to-white/25"
  ></div>
<section v-if="message" class="flex justify-center p-10">
    <div

class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-emerald-500 flex  "
>
<span class="text-xl inline-block mr-5 align-middle">
    <i class="fa fa-bell"></i>
</span>
<span class="inline-block align-middle mr-8">
    {{ message }}
</span>
<button
    class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none"
    onclick="closeAlert(event)"
>
    <span>×</span>
</button>
</div>

</section>

<section v-if="Errormessage" class="flex justify-center p-10">
    <div

class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500 flex  "
>
<span class="text-xl inline-block mr-5 align-middle">
    <i class="fa fa-bell"></i>
</span>
<span class="inline-block align-middle mr-8">
    {{ Errormessage }}
</span>
<button
    class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none"
    onclick="closeAlert(event)"
>
    <span>×</span>
</button>
</div>

</section>
  <div
    class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8"
  >
    <div class="max-w-xl text-center sm:text-left">
      <h1 class="text-3xl font-extrabold sm:text-5xl">
        welcome to manners

        <strong class="block font-extrabold text-blue-700">
          ettiquetes.
        </strong>
      </h1>

      <p class="mt-4 max-w-lg sm:text-xl sm:leading-relaxed">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo
        tenetur fuga ducimus numquam ea!
      </p>

      <div class="mt-8 flex flex-wrap gap-4 text-center">
        <Link href="/"
                    class="mt-4 mx-4 px-4 py-2  bg-purple-500 text-sm text-white font-semibold rounded-full border border-purple-500 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2 w-36">
             Get started
                </Link>

        <Link href="/"
                    class="mt-4 mx-4 px-4 py-2 text-w text-sm text-purple-600 font-semibold rounded-full border border-purple-500 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2 w-36">
              learn more
                </Link>
      </div>
    </div>
  </div>
</section>


        </header>

</template>
<style scoped>

</style>
