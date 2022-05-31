@extends('layout.layout')
@section('page')
@if (session('message'))
<div class="alert icon-alart bg-light-green2" role="alert">
    <i class="far fa-hand-point-right bg-light-green3"></i>
    {{ session('message') }}
</div>
@endif
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Modifier Note</h3>
                </div>
               <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                    </div>
                </div>
            </div>
            <form class="new-added-form" action="{{route('note.update',$data->id)}}" method="POST">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                        <label>Ue </label>
                        <input type="text" placeholder="" class="form-control" value="{{$data->intitule}}">
                    </div>
                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                        <label>Etudiant</label>
                        <input type="text" placeholder="" class="form-control" value="{{$data->etudiant}}">
                    </div>
                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                        <label>Note 1</label>
                        <input type="text" placeholder="" class="form-control" value="{{$data->note1}}" name="note1">
                    </div>
                    <div class="col-12-xxxl col-lg-6 col-12 form-group">
                        <label>Note2</label>
                        <input type="text" placeholder="" class="form-control" value="{{$data->note2}}" name="note2">
                    </div>

                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Modifier</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

