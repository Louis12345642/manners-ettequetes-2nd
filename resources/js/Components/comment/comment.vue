<script setup>
import moment from "moment";
import PrimaryButton from "@/Components/PrimaryButton.vue";
defineProps({
    comment: Array,
    name: String,
});
</script>
<template>
    <article
        class="flex bg-gray-100 border mt-4 mb-4 border-gray-200 p-6 rounded-xl space-x-4"
    >
        <div class="flex-shrink-0">
            <img
                :src="comment.comment_author.avater"
                alt=""
                width="60"
                height="60"
                class="rounded-full"
            />
        </div>

        <div>
            <header class="mb-4">
                <h3 class="font-bold">{{ comment.comment_author.name }}</h3>

                <p class="text-xs">
                    Posted
                    <time>{{
                        moment(comment.created_at).startOf("hour").fromNow()
                    }}</time>
                </p>
            </header>

            <p>
                {{ comment.body }}
            </p>
        </div>
    </article>
</template>
