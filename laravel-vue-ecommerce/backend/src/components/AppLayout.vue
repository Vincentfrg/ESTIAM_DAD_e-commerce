<template>
    <div class="min-h-full flex">
        <Sidebar />
        <div class="flex-1">
            <header class="h-8 shadow bg-white">Header</header>
            <!-- Content -->
            <main>
                <router-view></router-view>
            </main>
            <!-- /Content -->
        </div>
    </div>
</template>

<script setup>
import Sidebar from "./Sidebar.vue";
const { title } = defineProps({
    title: String,
});

// import { LockClosedIcon } from "@heroicons/vue/solid";
</script>

<style scoped></style>
