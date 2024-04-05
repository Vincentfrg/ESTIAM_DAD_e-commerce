<template>
    <div class="flex items-center justify-between mb-3">
        <h1 class="text-3xl font-semibold">Produits</h1>
        <button
            type="submit"
            @click="showProduitModel"
            class="flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Ajouter un nouveau Produit
        </button>
    </div>
    <ProduitModel v-model="showModal"/>
    <ProduitsTableau/>
</template>

<script setup>
import { ref } from 'vue';
import ProduitModel from './ProduitModel.vue';
import ProduitsTableau from './ProduitsTableau.vue';

const showModal = ref(false);

function showProduitModel() {
    showModal.value = true;
}
</script>


<style scoped></style>
