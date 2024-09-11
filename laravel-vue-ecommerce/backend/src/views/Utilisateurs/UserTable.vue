<template>
    <div class="bg-white p-4 rounded-lg shadow animate-fade-in-down">
        <div class="flex justify-between border-b-2 pb-3">
            <div class="flex items-center">
                <span class="whitespace-nowrap mr-3">Produits/Page :</span>
                <select @change="getUsers(null)" v-model="perPage"
                    class="appearance-none relative block w-24 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div>
                <input v-model="search" @change="getUsers(null)"
                    class="appearance-none relative block w-48 px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                    placeholder="Rechercher un produit...">
            </div>
        </div>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <TableauHeaderCell @click="sortUser('id')" class="border-b-2 p-2 text-left" field="id"
                        :sort-field="sortField" :sort-direction="sortDirection">ID</TableauHeaderCell>
                    <TableauHeaderCell @click="sortUser('name')" class="border-b-2 p-2 text-left" field="name"
                        :sort-field="sortField" :sort-direction="sortDirection">Nom</TableauHeaderCell>
                    <TableauHeaderCell @click="sortUser('email')" class="border-b-2 p-2 text-left" field="email"
                        :sort-field="sortField" :sort-direction="sortDirection">Email</TableauHeaderCell>
                    <TableauHeaderCell @click="sortUser('created_at')" class="border-b-2 p-2 text-left"
                        field="created_at" :sort-field="sortField" :sort-direction="sortDirection">Date Inscription
                    </TableauHeaderCell>
                    <TableauHeaderCell field="actions">
                        Actions
                    </TableauHeaderCell>
                </tr>
            </thead>
            <tbody v-if="users.loading">
                <tr>
                    <td colspan="6">
                        <Spinner v-if="users.loading" class="my-4" />
                    </td>
                </tr>
            </tbody>
            <tbody v-else>
                <!-- <tr v-for="(user, index) of users.data" class="animate-fade-in-down" :style="{'animation-delay': `${index * 0.075}s`}"> -->
                <tr v-for="user of users.data">
                    <td class="border-b p-2">{{ user.id }}</td>
                    <td class="border-b p-2">
                        {{ user.name }}
                    </td>
                    <td class="border-b p-2 max-w-[200px] whitespace-nowrap overflow-hidden text-ellipsis">{{
                        user.email }}</td>
                    <td class="border-b p-2">
                        {{ user.created_at }}
                    </td>
                    <td class="border-b p-2">
                        <Menu as="div" class="relative inline-block text-left">
                            <div>
                                <MenuButton
                                    class="inline-flex items-center justify-center w-full justify-center rounded-full w-10 h-10 bg-black bg-opacity-0 text-sm font-medium text-white hover:bg-opacity-5 focus:bg-opacity-5 focus:outline-none focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75">
                                    <DotsVerticalIcon class="h-5 w-5 text-indigo-500" aria-hidden="true" />
                                </MenuButton>
                            </div>
                            <transition enter-active-class="transition duration-100 ease-out"
                                enter-from-class="transform scale-95 opacity-0"
                                enter-to-class="transform scale-100 opacity-100"
                                leave-active-class="transition duration-75 ease-in"
                                leave-from-class="transform scale-100 opacity-100"
                                leave-to-class="transform scale-95 opacity-0">
                                <MenuItems
                                    class="absolute z-10 right-0 mt-2 w-32 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                                    <div class="px-1 py-1">
                                        <MenuItem v-slot="{ active }">
                                        <button :class="[
                                            active ? 'bg-indigo-600 text-white' : 'text-gray-900', 'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                                        ]" @click="editUser(user)">
                                            <PencilIcon :active="active" class="mr-2 h-5 w-5 text-indigo-400"
                                                aria-hidden="true" />
                                            Modifier
                                        </button>
                                        </MenuItem>
                                        <MenuItem v-slot="{ active }">
                                        <button :class="[
                                            active ? 'bg-indigo-600 text-white' : 'text-gray-900', 'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                                        ]" @click="deleteUser(user)">
                                            <TrashIcon :active="active" class="mr-2 h-5 w-5 text-indigo-400"
                                                aria-hidden="true" />
                                            Supprimer
                                        </button>
                                        </MenuItem>
                                    </div>
                                </MenuItems>
                            </transition>
                        </Menu>
                    </td>
                </tr>
            </tbody>
        </table>
        <div v-if="!users.loading" class="flex justify-between items-center mt-5">
            <span>
                Afficher de {{ users.from }} à {{ users.to }}
            </span>
            <nav v-if="users.total > users.limit"
                class="relative z-0 inline-flex justify-center rounded-md shadow-sm -space-x-px"
                aria-label="Pagination">
                <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                <a v-for="(link, i) of users.links" :key="i" :disabled="!link.url" href="#"
                    @click.prevent="getForPage($event, link)" aria-current="page"
                    class="relative inline-flex items-center px-4 py-2 border text-sm font-medium whitespace-nowrap"
                    :class="[
                        link.active
                            ? 'z-10 bg-indigo-50 border-indigo-500 text-indigo-600'
                            : 'bg-white border-gray-300 text-gray-500 hover:bg-gray-50',
                        i === 0 ? 'rounded-l-md' : '',
                        i === users.links.length - 1 ? 'rounded-r-md' : '',
                        !link.url ? 'bg-gray-100 text-gray-700' : ''
                    ]" v-html="link.label">
                </a>
            </nav>
        </div>
    </div>
</template>

<script setup>
import { ref, computed, onMounted } from "vue";
import store from "../../store/index.js";
import Spinner from '../../components/core/Spinner.vue';
import { USERS_PER_PAGE } from '../../constants.js';
import TableauHeaderCell from '../../components/core/Tableau/TableauHeaderCell.vue';

import { Menu, MenuButton, MenuItem, MenuItems } from "@headlessui/vue";
import { DotsVerticalIcon, PencilIcon, TrashIcon } from '@heroicons/vue/outline';


const perPage = ref(USERS_PER_PAGE);
const search = ref('');
const users = computed(() => store.state.users);
const sortField = ref('updated_at');
const sortDirection = ref('desc');
const emit = defineEmits(['click'])

onMounted(() => {
    getUsers();
});

function getUsers(url = null) {
    store.dispatch('getUsers', {
        url,
        sort_field: sortField.value,
        sort_direction: sortDirection.value,
        search: search.value,
        perPage: perPage.value,
    });
}

function getForPage(ev, link) {
    if (!link.url || link.active) {
        return;
    }
    getUsers(link.url)
}

function sortUser(field) {
    if (sortField.value === field) {
        if (sortDirection.value === 'asc') {
            sortDirection.value = 'desc'
        } else {
            sortDirection.value = 'asc'
        }
    } else {
        sortField.value = field;
        sortDirection.value = 'asc'
    }
    getUsers();
}

function editUser(user) {
    emit('clickEdit', user)
}

function deleteUser(user) {
    if (!confirm('Êtes-vous sur de vouloir supprimer le produit ?')) {
        return;
    }

    store.dispatch('deleteUser', user.id)
        .then(res => {
            // TODO Show notification
            store.dispatch('getUsers');
        })
}

</script>

<style scoped></style>
