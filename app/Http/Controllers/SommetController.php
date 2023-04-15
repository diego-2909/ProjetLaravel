<?php

namespace App\Http\Controllers;

use App\Models\Sommet;
use Illuminate\Http\Request;

class SommetController extends Controller
{
    public function index()
    {
        $Sommets = Sommet::all();
        return view('sommets', ['sommets' => $Sommets]);
    }

    public function delete($code_Sommets)
    {

        $Sommet = Sommet::findOrFail($code_Sommets);
        $Sommet->ascensions()->delete();
        $Sommet->randonnees->each(function ($randonnee) {
            $randonnee->concerners()->delete();
            $randonnee->delete();
        });
        $Sommet->delete();

        return redirect()->action([SommetController::class, 'index']);
    }

    public function modifier($code_Sommets)
    {
        $Sommet = Sommet::findOrFail($code_Sommets);
        return view('modifier-sommet', ['sommet' => $Sommet]);
    }

    public function update(Request $request, $code_Sommets)
    {
        $Sommet = Sommet::findOrFail($code_Sommets);
        $Sommet->nom_Sommets = $request->input('nom_Sommets');
        $Sommet->altitude_Sommets = $request->input('altitude_Sommets');
        $Sommet->timestamps = false;
        $Sommet->save();
        return redirect()->action([SommetController::class, 'index']);
    }
}
