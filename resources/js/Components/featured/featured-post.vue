
<script>
import { Link } from '@inertiajs/inertia-vue3'
import { ref } from '@vue/reactivity'
export default{
    components:{
Link
    },
   props:['posts'],

    setup(props){
const FeaturedPost=props.posts
const categoryRoute=ref('/posts/categories/'+FeaturedPost[  1].id)
const authorRoute=ref('/posts/author/'+FeaturedPost[1].id)

return{
    FeaturedPost,
    categoryRoute,
    authorRoute

}

    }
}
</script>
<template>
    <main>
      <!-- featured section wrapper -->
      <section
        class="grid grid-cols-1 lg:grid lg:grid-cols-6 gap-8 m-10 md:grid md:grid-cols-4"
      >
        <!-- featured card -->
        <section
          class="card-bg card-border rounded-md lg:col-span-4 hover:bg-gray-200 cursor-pointer shadow-md md:col-span-4"
        >
          <!-- card items alignment -->
          <!-- <div
            class="card-border rounded-md lg:col-span-2 hover:bg-gray-200 cursor-pointer shadow-md md:col-span-2"
          > -->
            <div class="wrapper grid grid-cols-1 gap-3 lg:flex md:flex">
              <!-- image container -->

              <div class="m-2 lg:inner-card lg:gap-2">
                <img
                  class="rounded-lg card-border lg:w-50 lg:lg:h-60 lg:rounded-xl lg:m-5 md:w-50 md:h-60 md:m-5"
                  src="side1.jpg"
                  alt=""
                />
              </div>
              <!-- card header,excert and title text dev -->

              <article class="p-5 lg:m-4 lg:p-5">
                <div>
                    <Link :href="categoryRoute">
                <button
                class="ml-5 text-sm text-red-500 font-semibold rounded-full border border-purple-200 w-20 h-6"
              >
                home
              </button>
              </Link>
                </div>

                <h1 class="mb-4 font-mono font-semibold text-2xl">
                {{FeaturedPost[0].title}}
                </h1>
                <p class="text-gray-900 leading-7 text-md">
                    {{FeaturedPost[0].excert}}
                </p>
                <p class="mt-2 block text-gray-400 text-xs">
                  Published <time>1 day ago</time>
                </p>
                <section class="flex justify-between">
                  <div class="flex gap-3">
                    <Link :href="authorRoute">
                <p
                    class="mt-10 align-bottom font-sans font-semibold text-gray-500"
                  >
                  {{FeaturedPost[0].author.name}}
                  </p>
                </Link>
                    <img
                      class="mt-7 w-12 h-12 rounded-full round-border"
                      src="atomic-2.jpg"
                      alt=""
                    />
                  </div>
                  <div class="p-4 mt-6">
                    <Link href="/posts/1"> <button
                    class="font-sans font-semibold btn-bg rounded-lg text-sm h-8"
                  >
                    read more
                  </button></Link>
                  </div>
                </section>
              </article>
            </div>
          <!-- </div> -->
        </section>

        <!-- end of one card -->
        <!-- Trending -->
        <section
          class="lg:card-bg card-border rounded-md card-bg lg:col-span-2 lg:row-span-2 shadow-md md:col-span-2"
        >
          <br />
          <h1 class="font-bold font-mono text-center mt-6 text-3xl">
            Trending
          </h1>
          <br />

          <section
            class="wrapper grid grid-cols-2 gap-5 mt-20 hover:bg-gray-200 cursor-pointer card-border m-4 rounded-lg"
          >
            <!-- image container -->

            <div class="m-2">
              <img
                class="rounded-lg card-border"
                src="vinicius-amnx-amano-qckXUZefhoU-unsplash.jpg"
                alt=""
              />
            </div>

           <Link href="posts/3">
            <article class="mt-5">
              <p class="font-semibold leading-6 mb-4 text-sm">
                {{FeaturedPost[3].title}}
              </p>
              <p class="mt-2 block text-gray-400 text-xs">
                Published <time>{{FeaturedPost[3].created_at}}</time>
              </p>
            </article>
        </Link>

          </section>

          <hr class="m-8" />
          <section
            class="wrapper grid grid-cols-2 gap-5 mt-20 hover:bg-gray-200 cursor-pointer card-border m-4 rounded-lg"
          >
            <!-- image container -->

            <div class="m-2">
              <img
                class="rounded-lg card-border"
                src="atomic.jpg"
                alt=""
              />
            </div>
            <Link href="posts/4">
            <article class="mt-5">
              <p class="font-semibold leading-6 mb-4 text-sm">
                {{FeaturedPost[4].title}}
              </p>
              <p class="mt-2 block text-gray-400 text-xs">
                Published <time>{{FeaturedPost[4].created_at}}</time>
              </p>
            </article>
            </Link>
          </section>
          <hr class="m-8" />
          <section
            class="wrapper grid grid-cols-2 gap-5 mt-20 hover:bg-gray-200 cursor-pointer card-border m-4 rounded-lg"
          >
            <!-- image container -->

            <div class="m-2">
              <img
                class="rounded-lg card-border"
                src="tech.jpg"
                alt=""
              />
            </div>

            <Link href="posts/5">
            <article class="mt-5">
              <p class="font-semibold leading-6 mb-4 text-sm">
                {{FeaturedPost[5].title}}
              </p>
              <p class="mt-2 block text-gray-400 text-xs">
                Published <time>{{FeaturedPost[5].created_at}}</time>
              </p>
            </article>
            </Link>
          </section>
          <hr class="m-8" />
          <section
            class="wrapper grid grid-cols-2 gap-5 mt-20 hover:bg-gray-200 cursor-pointer card-border m-4 rounded-lg"
          >
            <!-- image container -->

            <div class="m-2">
              <img
                class="rounded-lg card-border"
                src="atomic-2.jpg"
                alt=""
              />
            </div>
            <Link href="posts/6">
            <article class="mt-5">
              <p class="font-semibold leading-6 mb-4 text-sm">
                {{FeaturedPost[6].title}}
              </p>
              <p class="mt-2 block text-gray-400 text-xs">
                Published <time>{{FeaturedPost[6].created_at}}</time>
              </p>
            </article>
            </Link>
          </section>
        </section>
        <!-- this is a card section -->
        <section
          class="card-bg card-border rounded-md lg:col-span-2 hover:bg-gray-200 cursor-pointer shadow-md md:col-span-2"
        >
          <!-- this the wrapper for all content -->
          <div class="wrapper grid grid-cols-1 gap-3">
            <!-- image container -->

            <section class="m-2">
              <img
                class="rounded-lg card-border"
                src= "atomic-2.jpg"
                alt=""
              />
            </section>
            <!-- card header,excert and title text dev -->
            <section>
                <Link :href="categoryRoute">
                <button
                class="ml-5 text-sm text-red-500 font-semibold rounded-full border border-purple-200 w-20 h-6"
              >
                home
              </button>
              </Link>
            </section>

            <article class="p-5">
              <h1 class="mb-4 font-mono font-semibold text-2xl">
                {{FeaturedPost[1].title}}
              </h1>
              <p class="text-gray-900 leading-7 text-md">
                {{FeaturedPost[1].excert}}
              </p>
              <p class="mt-2 block text-gray-400 text-xs">
                Published <time>1 day ago</time>
              </p>
              <!-- this is user and image and  name -->
              <section class="flex justify-between">
                <!-- user name -->
                <div class="flex gap-3">
                    <Link :href="authorRoute">
                <p
                    class="mt-10 align-bottom font-sans font-semibold text-gray-500"
                  >
                  {{FeaturedPost[1].author.name}}
                  </p></Link>
                  <img
                    class="mt-7 w-12 h-12 rounded-full round-border"
                    src="atomic-2.jpg"
                    alt=""
                  />
                </div>
                <!-- readmore button -->
                <div class="p-4 mt-6">
                 <Link href="/posts/2"> <button
                    class="font-sans font-semibold btn-bg rounded-lg text-sm h-8"
                  >
                    read more
                  </button></Link>
                </div>
              </section>
            </article>
          </div>
        </section>
        <!-- this is a card section -->

        <section
          class="card-bg card-border rounded-md lg:col-span-2 hover:bg-gray-200 cursor-pointer shadow-md md:col-span-2"
        >
          <!-- this the wrapper for all content -->
          <div class="wrapper grid grid-cols-1 gap-3">
            <!-- image container -->

            <section class="m-2">
              <img
                class="rounded-lg card-border"
                src="atomic.jpg"
                alt=""
              />
            </section>
            <!-- card header,excert and title text dev -->
            <section>
                <Link :href="categoryRoute">
                <button
                class="ml-5 text-sm text-red-500 font-semibold rounded-full border border-purple-200 w-20 h-6"
              >
                home
              </button>
              </Link>
            </section>

            <article class="p-5">
              <h1 class="mb-4 font-mono font-semibold text-2xl">
                {{FeaturedPost[2].title}}
              </h1>
              <p class="text-gray-900 leading-7 text-md">
                {{FeaturedPost[2].excert}}
              </p>
              <p class="mt-2 block text-gray-400 text-xs">
                Published <time>1 day ago</time>
              </p>
              <!-- this is user and image and  name -->
              <section class="flex justify-between">
                <!-- user name -->
                <div class="flex gap-3">
                    <Link :href="authorRoute">
                <p
                    class="mt-10 align-bottom font-sans font-semibold text-gray-500"
                  >
                  {{FeaturedPost[2].author}}
                  </p></Link>
                  <img
                    class="mt-7 w-12 h-12 rounded-full round-border"
                    src="atomic-2.jpg"
                    alt=""
                  />
                </div>
                <!-- readmore button -->
                <div class="p-4 mt-6">
                    <Link href="/posts/3"> <button
                    class="font-sans font-semibold btn-bg rounded-lg text-sm h-8"
                  >
                    read more
                  </button></Link>

                </div>
              </section>
            </article>
          </div>
        </section>
      </section>
    </main>
</template>
<style>
</style>
