<?php

namespace App\Http\Controllers;

use App\Models\Randonnee;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $Randonnees = Randonnee::all();
        return view('welcome', ['randonnees' => $Randonnees]);
    }
}
