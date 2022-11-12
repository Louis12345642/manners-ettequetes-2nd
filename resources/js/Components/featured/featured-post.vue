
<script>
import { Link } from '@inertiajs/inertia-vue3'
import { ref } from '@vue/reactivity'
import moment from 'moment'
export default{
    components:{
Link
    },
   props:['posts'],

    setup(props){
const FeaturedPost=props.posts
const categoryRouteOne=ref('/posts/categories/'+FeaturedPost[0].category.slug)
const categoryRouteTwo=ref('/posts/categories/'+FeaturedPost[1].category.slug)
const categoryRoute3=ref('/posts/categories/'+FeaturedPost[2].category.slug)
const authorRoute1=ref('/posts/author/'+FeaturedPost[0].author.username)
const authorRoute2=ref('/posts/author/'+FeaturedPost[1].author.username)
const authorRoute3=ref('/posts/author/'+FeaturedPost[2].author.username)
const postRoute1=ref('/posts/'+FeaturedPost[3].slug)
const postRoute2=ref('/posts/'+FeaturedPost[4].slug)
const postRoute3=ref('/posts/'+FeaturedPost[6].slug)
const postRoute4=ref('/posts/'+FeaturedPost[7].slug)

const post1=ref('/posts/'+FeaturedPost[0].slug)
const post2=ref('/posts/'+FeaturedPost[2].slug)
const post3=ref('/posts/'+FeaturedPost[3].slug)




return{
    FeaturedPost,
    categoryRouteOne,
    categoryRouteTwo,
    categoryRoute3,
    authorRoute1,
    authorRoute2,
    authorRoute3,

    postRoute1,
 postRoute2,
 postRoute3,
 postRoute4,

  post1,
 post2,
 post3,
 moment

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
                  src="djengo.jpg"
                  alt=""
                />
              </div>
              <!-- card header,excert and title text dev -->

              <article class="p-5 lg:m-4 lg:p-5">
                <div>

                        <div class="space-x-2 ml-5">
                    <Link :href="categoryRouteOne"
                        class="px-3 py-1 my-4 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                        style="font-size: 10px">{{FeaturedPost[0].category.title }}</Link>

                </div>

                </div>

                <h1 class="mb-4 mt-4 font-mono font-semibold text-2xl">
                {{FeaturedPost[0].title}}
                </h1>
                <p class="text-gray-900 leading-7 text-md">
                    {{FeaturedPost[0].excert}}
                </p>
                <p class="mt-2 block text-gray-400 text-xs">
                  Published <time>{{moment(FeaturedPost[0].created_at).startOf('hour').fromNow()}} </time>
                </p>
                <section class="flex justify-between">
                  <div class="flex gap-3">
                    <Link :href="authorRoute1">
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
                    <Link :href="post1"> <button
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
                src="side2.jpg"
                alt=""
              />
            </div>


           <Link :href="postRoute1">
            <article class="mt-5">
              <p class="font-semibold leading-6 mb-4 text-sm">
                {{FeaturedPost[3].title}}
              </p>
              <p class="mt-2 block text-gray-400 text-xs">
                Published <time>{{moment(FeaturedPost[3].created_at).startOf('hour').fromNow()}} </time>
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
            <Link :href="postRoute2">
            <article class="mt-5">
              <p class="font-semibold leading-6 mb-4 text-sm">
                {{FeaturedPost[4].title}}
              </p>
              <p class="mt-2 block text-gray-400 text-xs">
                Published <time>{{moment(FeaturedPost[4].created_at).startOf('hour').fromNow()}} </time>
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
                src="logo.jpg"
                alt=""
              />
            </div>

            <Link :href="postRoute3">
            <article class="mt-5">
              <p class="font-semibold leading-6 mb-4 text-sm">
                {{FeaturedPost[5].title}}
              </p>
              <p class="mt-2 block text-gray-400 text-xs">
                Published <time>{{moment(FeaturedPost[5].created_at).startOf('hour').fromNow()}} </time>
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
            <Link :href="postRoute4">
            <article class="mt-5">
              <p class="font-semibold leading-6 mb-4 text-sm">
                {{FeaturedPost[6].title}}
              </p>
              <p class="mt-2 block text-gray-400 text-xs">
                Published <time>{{moment(FeaturedPost[6].created_at).startOf('hour').fromNow()}} </time>
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

                    <div class="space-x-2 ml-5">
                    <Link :href="categoryRouteTwo"
                        class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                        style="font-size: 10px">{{FeaturedPost[1].category.title }}</Link>

                </div>

            </section>

            <article class="p-5">
              <h1 class="mb-4 font-mono font-semibold text-2xl">
                {{FeaturedPost[1].title}}
              </h1>
              <p class="text-gray-900 leading-7 text-md">
                {{FeaturedPost[1].excert}}
              </p>
              <p class="mt-2 block text-gray-400 text-xs">
                Published <time>{{moment(FeaturedPost[1].created_at).startOf('hour').fromNow()}} </time>
              </p>
              <!-- this is user and image and  name -->
              <section class="flex justify-between">
                <!-- user name -->
                <div class="flex gap-3">
                    <Link :href="authorRoute2">
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
                 <Link :href="post2"> <button
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

                    <div class="space-x-2 ml-5">
                    <Link :href="categoryRoute3"
                        class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                        style="font-size: 10px">{{FeaturedPost[2].category.title }}</Link>

                </div>

            </section>

            <article class="p-5">
              <h1 class="mb-4 font-mono font-semibold text-2xl">
                {{FeaturedPost[2].title}}
              </h1>
              <p class="text-gray-900 leading-7 text-md">
                {{FeaturedPost[2].excert}}
              </p>
              <p class="mt-2 block text-gray-400 text-xs">
                Published <time>{{moment(FeaturedPost[2].created_at).startOf('hour').fromNow()}} </time>
              </p>
              <!-- this is user and image and  name -->
              <section class="flex justify-between">
                <!-- user name -->
                <div class="flex gap-3">
                    <Link :href="authorRoute3">
                <p
                    class="mt-10 align-bottom font-sans font-semibold text-gray-500"
                  >
                  {{FeaturedPost[2].author.name}}
                  </p></Link>
                  <img
                    class="mt-7 w-12 h-12 rounded-full round-border"
                    src="atomic-2.jpg"
                    alt=""
                  />
                </div>
                <!-- readmore button -->
                <div class="p-4 mt-6">
                    <Link :href="post3"> <button
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
