<?php

namespace App\Http\Controllers;

use App\Models\Transacao;
use App\Models\Livro;
use App\Models\Notificacao;
use Illuminate\Http\Request;

class transacoesController extends Controller
{
    public function index(){
        $user = auth()->user()->id;
        $transacoes = Transacao::where('proprietario_id', $user)->with('livro')->with('solicitante')->get();
        return view('transacoes.index',['transacoes'=>$transacoes]);

    }
    public function create($id){
        $user = Auth()->user()->id;
        $livro = Livro::find($id);

        $transacao = new Transacao();
        $transacao->livro_id = $livro->id;
        $transacao->solicitante_id = $user;
        $transacao->proprietario_id = $livro->user_id;
        $transacao->status = "Pendente";
        $transacao->save();

        $notificacao = new Notificacao();
        $notificacao->user_id = $livro->user_id;
        $notificacao->solicitante_id = $user;
        $notificacao->livro_id = $livro->id;
        $notificacao->status = 'naoLida';
        $notificacao->save();

        return redirect()->route('transacoes.index');
    }
}
