<script>
import { Link } from '@inertiajs/inertia-vue3'
export default{
    components:{
        Link
    }

}
</script>
<template>
  <nav class="nav-bg w-full h-22  border-b-slate-100 ">
      <section class="container">
        <div class="flex justify-between ">

            <h1>
              <Link href="/"><h1 class="text-lg font-bold font-mono md:text-xl lg:text-2xl">
                <span class="secondary-color">Manners</span> & Ettequetes
              </h1></Link>
              </h1
            >

          <ul
            class="hidden lg:flex lg:gap-10 font-sans open sans font-semibold"
          >
            <li>
              <Link href="/signup" class="text-xs font-bold uppercase"
                >sign up</Link
              >

            </li>
            <li>
              <Link href="/signin" class="text-xs font-bold uppercase"
                >sign in</Link
              >
            </li>
            <li>
              <Link href="/contact" class="text-xs font-bold uppercase"
                >Contact</Link
              >
            </li>
            <li>


            <Link href="/about"   class="text-xs font-bold uppercase">About</Link>


            </li>
            <li></li>
            <li>
              <div class="mt-8 md:mt-0">
                <Link href="/" class="text-xs font-bold uppercase">Home Page</Link>
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
