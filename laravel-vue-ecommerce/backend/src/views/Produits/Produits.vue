<template>
    <div class="flex items-center justify-between mb-3">
        <h1 class="text-3xl font-semibold">Produits</h1>
        <button type="submit"
            class="flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Ajouter un nouveau Produit
        </button>
    </div>
    <ProduitsTableau/>
</template>

<script setup>
import ProduitsTableau from './ProduitsTableau.vue';
</script>


<style scoped></style>
