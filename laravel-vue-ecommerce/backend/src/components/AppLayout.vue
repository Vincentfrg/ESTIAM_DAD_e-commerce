<template>
    <div class="min-h-full flex bg-gray-200">
        <Sidebar :class="{'-ml-[200px]': !sidebarOpened}" />
        <div class="flex-1">
            <Navbar @toggle-sidebar="toggleSidebar"></Navbar>
            <!-- Content -->
            <main class="p-6">
                    <router-view></router-view>
            </main>
            <!-- /Content -->
        </div>
    </div>
</template>

<script setup>
import {ref, onMounted, onUnmounted} from 'vue';
import Sidebar from "./Sidebar.vue";
import Navbar from "./Navbar.vue";

const { title } = defineProps({
    title: String,
});

const sidebarOpened = ref(true);

function toggleSidebar(){
    sidebarOpened.value = !sidebarOpened.value;
}

onMounted(() => {
    handleSlidebarOpened();
    window.addEventListener('resize', handleSlidebarOpened);
});

onUnmounted(() => {
    window.removeEventListener('resize', handleSlidebarOpened);
});

function handleSlidebarOpened() {
    sidebarOpened.value = window.outerWidth > 768;
}
</script>

<style scoped></style>
