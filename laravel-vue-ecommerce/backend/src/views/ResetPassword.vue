<template>
    <GuestLayout title="Créer un nouveau mot de passe 🔒">
        <form class="space-y-6" action="#" method="POST">
            <div>
                <label for="new-password" class="block text-sm font-medium leading-6 text-gray-900">Nouveau -
                    Mot de passe</label>
                <div class="mt-2">
                    <input id="new-password" name="new-password" type="password" required=""
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password-repeat" class="block text-sm font-medium leading-6 text-gray-900">Confirmer
                        - Mot de passe</label>
                </div>
                <div class="mt-2">
                    <input id="password-repeat" name="password_repeat" type="password" required=""
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
            </div>

            <div>
                <button type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <LockClosedIcon class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                            aria-hidden="true" />
                    </span>
                    Continuer
                </button>
            </div>
        </form>
        <p class="mt-4 text-center text-sm text-gray-500">
            Vous aviez retrouvé votre mot de passe ?
            <router-link :to="{ name: 'login' }"
                class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Connexion</router-link>
        </p>
    </GuestLayout>
</template>

<script setup>
import { LockClosedIcon } from "@heroicons/vue/solid";
import GuestLayout from "../components/GuestLayout.vue";
</script>
