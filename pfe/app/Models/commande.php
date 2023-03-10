<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Commande extends Model
{
    use HasFactory;
    // use SoftDeletes;
    // les champs que l'on peut utiliser de la table commandes
    protected $fillable=['id','id_user','id_offre','id_user_commande','status'];
}
