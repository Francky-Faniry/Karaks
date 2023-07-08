<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(){
        $nom = Articles::all();
        return view('articles', compact('nom'));
    }

    public function ajoute(){
        return view('ajoute');
    }

    public function insert(Request $request){
        $request->validate([
            'nom' => 'required',
            'categorie' => 'required',
            'prix' => 'required'
        ]);
        Articles::create([
            'nom' => $request->nom,
            'catégorie' => $request->categorie,
            'prix_article' => $request->prix
        ]);
        return redirect('/articles');
    }

    public function delete($id){
        $article = Articles::find($id);
        $article->delete();
        return redirect('/articles');
    }
}
