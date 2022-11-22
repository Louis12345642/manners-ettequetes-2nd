<script setup>
 defineProps({
    contactData:Array
 });

</script>

<template>
    <div class=" p-5 m-5  card-bg card-border rounded-lg shadow-md h-44 w-72 hover:bg-gray-200">
    <h1 class="text-sm font-sans font-bold mt-3 text-center uppercase mb-3"> Contact</h1>
    <img class="mx-auto mb-2"
          src="mailbox-icon.svg"
          alt="mailbox letter"
        />

        <h1 class="text-sm font-sans font-medium mt-3 text-center text-gray-500">{{contactData[0].contact}}  </h1>
</div>

<div class=" p-5 m-5  card-bg card-border rounded-lg shadow-md h-44 w-72 hover:bg-gray-200">
    <h1 class="text-sm font-sans font-bold mt-3 text-center uppercase mb-3">Email</h1>
    <img class="mx-auto mb-2"
          src="mailbox-icon.svg"
          alt="mailbox letter"
        />

        <h1 class="text-sm font-sans font-medium mt-3 text-center text-gray-500">{{contactData[0].email}}  </h1>
</div>
</template>
