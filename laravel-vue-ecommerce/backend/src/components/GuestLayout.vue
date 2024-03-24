<template>
    <div class="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-20 w-auto rounded-full size-max" src="../assets/la-dushe-logo.jpg"
                alt="Your Company" />
            <h2 class="mt-4 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                {{ title }}
            </h2>
        </div>

        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
                <slot></slot>
        </div>
    </div>
</template>

<script setup>
const { title } = defineProps({
    title: String
});

// import { LockClosedIcon } from "@heroicons/vue/solid";
</script>

<style scoped></style>
