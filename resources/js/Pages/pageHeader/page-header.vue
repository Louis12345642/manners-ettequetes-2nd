<script setup>


</script>
<template>
  <nav class="nav-bg w-full h-22 border-b-slate-100">
      <section class="container">
        <div class="flex justify-between">
          <head>
            <a href="/">
              <h1 class="text-lg font-bold font-mono md:text-xl lg:text-2xl">
                <span class="secondary-color">Manners</span> & Ettequetes
              </h1></a
            >
          </head>
          <ul
            class="hidden lg:flex lg:gap-10 font-sans open sans font-semibold"
          >
            <li>
              <a href="/signup.html" class="text-xs font-bold uppercase"
                >sign up</a
              >
            </li>
            <li>
              <a href="/signin.html" class="text-xs font-bold uppercase"
                >sign in</a
              >
            </li>
            <li>
              <a href="/contact.html" class="text-xs font-bold uppercase"
                >Contact</a
              >
            </li>
            <li>
              <a href="/about.html" class="text-xs font-bold uppercase"
                >About</a
              >
            </li>
            <li></li>
            <li>
              <div class="mt-8 md:mt-0">
                <a href="/" class="text-xs font-bold uppercase">Home Page</a>
                <a
                  href="#"
                  class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5"
                  >Subscribe for Updates</a
                >
              </div>
            </li>
          </ul>
          <!-- nav icons manualy made  -->
          <section class="lg:hidden cursor-pointer">
            <div class="icon"></div>
            <div class="icon"></div>
            <div class="icon"></div>
          </section>
        </div>
      </section>
    </nav>

</template>
<style>
</style>
