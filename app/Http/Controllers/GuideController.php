<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    public function index()
    {
        $Guides = Guide::all();
        return view('guides', ['guides' => $Guides]);
    }

    public function delete($code_Guides)
    {

        $Guide = Guide::findOrFail($code_Guides);

        $Guide->randonnees->each(function ($randonnee) {
            $randonnee->concerners()->delete();
            $randonnee->delete();
        });

        $Guide->delete();



        return redirect()->action([GuideController::class, 'index']);
    }

    public function modifier($code_Guides)
    {
        $Guide = Guide::findOrFail($code_Guides);
        return view('modifier-guide', ['guide' => $Guide]);
    }

    public function update(Request $request, $code_Guides)
    {
        $Guide = Guide::findOrFail($code_Guides);
        $Guide->nom_Guides = $request->input('nom_Guides');
        $Guide->prenom_Guides = $request->input('prenom_Guides');
        $Guide->email_Guides = $request->input('email_Guides');
        $Guide->motdepasse_Guides = $request->input('motdepasse_Guides');
        $Guide->timestamps = false;
        $Guide->save();
        return redirect()->action([GuideController::class, 'index']);
    }
}
