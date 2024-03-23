<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Livro;

class LivrosSearch extends Component
{
    public $search;
    public function render()
    {
        $livros = Livro::where('titulo', 'LIKE', '%' . $this->search . '%')->get();
        return view('livewire.livros-search',['livros'=>$livros]);
    }
}
