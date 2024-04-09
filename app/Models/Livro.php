<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Livro extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'titulo',
        'image',
        'autor',
        'user_id' ,
        'descricao',
        'genero',
        'estado_de_conservacao' 
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'id','user_id');
    }
    public function notificacao():HasMany
    {
        return $this->hasMany(Notificacao::class);
    }
    public function transacoes()
    {
        return $this->hasMany(Transacao::class);
    }
    
}
