<script setup>
import layeoutVue from "@/Layouts/layeout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import { useForm } from '@inertiajs/inertia-vue3'

import addminlayout from "../layeout/addminlayout.vue";

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
        <form class="w-full max-w-lg" @submit.prevent="submit">
            <!-- title -->
            <input type="text" v-model="form.title" />
            <div v-if="form.errors.title">{{ form.errors.title }}</div>
            <!-- slug -->
            <input type="slug" v-model="form.slug" />
            <div v-if="form.errors.slug">{{ form.errors.slug }}</div>
            <!-- submit -->
            <button type="submit" :disabled="form.processing">Create</button>
        </form>
    </addminlayout>
</template>
<style>
.card-border-2 {
    border: 3px solid rgb(1, 114, 207);
}
</style>
