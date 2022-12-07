<script setup>
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-vue3";


defineProps({
    posts:Array
})

const Delete = (slug)=>{
    if(confirm('are you sure want to delete this post')){

        Inertia.delete(route('post.delete',slug))
    }

}

</script>

<template>

<div class="overflow-x-auto relative shadow-md sm:rounded-lg card-border">
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 ">
            <tr>
                <th scope="col" class="py-3 px-6">
                   post title
                </th>
                <!-- <th scope="col" class="py-3 px-6">
                    Color
                </th> -->
                <th scope="col" class="py-3 px-6">
                    Category
                </th>
                <th scope="col" class="py-3 px-6">
                  user
                </th>

                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="post in posts" :key="post.id" class="bg-white border-b ">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
            {{post.title}}
                </th>
                <!-- <td class="py-4 px-6">
                    Sliver
                </td> -->
                <td class="py-4 px-6">
                  {{post.category.title}}
                </td>
                <td class="py-4 px-6">
                   {{post.author.name}}
                </td>
                <td class="py-4 px-6 flex gap-4 ">
                    <Link :href="route('post.edit',post.slug)" class="font-medium text-blue-600 ">   <i class="fa fa-edit text-emerald-500"></i></Link>
                    <Link @click="Delete(post.slug)"   class="font-medium text-blue-600 "> <i class="fa fa-trash" style="color: red"></i></Link>
                    <Link :href="route('posts.under.one.category',post.category.slug)"   class="font-medium text-blue-600 "> <i class="fa fa-plus-circle" style="color: #3d25b1"></i></Link>
                </td>
            </tr>

        </tbody>
    </table>
</div>

</template>
