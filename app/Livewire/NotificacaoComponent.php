<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Notificacao;

class NotificacaoComponent  extends Component
{
    public function render()
    {   $user = auth()->user();
        $notificacoes = Notificacao::where('user_id', $user->id)->with('livro')->with('solicitante')->get();
        return view('livewire.notificacao-component',['notificacoes'=> $notificacoes]);
    }
}