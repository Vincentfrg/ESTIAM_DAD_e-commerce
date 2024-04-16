<x-app-layout>
    <!-- Formulaire de connexion -->
    <form action="{{ route('login') }}" method="post" class="w-[400px] mx-auto p-6 my-16">
        @csrf
        <h2 class="text-2xl font-semibold text-center mb-5">
            Connexion à votre compte 👏
        </h2>
        <p class="text-center text-gray-500 mb-6">
            ou
            <a href="{{route('register')}}" class="text-sm text-purple-700 hover:text-purple-600">créer un nouveau compte</a>
        </p>

        <x-auth-validation-errors class="mb-4" :errors="$errors"/>

        <div class="mb-4">
            <x-input id="loginEmail" type="email" name="email" :value="old('email')" :errors="$errors" placeholder="Votre adresse mail" />
        </div>
        <div class="mb-4">
            <x-input id="loginPassword" type="password" name="password" placeholder="Votre mot de passe" required autocomplete="current-password"/>
        </div>

        <div class="flex justify-between items-center mb-5">
            <div class="flex items-center">
                <input id="loginRememberMe" type="checkbox" name="remember" class="mr-3 rounded border-gray-300 text-purple-500 focus:ring-purple-500" />
                <label for="loginRememberMe">Se rappeler de moi</label>
            </div>
            <a href="{{route('password.request')}}" class="text-sm text-purple-700 hover:text-purple-600">Mot de passe oublié ?</a>
        </div>
        <button class="btn-primary bg-emerald-500 hover:bg-emerald-600 active:bg-emerald-700 w-full">
            Se connecter
        </button>
    </form>

</x-app-layout>
