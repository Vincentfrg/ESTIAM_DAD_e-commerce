<template>
    <GuestLayout title="Connexion à votre compte 👏">
        <form class="space-y-6" action="#" method="POST">
            <input type="hidden" name="remember" value="true" />
            <div>
                <label for="email-address" class="block text-sm font-medium leading-6 text-gray-900">Adresse
                    E-mail</label>
                <div class="mt-2">
                    <input id="email-address" name="email" type="email" autocomplete="email" required=""
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Mot de passe</label>
                    <div class="text-sm">
                        <router-link :to="{ name: 'requestPassword' }"
                            class="font-semibold text-indigo-600 hover:text-indigo-500">Mot de passe oublié
                            ?</router-link>
                    </div>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required=""
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
            </div>

            <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox"
                    class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" />
                <label for="remember-me" class="ml-2 block text-sm text-gray-900">Se rappeler de moi</label>
            </div>

            <div>
                <button type="submit"
                    class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <LockClosedIcon class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400"
                            aria-hidden="true" />
                    </span>
                    Se connecter
                </button>
            </div>
        </form>
        <p class="mt-4 text-center text-sm text-gray-500">
            Vous n'avez pas de compte ?
            <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Inscription</a>
        </p>
    </GuestLayout>
</template>

<script setup>
import { LockClosedIcon } from "@heroicons/vue/solid";
import GuestLayout from "../components/GuestLayout.vue";
</script>
