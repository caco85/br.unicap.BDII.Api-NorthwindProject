@extends("layouts.app-store")
@section('content')
<div class="md:col-span-1">
    <div class="px-4 sm:px-0">
      <h3 class="text-lg font-medium leading-6 text-gray-900">Detalhes do Compra </h3>
      <p class="mt-1 text-sm text-gray-600">Visualizas compras  aqui.</p>
    </div>
    <div class="bg-white px-4 py-5 sm:p-6">
        <div class="grid grid-cols-12 gap-6">
          <div class="col-span-12 sm:col-span-12">
              <label for="CustomerID" class="block text-sm font-medium text-gray-700">Cliente: {{@$order->customer->CompanyName}}</label>
          </div>

          <div class="col-span-12 sm:col-span-12">
              <label for="CompanyName" class="block text-sm font-medium text-gray-700">Empregado:{{ $order->employee->FirstName}} {{$order->employee->LastName}}</label>
          </div>

          <div class="col-span-12 sm:col-span-12">
            <label for="ContactNamee" class="block text-sm font-medium text-gray-700">Data da compra: {{ date( 'd/m/Y' , strtotime(@$order->OrderDate))}} </label>
          </div>

          <div class="col-span-12 sm:col-span-12">
            <label for="ContactTitle" class="block text-sm font-medium text-gray-700">Data requerida: {{ date( 'd/m/Y' , strtotime(@$order->RequiredDate))}}</label>
          </div>

          <div class="col-span-12">
            <label for="Address" class="block text-sm font-medium text-gray-700">Shipped Date: {{ date( 'd/m/Y' , strtotime(@$order->ShippedDate))}}</label>
          </div>

          <div class="col-span-12">
            <label for="City" class="block text-sm font-medium text-gray-700">Ship Via: {{@$order->ShipVia}}</label>
          </div>

          <div class="col-span-12">
            <label for="Region" class="block text-sm font-medium text-gray-700">Peso: {{@$order->Freight}}</label>
          </div>

          <div class="col-span-12">
            <label for="PostalCode" class="block text-sm font-medium text-gray-700">Ship Nome: {{@$order->ShipName}}</label>
          </div>
          <div class="col-span-12">
              <label for="Country" class="block text-sm font-medium text-gray-700">Ship Endereço: {{@$order->ShipAddress}}</label>
            </div>

            <div class="col-span-12">
              <label for="Phone" class="block text-sm font-medium text-gray-700">Ship Cidade: {{@$order->ShipCity}}</label>
            </div>

            <div class="col-span-12">
              <label for="Fax" class="block text-sm font-medium text-gray-700">Ship Região: {{@$order->ShipRegion}}</label>
            </div>

            <div class="col-span-12">
                <label for="Fax" class="block text-sm font-medium text-gray-700">Ship CEP: {{@$order->ShipPostalCode}}</label>
            </div>

            <div class="col-span-12">
                <label for="Fax" class="block text-sm font-medium text-gray-700">Ship País: {{@$order->ShipCountry}}</label>
            </div>

            <div class="col-span-12">
                <label for="Fax" class="block text-sm font-medium text-gray-700">Lista de produtos:
                    {{@$order->orderDetails}}
                </label>
            </div>
        </div>
      </div>
</div>


@endsection
