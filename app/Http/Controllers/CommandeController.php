<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function show(){
        $commande = Commande::all()->sortByDesc('id');
        return view('liste_commande', compact('commande'));
    }
}
