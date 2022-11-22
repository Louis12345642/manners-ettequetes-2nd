<script setup>
import layeout from '../Layouts/layeout.vue'
import contactCard from '../Components/about-page/contact-card.vue'
import { ref } from 'vue';
defineProps({
About:String
})
const contactCardData=ref([{
  email:'mannersandettiquete@me.com',
  contact:'+211921-000-267'
}]);
</script>

<template>
<layeout>
    <section>
      <div>
        <h2
          class="font-mono font-semibold text-lg text-center mt-20 text-gray-600 md:text-2xl lg:3xl"
        >
More about us
          <span class="secondary-color">Manners and Ettequettes</span>
        </h2>
        <div class="flex gap-6 justify-center">
          <p class="mt-10 align-bottom font-sans font-semibold text-gray-500">
            By Manner and Ettequetes
          </p>
          <img
            class="mt-7 w-12 h-12 rounded-full round-border"
            src="logo.jpg"
            alt=""
          />
        </div>
      </div>
    </section>
  <!-- about-->
  <main>
    <section class="container">
        <section class=" lg:mx-auto lg:flex  lg:justify-center md:mx-auto md:flex  md:justify-center">
<contactCard :contactData="contactCardData"/>
        </section>
    </section>
  </main>

<main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6 container">
  <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
      <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
          <img src="atomic.jpg" alt="" class="rounded-xl">


          <div class="flex items-center lg:justify-center text-sm mt-4">
              <img class="mt-7 w-16 h-16 rounded-full round-border" src="logo.jpg" alt="">
              <div class="ml-5 text-left mt-5">
                  <h5 class="font-bold">  Mubarak Kual Louis</h5>
                  <h6>Manners and Ettiquetes</h6>
              </div>
          </div>
      </div>

      <div class="col-span-8">
          <div class="hidden lg:flex justify-between mb-6">
              <a href="/"
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

           get back home
              </a>

          </div>

          <h1 class="font-bold text-3xl lg:text-4xl mb-10">
        Read more about us manner and ettiquetes

          </h1>

          <div class="space-y-4 lg:text-lg leading-loose space-x-2">
              <p v-for="Aboutdata in About"  :key="Aboutdata.id" >{{Aboutdata.content}}</p>
          </div>
      </div>
  </article>
</main>
</layeout>
</template>
<style>
</style>
