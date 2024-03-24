<template>
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div>
                Partie pour le Layout
            </div>
            <router-view></router-view>
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
