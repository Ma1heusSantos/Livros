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
    <section class="text-gray-700 body-font overflow-hidden bg-white">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img class="lg:w-1/2 w-full object-cover object-center"
                    src="{{ asset('img/imageLivros/' . $livro->image) }}" alt="{{ $livro->titulo }}" />
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $livro->autor }}</h2>
                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $livro->titulo }}</h1>
                    <div class="flex mb-4">
                    </div>
                    <p class="leading-relaxed">{{ $livro->descricao }}</p>

                    <div class="flex flex-col">
                        <div class="flex text-center items-center">
                            <span class="mr-2 title-font font-medium text-lg text-gray-900">
                                Genero:
                            </span>{{ $livro->genero }}
                        </div>
                        <div class="flex text-center items-center">
                            <span class="mr-2 title-font font-medium text-lg text-gray-900">
                                Estado de conservação :
                            </span>{{ $livro->estado_de_conservacao }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
