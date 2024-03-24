<template>
    <div class="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-20 w-auto rounded-full size-max" src="../assets/la-dushe-logo.jpg" alt="Your Company" />
            <h2 class="mt-4 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                Mot de passe oublié ? 🥺
            </h2>
            <p class="mt-2 text-center text-xs text-gray-500">
                Saisissez votre adresse e-mail et nous vous enverrons des
                instructions pour réinitialiser votre mot de passe.
            </p>
        </div>

        <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">
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

            <div class="text-sm">
                <div class="mt-4">
                    <p class="text-center">
                        Retour à la page de
                        <router-link :to="{ name: 'login' }"
                            class="font-semibold text-indigo-600 hover:text-indigo-500">Connexion</router-link>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { LockClosedIcon } from "@heroicons/vue/solid";
</script>
