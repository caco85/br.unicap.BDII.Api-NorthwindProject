@extends("layouts.app-store")
@section('content')


     <div  class="flex justify-between items-center">
        <table class="table-auto border-separate border-spacing-2 border border-slate-400 mt-1.5">
            <thead>
            <tr>
                <th  class="border border-slate-300 ...">ID</th>
                <th class="border border-slate-300 ...">Nome</th>
                <th  class="border border-slate-300 ...">Nome de Contato</th>
                <th  class="border border-slate-300 ...">Titulo de Contato</th>
                <th  class="border border-slate-300 ...">Opções</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach ($customers as $customer)
                    <tr >
                        <td  class="border border-slate-300 ...">{{ $customer->CustomerID }}</td>
                        <td  class="border border-slate-300 ...">{{ $customer->CompanyName }}</td>
                        <td class="border border-slate-300 ...">{{$customer->ContactName}}</td>
                        <td class="border border-slate-300 ...">{{$customer->ContactTitle}}</td>
                        <td class="border border-slate-300 ...">
                            <a type="button" href="/customer/edit/{{ $customer->CustomerID }}"
                             class="flex py-2 px-4 border border-transparent text-sm rounded-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                                />
                              </svg>
                              Editar
                            </a>
                        </td>

                    </tr>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>
@endsection
