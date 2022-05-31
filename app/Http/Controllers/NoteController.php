<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Institut;
use App\Models\Note;
use App\Models\Ue;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listepost(Request $request)
    {
        $institut=$request->idinstitut;
        $niveau = $request->niveau;
        $datas = Etudiant::where('idinstitut',$institut)->where('niveau',$niveau)->get();
        $ues=Ue::where('idinstitut',$institut)->where('niveau',$niveau)->get();
        return view('note.create',compact('datas','niveau','ues','institut'));

    }

    public function liste()
    {
        $datas = Institut::all();
        return view('note.liste',compact('datas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $institut=$request->idinstitut;
        $niveau = $request->niveau;
        $datas = Etudiant::where('idinstitut',$institut)->where('niveau',$niveau)->get();
        $ue=Ue::where('id',$request->idue)->first();
        $notes = Note::where('idinstitut',$institut)->where('niveau',$niveau)->where('idue',$request->idue)->get();
        return view('note.addnote',compact('datas','ue','notes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id,Request $request)
    {
        $request['idetudiant']=$id;
        if(($request->note1+$request->note2)/2<10){
            $request['status']='non-validé';
        }else{
            $request['status']='validé';
        }
        //dd($request->all());
        Note::create($request->all());

        $institut=$request->idinstitut;
        $niveau = $request->niveau;
        $datas = Etudiant::where('idinstitut',$institut)->where('niveau',$niveau)->get();
        $ue=Ue::where('id',$request->idue)->first();
        $notes = Note::where('idinstitut',$institut)->where('niveau',$niveau)->where('idue',$request->idue)->get();
        return view('note.addnote',compact('datas','ue','notes'));  }

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
        $data = Note::where('id',$id)->first();
        return view('note.update',compact('data'));
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
        $data=Note::where('id',$id)->first();
        if(($request->note1+$request->note2)/2<10){
            $request['status']='non-validé';
        }else{
            $request['status']='validé';
        }
        $data->fill($request->all())->save();
        return redirect()->back()->with('message','Modification effectuée');
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
