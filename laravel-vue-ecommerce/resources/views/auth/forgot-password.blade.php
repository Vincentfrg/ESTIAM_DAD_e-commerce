<x-app-layout>
    <form action="{{ route('password.email') }}" method="post" class="w-[400px] mx-auto p-6 my-16">
        @csrf
        <h2 class="text-2xl font-semibold text-center mb-5">
            Mot de passe oublié ? 🥺
        </h2>
        <p class="text-center text-gray-500 mb-6">
        Vous voulez vous connecter ?
            <a href="{{route('login')}}" class="text-purple-600 hover:text-purple-500">Connexion</a>.
        </p>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="mb-3">
            <x-input id="loginEmail" type="email" name="email" :value="old('email')" placeholder="Adresse e-mail*" required autofocus />
        </div>
        <div class="mb-4 text-gray-600 dark:text-gray-400 text-xs text-center">
            {{ __('Saisissez votre adresse e-mail et nous vous enverrons des instructions pour réinitialiser votre mot de passe.') }}
        </div>
        <button class="btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700 w-full">
            Continuer
        </button>
    </form>
</x-app-layout>
