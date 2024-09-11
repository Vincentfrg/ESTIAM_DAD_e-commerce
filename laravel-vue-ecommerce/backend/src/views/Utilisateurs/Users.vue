<template>
    <div class="flex items-center justify-between mb-3">
        <h1 class="text-3xl font-semibold">Produits</h1>
        <button type="submit" @click="showProduitModel"
            class="flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Ajouter un nouveau Produit
        </button>
    </div>
    <UserModel v-model="showModal" :user="userModel" @close="onModalClose" />
    <UserTable @clickEdit="editUser" />
</template>

<script setup>
import { ref } from 'vue';
import UserModel from './UserModel.vue';
import UserTable from './UserTable.vue';
import store from '../../store/index.js';

const DEFAULT_USER = {
    id: '',
    name: '',
    email: '',
    description: '',
    price: '',
}

const showModal = ref(false);
const userModel = ref({ ...DEFAULT_USER });

function showProduitModel() {
    showModal.value = true;
}

function editUser(user) {
    store.dispatch('getUser', user.id)
        .then(({ data }) => {
            userModel.value = data
            showProduitModel()
        })
}

function onModalClose() {
    userModel.value = { ...DEFAULT_USER }
}

</script>


<style scoped></style>
