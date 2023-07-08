<?php

namespace App\Http\Controllers;

use App\Models\Personnelle;
use Illuminate\Http\Request;

class PersonnelleController extends Controller
{
    public function show(){
        $Nom = Personnelle::all();
        return view('personnelle', compact('Nom'));
    }

    public function info($id){
        $info = Personnelle::where('id', '=', $id)->get();
        return view('info', compact('info'));
    }

    public function delete($id){
        $info = Personnelle::find($id);
        $info->delete();
        return redirect('/personnelle');
    }
}
