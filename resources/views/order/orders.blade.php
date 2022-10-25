@extends("layouts.app-store")
@section('content')


     <div  class="flex justify-between items-center">
        <table class="table-auto border-separate border-spacing-2 border border-slate-400 mt-1.5">
            <thead>
            <tr>
                <th  class="border border-slate-300 ...">ID</th>
                <th class="border border-slate-300 ...">Nome do Cliente</th>
                <th  class="border border-slate-300 ...">Nome do Empregado</th>
                <th  class="border border-slate-300 ...">Data da Venda</th>
                <th  class="border border-slate-300 ...">Opções</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                @foreach ($orders as $order)
                    <tr >
                        <td  class="border border-slate-300 ...">{{ $order->OrderID }}</td>
                        <td  class="border border-slate-300 ...">{{ @$order->customer->CompanyName }}</td>
                        <td class="border border-slate-300 ...">{{ $order->employee->FirstName}} {{$order->employee->LastName}}</td>
                        <td class="border border-slate-300 ..."> {{ date( 'd/m/Y' , strtotime( $order->OrderDate ))}} </td>
                        <td class="border border-slate-300 ...">
                            <div  class="flex justify-between items-center">
                                <a href="/order/show/{{ $order->OrderID }}"
                                    type="button"  class="flex py-2 px-4 border border-transparent text-sm rounded-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                     </svg>

                                Visualizar
                                </a>

                                <a type="button" href="/order/edit/{{ $order->OrderID }}"
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

                                <form action="delete/{{ $order->OrderID  }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button
                                        class="flex py-2 px-4 border border-transparent text-sm rounded-sm text-white bg-red-600 hover:bg-red-700 focus:ring-2 focus:ring-offset-2 focus:ring-red-500">

                                           <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                           <path
                                               stroke-linecap="round"
                                               stroke-linejoin="round"
                                               stroke-width="2"
                                               d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                                           />
                                           </svg>
                                        Delete
                                       </button>
                                </form>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>
@endsection
