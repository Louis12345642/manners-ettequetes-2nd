
<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import allPostsHeaderVue from '../hero-section/all-posts-header.vue';

</script>

<template>
 <header >
            <!-- <div v-if="$page.props.auth.user">
                class="max-w-xl mx-auto mt-20 text-center w-full h-full m-10
                <h2
                    class="font-mono font-semibold text-lg text-center mt-20 text-gray-600 md:text-2xl lg:3xl"
                >
                    welcome back
                    <span class="secondary-color">
                        {{ $page.props.auth.user.name }}</span
                    >
                </h2>
                <div class="flex gap-6 justify-center">
                    <p
                        class="mt-10 align-bottom font-sans font-semibold text-gray-500"
                    >
                        {{ $page.props.auth.user.name }}
                    </p>
                    <img
                        class="mt-7 w-12 h-12 rounded-full round-border"
                        src="logo.jpg"
                        alt=""
                    />
                </div>
            </div> -->

            <!-- <h1 v-else class="text-3xl">
                welcome to
                <span class="text-blue-500">Manners and </span>ettiquetes
                <p class="text-sm mt-8 mx-6">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Tempora a eius assumenda vitae ab accusamus similique
                    dignissimos reprehenderit temporibus mollitia?
                </p>
            </h1> -->

            <!-- <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8"></div>

            <div
                v-if="$page.props.flash.message"
                class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-emerald-500"
            >
                <span class="text-xl inline-block mr-5 align-middle">
                    <i class="fa fa-bell"></i>
                </span>
                <span class="inline-block align-middle mr-8">
                    {{ $page.props.flash.message }}
                </span>
                <button
                    class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none"
                    onclick="closeAlert(event)"
                >
                    <span>×</span>
                </button>
            </div>

            <div
                v-if="$page.props.flashError.ErrormessageE"
                class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500"
            >
                <span class="text-xl inline-block mr-5 align-middle">
                    <i class="fa fa-bell"></i>
                </span>
                <span class="inline-block align-middle mr-8">
            {{$page.props.flashError.ErrormessageE}}
                </span>
                <button
                    class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none"
                    onclick="closeAlert(event)"
                >
                    <span>×</span>
                </button>
            </div>


            <form method="GET" action="#" class="flex items-center m-6">
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div
                        class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
                    >
                        <svg
                            aria-hidden="true"
                            class="w-5 h-5 text-gray-500 dark:text-gray-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </div>
                    <input
                        name="search"
                        type="text"
                        id="simple-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                        placeholder="Search"
                        required=""
                    />
                </div>
                <button
                    type="submit"
                    class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300"
                >
                    <svg
                        class="w-5 h-5"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
                        ></path>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </form> -->
    <!-- <main class="card-bg p-20 ">
        <section class=" w-screen ">
               <img src="tech.jpg"   /> -->


    <section
  class="relative bg-[url(https://images.unsplash.com/photo-1604014237800-1c9102c219da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80)] bg-cover bg-center bg-no-repeat"
>
  <div
    class="absolute inset-0 bg-white/75 sm:bg-transparent sm:bg-gradient-to-r sm:from-white/95 sm:to-white/25"
  ></div>

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
