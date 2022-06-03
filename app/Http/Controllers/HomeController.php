<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use App\Models\Etudiant;
use App\Models\Institut;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
class HomeController extends Controller
{
    public function index()
    {
        $enseignants = Enseignant::all();
        $nbrenseignant= $enseignants->count();
        $instituts = Institut::all();
        $nbrinstitut = $instituts->count();
        $etudiants=Etudiant::all();
        $nbretudiant=$etudiants->count();
        return view('welcome',compact('enseignants','nbrenseignant','instituts','nbrinstitut','nbretudiant'));
    }
    public function login(){

        return view('mylogin');
    }

    public function create(LoginRequest $request){

        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
