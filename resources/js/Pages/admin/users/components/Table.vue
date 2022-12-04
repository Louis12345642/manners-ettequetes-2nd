<script setup>
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
    users:Array
})

const Delete = (name)=>{
    if(confirm(`are you sure want to delete this user ${name}`)){

        Inertia.delete(route('user.delete',name))

    }

}
</script>


<template>

<div class="overflow-x-auto relative shadow-md sm:rounded-lg card-border">
    <table class="w-full text-sm text-left text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100 ">
            <tr>
                <th scope="col" class="py-3 px-6">
               username
                </th>
                <!-- <th scope="col" class="py-3 px-6">
                    Color
                </th> -->
                <th scope="col" class="py-3 px-6">
                 email
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
            <tr v-for="user in users" :key=user.id class="bg-white border-b ">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
            {{user.name}}
                </th>
                <!-- <td class="py-4 px-6">
                    Sliver
                </td> -->
                <td class="py-4 px-6">
                  {{user.email}}
                </td>
                <td class="py-4 px-6">
                   {{user.created_at}}
                </td>
                <td class="py-4 px-6 flex gap-4 ">
                    <Link :href="route('user.edit',user.name)" class="font-medium text-blue-600 ">   <i class="fa fa-edit text-emerald-500"></i></Link>
                    <Link @click="Delete(user.name)" class="font-medium text-blue-600 "> <i class="fa fa-trash" style="color: red"></i></Link>
                    <Link :href="route('authors.post',user.name)" class="font-medium text-blue-600 "> <i class="fa fa-plus-circle" style="color: #3d25b1"></i></Link>
                </td>
            </tr>

        </tbody>
    </table>
</div>

</template>
