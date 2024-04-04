<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Notificacao extends Model
{
    use HasFactory;

    protected $table = "notificacoes";

    protected $fillable=[
        'user_id',
        'solicitante_id',
        'descricao',
        'livro_id'
    ];

    public function solicitante(): BelongsTo
    {
        return $this->belongsTo(User::class, 'solicitante_id');
    }

    public function proprietario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'proprietario_id');
    }
    public function livro(): BelongsTo
    {
        return $this->belongsTo(Livro::class);
    }
}
