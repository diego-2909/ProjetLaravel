<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vallee;

class ValleeController extends Controller
{
    public function index()
    {
        $Vallees = Vallee::all();
        return view('vallees', ['vallees' => $Vallees]);
    }
    public function delete($code_Vallees)
    {
        $Vallee = Vallee::findOrFail($code_Vallees);
        $Vallee->abris()->delete();
        $Vallee->delete();

        return redirect()->action([ValleeController::class, 'index']);
    }



    public function modifier($code_Vallees)
    {
        $Vallee = Vallee::findOrFail($code_Vallees);
        return view('modifier-vallee', ['vallee' => $Vallee]);
    }

    public function update(Request $request, $code_Vallees)
    {
        $Vallee = Vallee::findOrFail($code_Vallees);
        $Vallee->nom_Vallees = $request->input('nom_Vallees');
        $Vallee->timestamps = false;
        $Vallee->save();
        return redirect()->action([ValleeController::class, 'index']);
    }
}
