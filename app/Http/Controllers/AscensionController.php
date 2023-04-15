<?php

namespace App\Http\Controllers;

use App\Models\Ascension;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


class AscensionController extends Controller
{
    public function index()
    {
        $Ascension = Ascension::all();
        return view('ascension', ['ascensions' => $Ascension]);
    }

    public function delete($code_sommets, $code_abri)
    {
        $ascension = Ascension::where('code_Sommets', $code_sommets)
            ->where('code_Abris', $code_abri)
            ->firstOrFail();

        $ascension->delete();

        return redirect()->action([AscensionController::class, 'index']);
    }

    public function modifier($code_sommets, $code_abri)
    {
        $ascension = Ascension::where('code_Sommets', $code_sommets)
            ->where('code_Abris', $code_abri)
            ->firstOrFail();

        return view('modifier-ascension', ['ascension' => $ascension]);
    }




    public function update(Request $request, $code_sommets, $code_abri)
    {
        $ascension = Ascension::where('code_sommets', $code_sommets)
            ->where('code_abris', $code_abri)
            ->firstOrFail();

        $ascension->code_sommets = $request->input('code_Sommets');
        $ascension->code_abris = $request->input('code_Abris');
        $ascension->difficulte_Ascension = $request->input('difficulte_Ascension');
        $ascension->duree_Ascension = $request->input('duree_Ascension');
        $ascension->timestamps = false;
        $ascension->save();

        return redirect()->action([AscensionController::class, 'index']);
    }
}
