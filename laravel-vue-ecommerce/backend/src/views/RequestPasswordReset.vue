<template>
    <GuestLayout title="Mot de passe oublié ? 🥺">
        <p class="mb-6 text-center text-xs text-gray-500">
            Saisissez votre adresse e-mail et nous vous enverrons des
            instructions pour réinitialiser votre mot de passe.
        </p>
        <form class="space-y-6" action="#" method="POST">
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Adresse E-mail</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required=""
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
            </div>

            <div>
                <button type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Continuer
                </button>
            </div>
        </form>
        <p class="mt-4 text-center text-sm text-gray-500">
            Retour à la page de
            <router-link :to="{ name: 'login' }"
                class="font-semibold text-indigo-600 hover:text-indigo-500">Connexion</router-link>
        </p>
    </GuestLayout>
</template>

<script setup>
// import { LockClosedIcon } from "@heroicons/vue/solid";
import GuestLayout from '../components/GuestLayout.vue';
</script>
