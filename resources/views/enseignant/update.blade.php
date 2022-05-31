@extends('layout.layout')
@section('page')
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>   Modifier un Enseignant</h3>

            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-expanded="false">...</a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i
                            class="fas fa-times text-orange-red"></i>Close</a>
                    <a class="dropdown-item" href="#"><i
                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                    <a class="dropdown-item" href="#"><i
                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                </div>
            </div>
        </div>
        <form class="new-added-form" method="POST" action="{{route('enseignant.update',$data->id)}}">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Nom :</label>
                    <input name="nom" value="{{$data->nom}}" type="text" placeholder="" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Prenoms :</label>
                    <input name="prenoms" value="{{$data->prenoms}}" type="text" placeholder="" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Sexe :</label>
                    <select name="sexe" class="select2">
                        @if($data->sexe=="masculin")
                        <option value="">Votre sexe </option>
                        <option value="masculin" selected>Masculin</option>
                        <option value="feminin">Feminin</option>
                        @else
                        <option value="">Votre sexe </option>
                        <option value="masculin" >Masculin</option>
                        <option value="feminin" selected>Feminin</option>
                        @endif

                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Date de Naissance</label>
                    <input value="{{$data->datenaissance}}" name="datenaissance" type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                        data-position='bottom right'>
                    <i class="far fa-calendar-alt"></i>
                </div>

                {{-- <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Groupe sanguin</label>
                    <select name="groupesanguin" class="select2">
                        <option value="">Groupe sanguin</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div> --}}
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>E-Mail</label>
                    <input value="{{$data->email}}" name="email" type="email" placeholder="" class="form-control">
                </div>

                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Diplome</label>
                    <input name="diplome" value="{{$data->diplome}}" type="text" placeholder="" class="form-control">

                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Télephone</label>
                    <input name="telephone" value="{{$data->telephone}}" type="text" placeholder="" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Status</label>
                    <select name="status" class="select2">
                        @if ($data->status=="vacataire")
                        <option value="">status</option>
                        <option value="vacataire" selected>vacataire</option>
                        <option value="interne">interne</option>
                        @else
                        <option value="">status</option>
                        <option value="vacataire">vacataire</option>
                        <option value="interne" selected>interne</option>
                        @endif

                    </select>
                </div>
                <div class="col-12 form-group mg-t-8">
                   <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Enregistrement</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
