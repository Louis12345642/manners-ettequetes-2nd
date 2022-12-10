<script setup>
import { useForm } from '@inertiajs/inertia-vue3';
import { toRefs } from '@vue/reactivity';
import Addminlayout from '../layeout/addminlayout.vue';
import InputError from '@/Components/InputError.vue';
import { Link } from "@inertiajs/inertia-vue3";


const props = defineProps({
user:Array
})
let {user} = toRefs(props)
const form = useForm({
    name:user.value.name,
    email:user.value.email,

})

const submit = ()=>{
form.put(route('user.update',user.value.username),form)
}
</script>

<template>

 <Addminlayout>
    <main class="flex justify-center">
    <div
                    class="p-5 my-4 card-bg card-border rounded-lg shadow-md h-70 block mx-auto"
                >

                    <h1
                        class="text-lg font-sans font-bold mt-3 text-center uppercase mb-3"
                    >
             Edit user
                    </h1>
                    <form @submit.prevent="submit" class="p-5 py-3">
                        <label class="block my-3 font-mono font-bold" for=""
                            >Name</label
                        >
                        <InputError v-if="$page.props.errors.name" class="mt-2" :message="$page.props.errors.name" />
                        <input
                            v-model="form.name"
                            name="name"
                            class="block my-3 input-width-c card-border rounded-md bg-slate-100 h-8"
                            type="text"
                            placeholder="enter name .."
                        />
                        <label class="block my-3 font-mono font-bold" for=""
                            >Email</label
                        >
                        <InputError v-if="$page.props.errors.email" class="mt-2" :message="$page.props.errors.email" />
                        <input
                            v-model="form.email"
                            name="email"
                            class="block my-3 input-width-c card-border rounded-md bg-slate-100 h-8"
                            type="email"
                            placeholder="Enter email.."
                        />

                        <button
                            type="submit"
                            class="mt-4 px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-500 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2 w-36"
                        >
                           update user
                        </button>
                        <Link
                            :href="route('users')"
                            type="submit"
                            class="mt-4 px-12 py-1 mx-4 text-sm text-purple-600 font-semibold rounded-full border border-purple-500 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2 w-36"
                        >
                       cancel
                    </Link>

                    </form>
                </div>
   </main>
 </Addminlayout>
</template>
