<script setup>
import layeoutVue from "@/Layouts/layeout.vue";
import { Link } from "@inertiajs/inertia-vue3";
import PrimaryButton from '@/Components/PrimaryButton.vue';

import addminlayout from "../layeout/addminlayout.vue";
import Table from "./components/Table.vue";
// import route from "vendor/tightenco/ziggy/src/js";
defineProps({
    users: Array,
});
</script>

<template>
    <addminlayout>

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
