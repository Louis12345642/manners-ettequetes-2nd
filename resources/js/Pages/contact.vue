<script>
import layeout from '@/Layouts/layeout.vue'
export default{
  components: { layeout },

}
</script>
<template>
<layeout>
    <section>
      <div>
        <h2
          class="font-mono font-semibold text-lg text-center mt-20 text-gray-600 md:text-2xl lg:3xl"
        >
 contact us
          <span class="secondary-color">Manners and Ettequettes</span> @Manners & Ettequetes
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
  <!-- contact us  -->
  <main class="flex  justify-center mt-20 gap-10">


    <section>

        <div class=" p-5 my-4  card-bg card-border rounded-lg shadow-md h-70 hover:bg-gray-200 block">
            <!-- <img class="mx-auto mb-2"
                  src="/assets/icons/mailbox-icon.svg"
                  alt="mailbox letter"
                /> -->
                <h1 class="text-lg font-sans font-bold mt-3 text-center uppercase mb-3"> contact us</h1>
               <form class="p-5 py-3" action="">
                <label class="block my-3 font-mono font-bold" for="">Email</label>
                <input class="block my-3 input-width card-border rounded-md bg-slate-100 h-8" type="email">
                <label class="block my-3 font-mono font-bold" for="">Name</label>
                <input class="block my-3 input-width card-border rounded-md bg-slate-100 h-8" type="text">
                <label class="font-sans font-bold" for="">Message</label>
                <textarea class="block my-3 input-width bg-gray-100 card-border rounded-md active:border-purple-500" name="" ></textarea>
                <button class="mt-4 px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-500 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2 w-36">summit</button>
               </form>
        </div>

    </section>
  </main>
</layeout>
</template>
<style>
</style>
