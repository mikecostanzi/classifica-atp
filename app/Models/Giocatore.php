<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Giocatore extends Model
{
    public $table='giocatore';
    public $primaryKey='id_giocatore';
    public $timestamps=false;
    protected $fillable=[
        'id_giocatore',
        'nome_giocatore',
        'cognome_giocatore',
        'username_giocatore',
        'partite_giocate',
        'partite_vinte',
        'accuse_fatte',
        'partite_annullate'
    ];

}
