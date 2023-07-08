<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Articles;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function show(){
        $id = Stock::all();
        $nom = Articles::all();
        return view('stock', compact('id','nom'));
    }
}
