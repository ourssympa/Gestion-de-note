@extends('layout.layout')
@section('page')
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>Ajouter un étudiant</h3>
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
        <form class="new-added-form" method="POST" action="{{route('etudiant.store')}}">
            @csrf
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Nom :</label>
                    <input name="nom" type="text" placeholder="" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Prenoms :</label>
                    <input name="prenoms" type="text" placeholder="" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Sexe :</label>
                    <select name="sexe" class="select2">
                        <option value="">Votre sexe </option>
                        <option value="masculin">Masculin</option>
                        <option value="feminin">Feminin</option>

                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Date de Naissance</label>
                    <input name="datenaissance" type="text" placeholder="dd/mm/yyyy" class="form-control air-datepicker"
                        data-position='bottom right'>
                    <i class="far fa-calendar-alt"></i>
                </div>

                <div class="col-xl-3 col-lg-6 col-12 form-group">
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
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>E-Mail</label>
                    <input name="email" type="email" placeholder="" class="form-control">
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Institut</label>
                    <select name="idinstitut" class="select2">
                        <option value="">l'institut :</option>
                      @foreach ($datas as $data)
                      <option value="{{$data->id}}">{{$data->nom}}</option>

                      @endforeach
                    </select>
                </div>

                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Niveau</label>
                    <select name="niveau" class="select2">
                        <option value="">niveau</option>
                        <option value="licence1">Licence 1</option>
                        <option value="licence2">Licence 2</option>
                        <option value="licence3">Licence 3</option>
                        <option value="master1">Master 1</option>
                        <option value="master2">Master 2</option>
                    </select>
                </div>
                <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label>Télephone</label>
                    <input name="telephone" type="text" placeholder="" class="form-control">
                </div>
                <div class="col-12 form-group mg-t-8">
                   <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Enregistrement</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
