<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Institut;
use App\Models\Note;
use Illuminate\Http\Request;

class ReleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = Institut::all();
        return view('releve.create',compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { $institut=$request->idinstitut;
        $niveau = $request->niveau;
        $datas = Etudiant::where('idinstitut',$institut)->where('niveau',$niveau)->get();
        return view('releve.index',compact('datas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $notes =Note::where('idetudiant',$id)->get();
        $user= Etudiant::where('id',$id)->first();
        return view('releve.detail',compact('notes','user'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
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
