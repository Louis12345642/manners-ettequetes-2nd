
<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { ref } from "@vue/reactivity";
import { toRefs } from "@vue/reactivity";

const props=defineProps({
    post:Array
})

let {post}=toRefs(props);

let postRoute=ref('posts/'+post.value.slug);

</script>

<template>
      <section class="wrapper grid grid-cols-2 gap-5 mt-20 hover:bg-gray-200 cursor-pointer card-border m-4 rounded-lg">
    <div class="m-2">
        <img class="rounded-lg card-border" src="atomic.jpg" alt="" />
    </div>
    <Link :href="postRoute">
        <article class="mt-5">
            <p class="font-semibold leading-6 mb-4 text-sm">
              {{post.title}}
            </p>
            <p class="mt-2 block text-gray-400 text-xs"></p>
            <div class="flex gap-5 justify-left font-bold text-lg">
                <h1>
                    <i class="fa fa-edit text-emerald-500"></i>
                </h1>
                <h1>
                    <i class="fa fa-plus-circle" style="color: #3d25b1"></i>
                </h1>
                <h1>
                    <i class="fa fa-trash" style="color: red"></i>
                </h1>
            </div>
        </article>
    </Link>
    </section>
</template>
