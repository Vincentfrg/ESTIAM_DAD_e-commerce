<?php
/** @var \Illuminate\Database\Eloquent\Collection $products */
?>
<x-app-layout>
    <!-- Product List -->
    <div
        class="grid gap-4 grig-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 p-3">
        @foreach($products as $product)
        <!-- Product Item -->
        <div
            x-data="productItem({{ json_encode([
            'id' =>  $product->id,
            'image' =>  $product->image,
            'title' =>  $product->title,
            'addToCartUrl' => route('cart.add', $product)
          ]) }})"
            class="border border-1 border-gray-200 rounded-md hover:border-purple-600 transition-colors bg-white">
            <a href="{{ route('product.view', $product->slug) }}" class="block overflow-hidden aspect-w-3 aspect-h-2">
                <img
                    src="{{ $product->image }}"
                    alt="{{ $product->title }}"
                    class="rounded-lg hover:scale-105 hover:rotate-1 transition-transform object-cover" />
            </a>
            <div class="p-4">
                <h3 class="text-lg">
                    <a href="{{ route('product.view', $product->slug) }}">
                        {{ $product->title }}
                    </a>
                </h3>
                <h5 class="font-bold">{{ $product->price }}€</h5>
            </div>
            <div class="flex justify-between py-3 px-4">
                <button class="btn-primary" @click="addToCart()">
                    Ajouter au Panier
                </button>
            </div>
        </div>
        <!--/ Product Item -->
        @endforeach
    </div>
    <!-- Paginates -->
    {{$products->links()}}
</x-app-layout>
