<?php

namespace App\Http\Controllers;

use App\Models\Abri;
use Illuminate\Http\Request;

class AbriController extends Controller
{
    public function index()
    {
        $abris = Abri::all();
        return view('abris', ['abris' => $abris]);
    }

    public function delete($code_Abris)
    {

        $abri = Abri::findOrFail($code_Abris);

        $abri->reservations()->delete();
        $abri->ascensions()->delete();
        $abri->delete();

        return redirect()->action([AbriController::class, 'index']);
    }

    public function modifier($code_Abris)
    {
        $abri = Abri::findOrFail($code_Abris);
        return view('modifier-abri', ['abri' => $abri]);
    }

    public function update(Request $request, $code_Abris)
    {
        $abri = Abri::findOrFail($code_Abris);
        $abri->nom_Abris = $request->input('nom_Abris');
        $abri->type_Abris = $request->input('type_Abris');
        $abri->altitude_Abris = $request->input('altitude_Abris');
        $abri->places_Abris = $request->input('places_Abris');
        $abri->prixNuit_Abris = $request->input('prixNuit_Abris');
        $abri->prixRepas_Abris = $request->input('prixRepas_Abris');
        $abri->telGardien_Abris = $request->input('telGardien_Abris');
        $abri->code_Vallees = $request->input('code_Vallees');
        $abri->timestamps = false;
        $abri->save();
        return redirect()->action([AbriController::class, 'index']);
    }
}
