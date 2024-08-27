<x-app-layout>
    <form
        action="{{route('register')}}"
        method="post"
        class="w-[400px] mx-auto p-6 my-16">
        @csrf
        <h2 class="text-2xl font-semibold text-center mb-4">Création de votre compte 😊</h2>
        <p class="text-center text-gray-500 mb-3">
            Vous avez déjà un compte ?
            <a
                href="{{route('login')}}"
                class="text-sm text-purple-700 hover:text-purple-600">Connexion</a>
        </p>
        <div class="mb-4">
            <x-input
                placeholder="Nom*"
                type="text"
                name="name"
                :value="old('name')" />
        </div>
        </p>
        <div class="mb-4">
            <x-input
                placeholder="Adresse e-mail*"
                type="email"
                name="email"
                :value="old('email')" />
        </div>
        <div class="mb-4">
            <x-input
                placeholder="Mot de Passe*"
                type="password"
                name="password" />
        </div>
        </div>
        <div class="mb-4">
            <x-input
                placeholder="Repeter Mot de Passe*"
                type="password"
                name="password_confirmation" />
        </div>

        <button
            class="btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700 w-full">
            S'inscrire
        </button>
    </form>
</x-app-layout>
