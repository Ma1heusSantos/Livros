<div>
    <div class=" max-w-7xl mx-auto sm:px-6 lg:px-8">


        <div class="max-w-md mx-auto">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input wire:model.live="search" type="search" id="default-search"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Pesquise por um Livro..." required />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Pesquisar</button>
            </div>
        </div>


        <a href="#">
            <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
        </a>
        <div class="flex p-6 flex-row">
            @foreach ($livros as $livro)
                <div class="flex mx-4">
                    <div class="rounded overflow-hidden shadow-lg flex flex-col">
                        <a href="#"></a>
                        <div class="relative"><a href="#">
                                <img class="rounded-t-lg w-full" src="{{ asset('img/imageLivros/' . $livro->image) }}"
                                    alt="{{ $livro->titulo }}" />
                                <div
                                    class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                                </div>
                            </a>
                            <a href="{{ route('solicitar.emprestimo', $livro->id) }}">
                                <div
                                    class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                                    Solicitar emprestimo
                                </div>
                            </a>
                        </div>
                        <div class="px-6 py-4 mb-auto">
                            <a href="#"
                                class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">{{ $livro->titulo }}</a>
                            <p class="text-gray-500 text-sm">
                                {{ $livro->descricao }}
                            </p>
                        </div>
                        <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                            <a href="{{ route('livros.details', $livro->id) }}"
                                class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center hover:text-blue-700">
                                <i class="fa-solid fa-circle-info fa-sm"></i>
                                <span class="ml-1 text-lg">Detalhes</span>
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
