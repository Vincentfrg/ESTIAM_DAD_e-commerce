<x-app-layout>
    <div class="w-[400px] mx-auto py-32">

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Merci de vous être inscrit ! Avant de commencer, pourriez-vous vérifier votre adresse électronique en cliquant sur le lien que nous venons de vous envoyer ? Si vous n'avez pas reçu l'e-mail, nous vous en enverrons un autre avec plaisir.") }}
        </div>

        @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __("Un nouveau lien de vérification a été envoyé à l'adresse électronique que vous avez fournie lors de votre inscription.") }}
        </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-primary-button>
                        {{ __("Renvoyer l'e-mail de vérification") }}
                    </x-primary-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-secondary-button type="submit">
                    {{ __('Déconnexion') }}
                </x-secondary-button>
            </form>
        </div>
    </div>
</x-app-layout>
