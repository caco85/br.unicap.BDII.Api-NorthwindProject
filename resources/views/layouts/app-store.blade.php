<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  {{-- <link rel="stylesheet" href="/css/app.css"> --}}
  @vite('resources/css/app.css')
</head>
<body>
    <nav class="bg-emerald-400">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
            <!-- Mobile menu button-->
            <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                <span class="sr-only">Open main menu</span>

                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
            <div class="flex flex-shrink-0 items-center">
                <img class="block h-8 w-auto lg:hidden" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500">
                <img class="hidden h-8 w-auto lg:block" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500">
            </div>
            <div class="hidden sm:ml-6 sm:block">
                <div class="flex space-x-4">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="{{url('/')}}" class="hover:bg-emerald-700 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

                <a href="{{url('/about')}}" class="text-gray-300 hover:bg-emerald-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Sobre</a>

                <a href="{{url('customer/customers')}}" class="text-gray-300 hover:bg-emerald-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Clientes</a>

                <a href="{{url('order/orders')}}" class="text-gray-300 hover:bg-emerald-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Compras</a>
                </div>
            </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <a
                href="{{url('cart')}}"
                class="flex items-center py-2 px-3 transition-colors text-white hover:bg-emerald-700 hover:text-white"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 mr-2 -mt-1"
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
                Carrinho
              </a>
            <button type="button" class="rounded-full bg-emerald-700 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="sr-only">View notifications</span>
                <!-- Heroicon name: outline/bell -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                </svg>
            </button>

            <!-- Profile dropdown -->
            <div class="relative ml-3">
                <div>
                <button type="button" class="flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
                </div>
                {{-- class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" --}}
                <div class="sm:hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                <!-- Active: "bg-gray-100", Not Active: "" -->
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Perfil</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Seu carrinho</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sair</a>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{url('/')}}" class="hover:bg-emerald-700 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

            <a href="{{url('/about')}}" class="text-gray-300 hover:bg-emerald-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Sobre</a>

            <a href="{{url('customer/customers')}}" class="text-gray-300 hover:bg-emerald-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Clientes</a>

            <a href="{{url('order/orders')}}" class="text-gray-300 hover:bg-emerald-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Compras</a>
        </div>
        </div>
    </nav>


        <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8 ">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-bold text-gray-900">
                    {{@$title}}
                </h1>
                @if (@$nameButton)
                    <a type="button"  class="py-2 px-3 text-white bg-emerald-500 rounded-md hover:bg-emerald-600" href="{{url('customer/create')}}">
                        <!-- Heroicon name: outline/x-mark -->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 -mt-1 inline-block"
                            fill="nome"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-widtg="2"
                            d="M12 4v16m8-8H4"
                            />
                        </svg>
                        {{$nameButton}}
                    </a>
                @endif
            </div>

        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Replace with your content -->
        <div class="px-4 py-6 sm:px-0">
                @yield('content')
        </div>
        <!-- /End replace -->
        </div>
    </main>

</body>
<footer>
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 bg-emerald-400">
    <div class="relative flex h-16 items-center justify-between">

    </div>
  </div>
</footer>

</html>
