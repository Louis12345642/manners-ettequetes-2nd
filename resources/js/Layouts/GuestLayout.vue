<script setup>
import ApplicationLogo from '@/Components/build-in-components/ApplicationLogo.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white">
        <div>
            <!-- <Link href="/">
                <ApplicationLogo class="w-20 h-20 fill-current text-gray-500" />
            </Link> -->

        </div>

        <div class="mx-10 w-full sm:max-w-md mt-6 px-6 py-4 card-bg card-border  shadow-md overflow-hidden sm:rounded-xl">
            <slot />
        </div>
    </div>
</template>
