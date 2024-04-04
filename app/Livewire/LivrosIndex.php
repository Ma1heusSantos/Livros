<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Livro;

class LivrosIndex extends Component
{
    public $search;
    public function render()
    {
        $livros = Livro::where('titulo', 'LIKE', '%' . $this->search . '%')->get();
        return view('livewire.livros-index',['livros'=>$livros]);
    }
}
