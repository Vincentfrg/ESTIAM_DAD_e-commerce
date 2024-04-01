<template>
    <div v-if="currentUser.id" class="min-h-full flex bg-gray-200">
        <Sidebar :class="{ '-ml-[200px]': !sidebarOpened }" />
        <div class="flex-1">
            <Navbar @toggle-sidebar="toggleSidebar"></Navbar>
            <!-- Content -->
            <main class="p-6">
                <router-view></router-view>
            </main>
            <!-- /Content -->
        </div>
    </div>
    <div v-else class="min-h-full bg-gray-200 flex items-center justify-center">
        <Spinner/>
    </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted, computed } from 'vue';
import Sidebar from "./Sidebar.vue";
import Navbar from "./Navbar.vue";
import Spinner from "./core/Spinner.vue";
import store from '../store';

const { title } = defineProps({
    title: String,
});

const sidebarOpened = ref(true);

const currentUser = computed(() => store.state.user.data);

function toggleSidebar() {
    sidebarOpened.value = !sidebarOpened.value;
}

onMounted(() => {
    store.dispatch('getUser')
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
