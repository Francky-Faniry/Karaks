<?php

namespace App\Http\Controllers;
session_start();
use App\Models\Articles;
use App\Models\Commande;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function Numero($id){
        $table = $id;
        $_SESSION['table'] = $table;
        $boisson = Articles::all();
        return view('commande', compact('boisson', 'table'));
    }
     
    public function calcule(){
        if(isset($_POST['commande'])){
            $id =  AddSlashes (htmlspecialchars($_POST['commande']));
        }
        if(isset($_POST['commande2'])){
            $id2 =  AddSlashes (htmlspecialchars($_POST['commande2']));
            $qté2 = $_POST['quantité2'];
            $qté = $_POST['quantité'];
            $prix = Articles::where('id', '=', $id)->get();
            $prix2 = Articles::where('id', '=', $id2)->get();
            foreach($prix as $montant){
                $somme = $montant->prix_article;
                $nom = $montant->nom;
            }
            foreach($prix2 as $montant2){
                $somme2 = $montant2->prix_article;
                $nom2 = $montant2->nom;
            }
            $qté_total = $qté+$qté2;
            $total1 = $somme * $qté;
            $total2 = $somme2 * $qté2;
            $total = $total1 + $total2;
            $arg_reçu = $_POST['Arg_reçu2'];
            $arg_rendu = $arg_reçu - $total;
            Commande::create([
                'num_table' => $_SESSION['table'],
                'art_commander' => $nom.', '.$nom2,
                'qte_commander' => $qté_total,
                'montant_total' => $total,
                'argent_reçu' => $arg_reçu,
               'argent_rendu' => $arg_rendu
            ]);

        }else{
            $qté = $_POST['quantité'];
            $prix = Articles::where('id', '=', $id)->get();
            foreach($prix as $montant){
                $somme = $montant->prix_article;
                $nom = $montant->nom;
            }
            $total = $somme * $qté;
            $arg_reçu = $_POST['Arg_reçu'];
            $arg_rendu = $arg_reçu - $total;
            Commande::create([
                'num_table' => $_SESSION['table'],
                'art_commander' => $nom,
                'qte_commander' => $qté,
                'montant_total' => $total,
                'argent_reçu' => $arg_reçu,
               'argent_rendu' => $arg_rendu
            ]);
        }
        $commande = Commande::all()->sortByDesc('id');
        return view('liste_commande', compact('commande'));
    }
}
