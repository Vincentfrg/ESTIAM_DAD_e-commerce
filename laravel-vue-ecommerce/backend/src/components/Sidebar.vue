<template>
    <!-- SideBar -->
    <div class="w-[200px] bg-indigo-700 text-white py-4 px-2">
        <router-link
            :to="{ name: 'app.dashboard' }"
            class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
            <span class="mr-2 text-gray-400"><HomeIcon class="w-5" /></span>
            <span class="text-xs">Dashboard</span>
        </router-link>
        <router-link
            :to="{ name: 'app.dashboard' }"
            class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
            <span class="mr-2 text-gray-400"><ViewListIcon class="w-5" /></span>
            <span class="text-xs">Produits</span>
        </router-link>
        <router-link
            :to="{ name: 'app.dashboard' }"
            class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
            <span class="mr-2 text-gray-400"><UserIcon class="w-5" /></span>
            <span class="text-xs">Utilisateurs</span>
        </router-link>
        <router-link
            :to="{ name: 'app.dashboard' }"
            class="flex items-center p-2 rounded transition-colors hover:bg-black/30">
            <span class="mr-2 text-gray-400"><ChartBarIcon class="w-5" /></span>
            <span class="text-xs">Rapports</span>
        </router-link>
    </div>
    <!-- /SideBar -->
</template>

<script setup>
import { HomeIcon, UserIcon, ViewListIcon, ChartBarIcon } from "@heroicons/vue/outline"; // Solid ou Outline pour les icones
</script>
