<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['num_table','art_commander','qte_commander','montant_total','created_at','argent_reçu','argent_rendu'];
}
