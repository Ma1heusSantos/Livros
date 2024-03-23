<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Meus Livros') }}
            </h2>
            <button type="button"
                class="text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><a
                    href="{{ route('livros.adicionar') }}">Adicionar Livros</a></button>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <div>
                    <a href="#">
                        <img class="rounded-t-lg max-w-sm" src="{{ asset('img/imageLivros/' . $livro->image) }}"
                            alt="Harry Potter" />
                    </a>
                </div>
                <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    <span class="text-lg font-semibold">Título: {{ $livro->titulo }}</span>
                    <span class="text-gray-600">Autor: {{ $livro->autor }}</span> <br>
                    <span class="text-gray-600">Descrição: {{ $livro->descricao }}</span> <br>
                    <span class="text-gray-600">Estado de conservação: {{ $livro->estado_de_conservacao }}</span> <br>
                    <span class="text-gray-600">Gênero: {{ $livro->genero }}</span>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
