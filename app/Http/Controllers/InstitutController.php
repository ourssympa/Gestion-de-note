<?php

namespace App\Http\Controllers;

use App\Models\Institut;
use Illuminate\Http\Request;

class InstitutController extends Controller
{
    public function index()
    {
        $datas = Institut::all();
        return view('institut.index',compact('datas'));
    }

    public function store(Request $request)
    {
        Institut::create($request->all());
        return redirect()->back()->with('message',"Institut ajouté ");
    }

    public function edit($id)
    {
        $data = Institut::where('id',$id)->first();
        $datas = Institut::all();
        return view('institut.index',compact('datas','data'));
    }
    public function update($id,Request $request)
    {
        $data = Institut::where('id',$id)->first();
        $data->fill($request->all())->save();
        return redirect()->route('institut.index')->with('message',"Institut Modifier ");
   }

}
