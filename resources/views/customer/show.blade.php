@extends("layouts.app-store")
@section('content')
<div class="md:col-span-1">
    <div class="px-4 sm:px-0">
      <h3 class="text-lg font-medium leading-6 text-gray-900">Detalhes do Cliente </h3>
      <p class="mt-1 text-sm text-gray-600">Visualize clientes aqui.</p>
    </div>
    <div class="bg-white px-4 py-5 sm:p-6">
        <div class="grid grid-cols-12 gap-6">
          <div class="col-span-12 sm:col-span-12">
              <label for="CustomerID" class="block text-sm font-medium text-gray-700">CustomerID: {{@$customer->CustomerID}}</label>
          </div>

          <div class="col-span-12 sm:col-span-12">
              <label for="CompanyName" class="block text-sm font-medium text-gray-700">CompanyName: {{@$customer->CompanyName}}</label>
          </div>

          <div class="col-span-12 sm:col-span-12">
            <label for="ContactNamee" class="block text-sm font-medium text-gray-700">ContactName: {{@$customer->ContactName}} </label>
          </div>

          <div class="col-span-12 sm:col-span-12">
            <label for="ContactTitle" class="block text-sm font-medium text-gray-700">ContactTitle: {{@$customer->ContactTitle}}</label>
          </div>

          <div class="col-span-12">
            <label for="Address" class="block text-sm font-medium text-gray-700">Address: {{@$customer->Address}}</label>
          </div>

          <div class="col-span-12">
            <label for="City" class="block text-sm font-medium text-gray-700">City: {{@$customer->City}}</label>
          </div>

          <div class="col-span-12">
            <label for="Region" class="block text-sm font-medium text-gray-700">Region: {{@$customer->Region}}</label>
          </div>

          <div class="col-span-12">
            <label for="PostalCode" class="block text-sm font-medium text-gray-700">Postal Code: {{@$customer->PostalCode}}</label>
          </div>
          <div class="col-span-12">
              <label for="Country" class="block text-sm font-medium text-gray-700">Country: {{@$customer->Country}}</label>
            </div>

            <div class="col-span-12">
              <label for="Phone" class="block text-sm font-medium text-gray-700">Phone: {{@$customer->Phone}}</label>
            </div>

            <div class="col-span-12">
              <label for="Fax" class="block text-sm font-medium text-gray-700">Fax: {{@$customer->Fax}}</label>
            </div>
        </div>
      </div>
</div>


@endsection
