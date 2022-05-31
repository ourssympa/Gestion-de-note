<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Institut;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{

    public function index()
    {
        $datas = Etudiant::all();
        return view('etudiant.index',compact('datas'));
    }


    public function create()
    {
        $datas = Institut::all();
        return view('etudiant.create',compact('datas'));
    }


    public function store(Request $request)
    {
        Etudiant::create($request->all());
        return redirect()->route('etudiant.index')->with('message',"Etudiant enregistrer");
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $data=Etudiant::where('id',$id)->first();
        $datas = Institut::all();
        return view('etudiant.update',compact('data','datas'));
    }


    public function update(Request $request, $id)
    {
        $data = Etudiant::where('id',$id)->first();
        $data->fill($request->all())->save();
        return redirect()->route('etudiant.index')->with('message',"Etudiant Modifier");
    }

    public function liste()
    {
        $datas = Institut::all();
        return view('etudiant.liste',compact('datas'));
    }


    public function listepost(Request $request)
    {
        $institut=$request->idinstitut;
        $niveau = $request->niveau;
        $datas = Etudiant::where('idinstitut', $institut)->where('niveau',$niveau)->get();
        return view('etudiant.index',compact('datas','niveau'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
