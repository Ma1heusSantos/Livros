<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Minhas Transações') }}
            </h2>
            <button type="button"
                class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300  font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><a
                    href="{{ route('livros.adicionar') }}">Adicionar Livros</a></button>
        </div>
    </x-slot>
    <div class="py-12">

        <x-slot name="header">
            <div class="flex justify-between items-center">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Minhas Transações') }}
                </h2>
            </div>
        </x-slot>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Solicitante
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nome do livro
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Aceitar
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Recusar
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($transacoes as $transacao)
                                    <tr class="odd:bg-white even:bg-gray-50 ">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                            {{ $transacao->solicitante->name }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $transacao->livro->titulo }}
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($transacao->status == 'Aprovada')
                                                <span class="font-medium text-green-600">
                                                    {{ $transacao->status }}</span>
                                            @elseif ($transacao->status == 'Negada')
                                                <span class="font-medium text-red-600"> {{ $transacao->status }}</span>
                                            @else
                                                <span class="font-medium text-yellow-600">
                                                    {{ $transacao->status }}</span>
                                            @endif
                                        </td>
                                        @if ($transacao->status == 'Pendente')
                                            <td class="px-6 py-4">
                                                <a href="{{ route('aceitar.transacao', $transacao->id) }}"
                                                    class="font-medium text-green-600 ">Aceitar</a>
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="{{ route('recusar.transacao', $transacao->id) }}"
                                                    class="font-medium text-red-600">Recusar</a>
                                            </td>
                                        @else
                                            <td class="px-12 py-4">
                                                -
                                            </td>
                                            <td class="px-12 py-4">
                                                -
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>


</x-app-layout>
