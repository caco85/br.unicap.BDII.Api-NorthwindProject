@extends('layouts.app-store')
@section('content')
<div class="bg-white">
    <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only"></h2>

      <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        @foreach ($products as $product )

                <div class="group">
                    <a href="#" >
                        <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                            <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        {{-- <p class="mt-1 text-lg font-medium text-gray-900">{{$product->ProductID}}</p> --}}
                        <h3 class="mt-4 text-sm text-gray-700">Nome: {{$product->ProductName}}</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">Preço: ${{$product->UnitPrice}}</p>
                        <p class="mt-1 text-lg font-medium text-gray-900">Disponiveis: {{$product->UnitsInStock}}</p>


                    </a>
                    <button class="flex py-2 px-4 border border-transparent text-sm rounded-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 mr-2"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                            />
                        </svg>
                    Add ao Carrinho
                </button>
            </div>


        @endforeach

        <!-- More products... -->
      </div>
    </div>
</div>
@endsection
