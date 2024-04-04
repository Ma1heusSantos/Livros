<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'userName',
        'cpf',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function livros():HasMany
    {
        return $this->hasMany(Livro::class);
    }
    public function transactionsSolicitante()
    {
        return $this->hasMany(Transacao::class, 'solicitante_id');
    }

    public function transactionsProprietario()
    {
        return $this->hasMany(Transacao::class, 'proprietario_id');
    }
    public function notificacoes():HasMany
    {
        return $this->hasMany(Notificacao::class, 'user_id');
    }
    public function notificacoesSolicitante():HasMany
    {
        return $this->hasMany(Notificacao::class, 'solicitante_id');
    }

}
