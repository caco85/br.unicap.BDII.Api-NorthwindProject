@extends("layouts.app-store")
@section('content')
<div class="md:col-span-1">
    <div class="px-4 sm:px-0">
      <h3 class="text-lg font-medium leading-6 text-gray-900">Editar Cliente </h3>
      <p class="mt-1 text-sm text-gray-600">Edite o clientes aqui.</p>
    </div>
</div>
@include('customer/forms')
@endsection
