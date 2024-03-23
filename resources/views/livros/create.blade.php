<x-app-layout header="adicionar Livros">
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Adicionar Livro') }}
            </h2>
        </div>
    </x-slot>
    <div class="flex flex-col sm:justify-center items-center pt-3 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST" enctype="multipart/form-data" action="{{ route('livros.adicionar') }}">
                @csrf

                <!-- imagem -->
                <div>
                    <label class="block">
                        <span class="sr-only">Escolha a foto do livro</span>
                        <input name='image' id='image'type="file"
                            class="mb-4 block w-full text-sm text-gray-500
                          file:me-4 file:py-2 file:px-4
                          file:rounded-lg file:border-0
                          file:text-sm file:font-semibold
                          file:bg-blue-600 file:text-white
                          hover:file:bg-blue-700
                          file:disabled:opacity-50 file:disabled:pointer-events-none
                          dark:file:bg-blue-500
                          dark:hover:file:bg-blue-400
                        ">
                </div>

                <!-- titulo -->
                <div>
                    <x-input-label for="titulo" :value="__('Titulo')" />
                    <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo"
                        :value="old('titulo')" autofocus autocomplete="titulo" />
                    <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
                </div>

                <!-- Autor -->
                <div class="mt-4">
                    <x-input-label for="autor" :value="__('Autor')" />
                    <x-text-input id="autor" class="block mt-1 w-full" type="text" name="autor"
                        :value="old('autor')" autocomplete="autor" />
                    <x-input-error :messages="$errors->get('autor')" class="mt-2" />
                </div>

                <!-- descrisao -->
                <div class="mt-4">
                    <x-input-label for="descricao" :value="__('Descricao')" />

                    <x-text-input id="descricao" class="block mt-1 w-full" type="text" name="descricao"
                        autocomplete="new-descrisao" />

                    <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                </div>

                <!-- Estado de conservação -->
                <div class="mt-4">
                    <x-input-label for="genero" :value="__('Estado de conservação')" />
                    <select id="estado_de_consevacao"
                        class="p-4 bg-transparent block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        name='estado_de_conservacao'>
                        <option selected>Selecione o estado do seu Livro</option>
                        @foreach ($estados as $estado)
                            <option value="{{ $estado }}">{{ $estado }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('estado_de_consevacao')" class="mt-2" />
                </div>

                <!-- genero -->
                <div class="mt-4">
                    <x-input-label for="genero" :value="__('Género')" />
                    <select id="genero"
                        class="p-4 bg-transparent mb-4 block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        name='genero'>
                        <option selected>Selecione o Género do seu Livro</option>
                        @foreach ($generos as $genero)
                            <option value="{{ $genero }}">{{ $genero }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('genero')" class="mt-2" />
                </div>


                <button type="submit"
                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Salvar
                    Livro</button>

            </form>
        </div>
    </div>
</x-app-layout>
