<script>


</script>
<template>

    <!-- this is the footer section -->
    <footer
      class="card-bg card-border rounded-xl text-center py-16 px-10 mt-16 mx-8 mb-10 shadow-md hover:bg-gray-100"
    >
      <img
        src="/logo.jpg"
        alt=""
        class="mx-auto rounded-full logo-border"
      />
      <h5 class="text-3xl">Stay in touch with the latest posts</h5>
      <p class="text-sm">Promise to keep the inbox clean. No bugs.</p>

      <div class="mt-10">
        <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
          <form method="POST" action="#" class="lg:flex text-sm">
            <div class="lg:py-3 lg:px-5 flex items-center">
              <label for="email" class="hidden lg:inline-block">
                <img
                  src="/mailbox-icon.svg"
                  alt="mailbox letter"
                />
              </label>

              <input
                id="email"
                type="text"
                placeholder="Your email address"
                class="lg:bg-transparent pl-4 focus-within:outline-none card-border h-4"
              />
            </div>

            <button
              type="submit"
              class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase h-10 py-3 px-8"
            >
              Subscribe
            </button>
          </form>
        </div>
      </div>
    </footer>
</template>
<style>
</style>
