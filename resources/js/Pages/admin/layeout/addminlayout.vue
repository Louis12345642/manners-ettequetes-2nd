<script setup>
import layeoutVue from "@/Layouts/layeout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { usePage } from "@inertiajs/inertia-vue3";
import allPostsHeaderVue from "@/Components/hero-section/all-posts-header.vue";
import { useForm } from '@inertiajs/inertia-vue3'
import SelectMenu from "@/Components/selectMenu.vue";
import { Inertia } from '@inertiajs/inertia';
import categorySelect from "../../../Components/categorySelect.vue"
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { toRefs } from "@vue/reactivity";

let  props = defineProps({
    user:Array,
    posts: Array,
    message:String,
    Errormessage:String
});

let {message}=toRefs(props);

// let username =usePage().props.value.auth.user.username

// const form =useForm({

// avater:this.$event.target.files[0],

// });

// const submit =()=>{
//     form.put(route('avater.add',username),form,{
//         forceFormData: true,
//     })
// }

// const form = useForm({
//     name:user.value.name,
//     email:user.value.email
// })

// const submit = ()=>{
// form.put(route('user.update',user.value.username),form)
// }

</script>

<template>
    <main>
        <nav
            class="card-bg p-4 card-border lg:grid grid-cols-2 lg:gap-10 justify-items-around"
        >
            <div>
                <h1>
              <Link href="/"><h1 class="text-lg font-bold font-mono md:text-xl lg:text-2xl">
                <span class="secondary-color">Manners</span> & Ettequetes
              </h1></Link>
              </h1>
            </div>

            <section class="flex justify-end gap-10 mx-10">
                <div>
                    <form>
                        <label
                            for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only"
                            >Search</label
                        >
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
                            >
                                <svg
                                    aria-hidden="true"
                                    class="w-5 h-5 text-gray-500 dark:text-gray-400"
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
                            </div>
                            <input
                                type="search"
                                id="default-search"
                                class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Search..."
                                required
                            />
                            <!-- <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button> -->
                        </div>
                    </form>
                </div>

                <div class="z-10 cursor-pointer">
                    <div class="profile"  onclick="menuToggle();">
                    <span><img class="w-10 h-10 rounded-full" :src="$page.props.auth.user.avater" alt=""></span>
                    </div>
                    <div v-if="$page.props.auth.user" class="action card-border ml-2">
           <div  class="menu ">
            <h3>
               welcome profile
                <div>
                   {{ $page.props.auth.user.email}}
                </div>


            </h3>
            <ul class="ml-8">
                <li>
                    <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="text-xs font-bold ">Dashboard</Link>
                </li>
                <li>

                    <Link v-if="$page.props.auth.user" :href="route('logout')" method="post" class=" ml-4 text-xs font-bold">logout</Link>
                </li>
            </ul>
        </div>
    </div>
                </div>
            </section>
        </nav>
        <section class="lg:grid lg:grid-cols-5">


            <div class="lg:col-span-1 card-bg h-screen card-border p-4 cars-border">
                <div class="flex justify-center p-4">
                    <img class="w-20 h-20 rounded-full card-border-2 " :src="$page.props.auth.user.avater" alt="">


                </div>
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    class="text-xs font-bold uppercase flex justify-center"
                    >{{$page.props.auth.user.name}}</Link
                >


                <div class="mt-10 p-4 pb-4">

                    <Link
                href="#"
                 class="hover:bg-gray-200 pointer bg-red-100 p-5 card-border rounded-lg mb-4 flex gap-2 shadow-sm ">
           <span><img class="w-6 h-6" src="/dashboard (1).png" alt=""></span><span   class="text-xs font-bold uppercase">

dashboard
</span>

           </Link>
           <Link
                :href="route('dashboard')"
                 class="hover:bg-gray-200 pointer bg-red-100 p-5 card-border rounded-lg mb-4 flex gap-2 shadow-sm ">
           <span><img class="w-6 h-6" src="/dashboard.png" alt=""></span><span   class="text-xs font-bold uppercase">

posts
</span>

           </Link>
                <Link
                :href="route('categories')"
                 class="hover:bg-gray-200 pointer bg-red-100 p-5 card-border rounded-lg mb-4 flex gap-2 shadow-sm ">
           <span><img class="w-6 h-6" src="/categories.png" alt=""></span><span   class="text-xs font-bold uppercase">

categories
</span>

           </Link>
                <Link
                :href="route('users')"
                 class="hover:bg-gray-200 pointer bg-red-100 p-5 card-border rounded-lg mb-4 flex gap-2 shadow-sm ">
           <span><img class="w-6 h-6" src="/man.png" alt=""></span><span   class="text-xs font-bold uppercase">

users
</span>

           </Link>
                <Link
                :href="route('messages')"
                 class="hover:bg-gray-200 pointer bg-red-100 p-5 card-border rounded-lg mb-4 flex gap-2 shadow-sm ">
           <span><img class="w-6 h-6" src="/dashboard.png" alt=""></span><span   class="text-xs font-bold uppercase">

messages
</span>

           </Link>




                </div>
            </div>
            <div class="bg-gray-200 card-border lg:col-span-4 overflow-scroll max-h-screen ">

                <section class="p-10">
             <!-- <tableVue :posts="posts"/> -->

             <slot/>
                </section>
            </div>
        </section>
    </main>
</template>
<style>
.card-border-2{
    border: 3px solid rgb(1, 114, 207);
}

</style>
