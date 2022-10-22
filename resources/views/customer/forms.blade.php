  <div class="mt-10 sm:mt-0  flex items-center justify-between">
    <div class="md:grid md:grid-cols-3 md:gap-6 ">
      <div class="mt-5 md:col-span-2 md:mt-0 ">

        @if (session('status'))
            <div class="text-green-500" role="alert">
                Updated is successfully
            </div>
        @endif
        <form
            @if ($titleButton == 'Update')
                action="{{ url('customer/update') }}/{{$customer->CustomerID}}"

            @else
                action="{{ url('customer') }}"
            @endif
            method="POST" enctype="multipart/form-data" class="mt-10">

            @csrf
            <div class="overflow-hidden shadow sm:rounded-md">
            <div class="bg-white px-4 py-5 sm:p-6">
              <div class="grid grid-cols-12 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="CustomerID" class="block text-sm font-medium text-gray-700">CustomerID</label>
                    <input type="text" name="CustomerID" id="CustomerID" value="{{@$customer->CustomerID}}" {{$titleButton == 'Update'? 'disabled' : ''}}
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="CompanyName" class="block text-sm font-medium text-gray-700">CompanyName</label>
                    <input type="text" name="CompanyName" id="CompanyName" value="{{@$customer->CompanyName}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="ContactNamee" class="block text-sm font-medium text-gray-700">ContactName</label>
                  <input type="text" name="ContactName" id="ContactName"  value="{{@$customer->ContactName}}"  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="ContactTitle" class="block text-sm font-medium text-gray-700">ContactTitle</label>
                  <input type="text" name="ContactTitle" id="ContactTitle" autocomplete="family-name" value="{{@$customer->ContactTitle}}"  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>

                <div class="col-span-6">
                  <label for="Address" class="block text-sm font-medium text-gray-700">Address</label>
                  <input type="text" name="Address" id="Address" autocomplete="Address"  value="{{@$customer->Address}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label for="City" class="block text-sm font-medium text-gray-700">City</label>
                  <input type="text" name="City" id="City" autocomplete="Address"  value="{{@$customer->City}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="Region" class="block text-sm font-medium text-gray-700">Region</label>
                  <input type="text" name="Region" id="Region" autocomplete="address-level1"  value="{{@$customer->Region}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="PostalCode" class="block text-sm font-medium text-gray-700">Postal Code</label>
                  <input type="text" name="PostalCode" id="PostalCode" autocomplete="Postal Code"  value="{{@$customer->PostalCode}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                    <label for="Country" class="block text-sm font-medium text-gray-700">Country</label>
                    <input type="text" name="Country" id="Country" autocomplete="Country"  value="{{@$customer->Country}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                  <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="Phone" class="block text-sm font-medium text-gray-700">Phone</label>
                    <input type="text" name="Phone" id="Phone" autocomplete="Phone"  value="{{@$customer->Phone}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                  <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="Fax" class="block text-sm font-medium text-gray-700">Fax</label>
                    <input type="text" name="Fax" id="Fax" autocomplete="Postal Code"  value="{{@$customer->Fax}}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">{{$titleButton}}</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

