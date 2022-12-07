<script setup>
import layeoutVue from "@/Layouts/layeout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import PrimaryButton from '@/Components/PrimaryButton.vue';
import moment from 'moment'
import addminlayout from "../layeout/addminlayout.vue";
import Table from "./components/Table.vue";
// import route from "vendor/tightenco/ziggy/src/js";
defineProps({
    users: Array,
});
</script>

<template>
    <addminlayout>
        <section v-if="$page.props.flash.message" class="flex justify-center">
    <div

class="text-white px-6 py-4 border-0 rounded relative mb-2 bg-emerald-500 flex  "
>
<span class="text-xl inline-block mr-5 align-middle">
    <i class="fa fa-bell"></i>
</span>
<span class="inline-block align-middle mr-8">
{{$page.props.flash.message}}
</span>
<button
    class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none"
    onclick="closeAlert(event)"
>
    <span>×</span>
</button>
</div>

</section>

      <div  class="flex justify-end px-25 py-2">
        <PrimaryButton class="ml-4" >
                  <Link :href="route('register')">  create user</Link>
                </PrimaryButton>
      </div>
        <Table :users="users" />
    </addminlayout>
</template>
<style>
.card-border-2 {
    border: 3px solid rgb(1, 114, 207);
}
</style>
