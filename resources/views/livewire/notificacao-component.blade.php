<div>
    <div>
        <!-- notification Dropdown -->
        <div class="hidden sm:flex sm:items-center sm:ms-6">
            <x-dropdown align="right" width="100">
                <x-slot name="trigger">
                    <button
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <i class="fa fa-bell"></i>
                    </button>
                </x-slot>

                @if (count($notificacoes) > 0)
                    @foreach ($notificacoes as $notificacao)
                        <x-slot name="content">
                            <x-dropdown-link :href="route('transacoes.index')">
                                Usuário {{ $notificacao->solicitante->name }} solicita {{ $notificacao->descricao }} do
                                livro {{ $notificacao->livro->titulo }}
                            </x-dropdown-link>
                        </x-slot>
                    @endforeach
                @else
                    <x-slot name="content">
                        <x-dropdown-link :href="route('transacoes.index')" style="width:600px;">
                            Não tem notificação aqui otaro
                        </x-dropdown-link>
                    </x-slot>
                @endif
            </x-dropdown>
        </div>
    </div>
</div>
