@props(['errors'])

<!-- Affiche les erreurs de validation -->
@if ($errors->any())
<div {{ $attributes -> merge(['class' => 'bg-red-600 rounded py-3 px-4 text-white'])}}>
    <div class="font-medium">
        {{ __('Whoop ! Quelque chose n\'a pas fonctionné.')}}
    </div>

    <ul class="mt-3 list-disc list-inside text-sm">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
