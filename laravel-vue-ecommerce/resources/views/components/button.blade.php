@props(['button'])
<button {{ $attributes->merge(['class' => 'bg-purple-600 text-white px-4 py-2 rounded']) }}>
    {{ $slot }}
</button>
