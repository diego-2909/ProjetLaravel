<?php

namespace App\Http\Controllers;

use App\Models\Randonnee;
use Illuminate\Http\Request;

class RandonneeController extends Controller
{
    public function index()
    {
        $Randonnees = Randonnee::all();
        return view('randonnees', ['randonnees' => $Randonnees]);
    }

    public function delete($code_Randonnees)
    {

        $Randonnee = Randonnee::findOrFail($code_Randonnees);

        $Randonnee->reservations()->delete();
        $Randonnee->ascensions()->delete();
        $Randonnee->delete();

        return redirect()->action([RandonneeController::class, 'index']);
    }

    public function modifier($code_Randonnees)
    {
        $Randonnee = Randonnee::findOrFail($code_Randonnees);
        return view('modifier-randonnee', ['randonnee' => $Randonnee]);
    }

    public function update(Request $request, $code_Randonnees)
    {
        $Randonnee = Randonnee::findOrFail($code_Randonnees);
        $Randonnee->nbPersonnes_Randonnees = $request->input('nbPersonnes_Randonnees');
        $Randonnee->dateDebut_Randonnees = $request->input('dateDebut_Randonnees');
        $Randonnee->dateFin_Randonnees = $request->input('dateFin_Randonnees');
        $Randonnee->code_Guides = $request->input('code_Guides');
        $Randonnee->timestamps = false;
        $Randonnee->save();
        return redirect()->action([RandonneeController::class, 'index']);
    }
}
