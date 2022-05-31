<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use App\Models\Institut;
use App\Models\Ue;
use Illuminate\Http\Request;

class UeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {
        $data = Enseignant::where('id',$id)->first();
        $datas = Ue::where('idprof',$id)->get();
        $institut = Institut::all();
       return view('matiere/add',compact('datas','data','institut'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Ue::all();
        return view('matiere.index',compact('datas'));
    }

    public function categorie()
    {
        $datas = Institut::all();
        return view('matiere.categorie',compact('datas'));
    }

    public function post(Request $request)
    {
        $niveau=$request->niveau;
        $datas = Ue::where('idinstitut',$request->idinstitut)->where('niveau',$request->niveau)->get();
        return view('matiere.index',compact('datas','niveau'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Ue::create($request->all());
        return redirect()->back()->with('message','Matiere ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        $ue = Ue::where('id',$id);
        $ue->delete();
        return redirect()->back()->with('message','Matiere supprimé');
    }
}
