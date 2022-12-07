<script setup>
import layeoutVue from "@/Layouts/layeout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { useForm } from '@inertiajs/inertia-vue3'
import Checkbox from '@/Components/build-in-components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/build-in-components/TextInput.vue';

import addminlayout from "../layeout/addminlayout.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";

const form = useForm({
      title: null,
      slug: null,
    })
const submit = () =>{
    form.post( route('categories.store'))
}
</script>

<template>
    <addminlayout>
        <!-- component -->



        <div
                    class="p-5 my-4 card-bg card-border rounded-lg shadow-md h-70  block"
                >

                    <h1
                        class="text-lg font-sans font-bold mt-3 text-center uppercase mb-3"
                    >
                     create category
                    </h1>
                    <form @submit.prevent="submit" class="p-5 py-3 ">
                        <label class="block my-3 font-mono font-bold" for=""
                            >Category Title</label
                        >
                        <input
                            v-model="form.title"

                            name="title"
                            class="block my-3 card-border rounded-md bg-slate-100  w-full h-10"
                            type="text"
                            placeholder="Enter category title .."
                        />

                        <!-- <label class="font-sans font-bold" for=""
                            >Slug</label -->

                        <!-- <textarea
                            v-model="form.slug"

                            name="slug"
                            class="block my-3 w-full bg-gray-100 card-border rounded-md active:border-purple-500"
                            placeholder="slug here .."
                        ></textarea> -->
                        <button

                            type="submit"
                            :disabled="form.processing"
                            class="mt-4 px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-500 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2 w-36"
                        >
                            summit
                        </button>
                    </form>
                </div>



    </addminlayout>
</template>
<style>
.card-border-2 {
    border: 3px solid rgb(1, 114, 207);
}
</style>
