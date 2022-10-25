@extends('layouts.app-store')
@section('content')
<div class="container lg:w-2/3 xl:w-2/3 mx-auto">
    <h1 class="text-3xl font-bold mb-6">Os items do seu carrinho</h1>

    <div class="bg-white p-4 rounded-lg shadow">

      <div>

        <form action="{{ url('order') }}" method="POST" enctype="multipart/form-data" class="mt-10">

            @foreach ($cartItemLists as $cartItem)
            <div class="flex flex-col sm:flex-row items-center gap-4">
                <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="w-36" alt="" />
                <div class="flex flex-col justify-between">
                <div class="flex justify-between mb-3">
                    <h3>
                        {{ $cartItem['ProductName'] }}
                    </h3>
                    <p class="text-lg font-semibold"> ${{ $cartItem['UnitPrice'] }} </p>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                    Qty:
                    <select
                        name="Quantity"
                        id="Quantity"
                        class="ml-3 py-1 border-gray-200 focus:border-purple-600 focus:ring-purple-600"
                    >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                    </div>
                    <a href="#" class="text-purple-600 hover:text-purple-500"
                    >Remove</a
                    >
                </div>
                </div>
            </div>
            <hr class="my-5" />
            @endforeach
            <!--/ Product Item -->

        </div>
        <!--/ Product Items -->

        <div class="border-t border-gray-300 pt-4">
            <div class="flex justify-between">
            <span class="font-semibold">Subtotal</span>
            <span class="text-xl">$100</span>
            </div>
            {{-- <p class="text-gray-500 mb-6">
            Shipping and taxes calculated at checkout.
            </p> --}}
            @csrf
            <button type="submit" class="w-full py-3 text-lgborder-transparent text-sm rounded-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Finalizar compra
            </button>
        </form>
      </div>
    </div>
  </div>
@endsection
