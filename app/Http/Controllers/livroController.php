<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class livroController extends Controller
{
    function index(){
        $livros = Livro::all();
        return view('livros.index')
        ->with('livros',$livros);
    }
    function create(){
        $estados = ['Ruim','Regular','Bom','Otimo'];
        $generos = ["Ficção Científica", "Fantasia", "Romance", "Suspense", "Mistério", "Terror", "Não Ficção", "Biografia", "Autoajuda", "História", "Poesia", "Aventura"];

        return view("livros.create")
                    ->with('estados',$estados)
                    ->with('generos',$generos);
    }
    function store(Request $request)
    {
        $user = Auth::id();
        $livro = Livro::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'descricao' => $request->descricao,
            'user_id' => $user,
            'genero' => $request->genero,
            'estado_de_conservacao' => $request->estado_de_conservacao
        ]);
       
        //tratamento da imagem:
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $requestImage->move(public_path('img/imageLivros'), $imageName);
            $livro->image = $imageName;
        }
        
        $livro->save();

        return redirect()->route('livros.index');
    }
    function details(Request $request){
        $livro = Livro::find($request->id);
        return view('livros.detalhes')
        ->with('livro',$livro);
    }
}
