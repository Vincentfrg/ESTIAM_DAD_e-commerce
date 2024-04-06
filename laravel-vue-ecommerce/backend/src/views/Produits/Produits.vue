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
    <ProduitModel v-model="showModal" :product="productModel" @close="onModalClose"/>
    <ProduitsTableau @clickEdit="editProduct"/>
</template>

<script setup>
import { ref } from 'vue';
import ProduitModel from './ProduitModel.vue';
import ProduitsTableau from './ProduitsTableau.vue';
import store from '../../store/index.js';

const DEFAULT_EMPTY_OBJECT = {
    id: '',
    title: '',
    image: '',
    description: '',
    price: '',
}

const showModal = ref(false);
const productModel = ref({...DEFAULT_EMPTY_OBJECT});

function showProduitModel() {
    showModal.value = true;
}

function editProduct(product) {
    store.dispatch('getProduct', product.id)
        .then(({data}) => {
            productModel.value = data
            showProduitModel()
        })
}

function onModalClose() {
    productModel.value = {...DEFAULT_EMPTY_OBJECT}
}

</script>


<style scoped></style>
