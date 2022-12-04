<script setup>
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-vue3";
import { toRefs } from "@vue/reactivity";
import moment from 'moment'
let props=defineProps({
    categories:Array
})
// let {categories} = toRefs(props)
const Delete = (slug,title)=>{
 if(confirm(`Are sure you want to delete ${title}`)){
    Inertia.delete(route('category.delete',slug))
 }
}
</script>


<template>

<div class="overflow-x-auto relative shadow-md sm:rounded-lg card-border">
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 ">
            <tr>
                <th scope="col" class="py-3 px-6">
                   title
                </th>
                <!-- <th scope="col" class="py-3 px-6">
                    Color
                </th> -->
                <th scope="col" class="py-3 px-6">
              slug
                </th>
                <th scope="col" class="py-3 px-6">
                TIme
                </th>
                <th scope="col" class="py-3 px-6">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="category in categories" :key=category.id class="bg-white border-b ">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
            {{category.title}}
                </th>
                <!-- <td class="py-4 px-6">
                    Sliver
                </td> -->
                <td class="py-4 px-6">
                  {{category.slug}}
                </td>
                <td class="py-4 px-6">
              {{      moment(category.created_at).format('MMMM Do YYYY, h:mm:ss a')}}

                </td>
                <td class="py-4 px-6 flex gap-4 ">
                    <Link :href="route('category.edit',category.slug)" class="font-medium text-blue-600 ">   <i class="fa fa-edit text-emerald-500"></i></Link>
                    <Link @click="Delete(category.slug,category.title)"   class="font-medium text-blue-600 "> <i class="fa fa-trash" style="color: red"></i></Link>
                    <a href="#" class="font-medium text-blue-600 "> <i class="fa fa-plus-circle" style="color: #3d25b1"></i></a>
                </td>
            </tr>

        </tbody>
    </table>
</div>

</template>
<style scoped>

</style>
