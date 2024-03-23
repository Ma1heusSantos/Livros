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
        <livewire:livros-search>
    </div>


</x-app-layout>
