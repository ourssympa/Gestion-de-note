@extends('layout.layout')
@section('page')
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Notes</h3>
        <ul>
            <li>
                <a href="index.html">Accueil</a>
            </li>
            <li>Enregistrer Note</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- All Subjects Area Start Here -->
    @if (session('message'))
    <div class="alert icon-alart bg-light-green2" role="alert">
        <i class="far fa-hand-point-right bg-light-green3"></i>
        {{ session('message') }}
    </div>
@endif
    <div class="row">

        <div class="col-4-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Ajouter une note</h3>
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

                    <form class="new-added-form" >

                        <div class="row">
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                              <label>Choix de l'Ue:</label>
                                <select name="idue" class="select2" >
                                <option value="{{$ue->id}}">{{$ue->intitule}} </option>
                            </select>
                            </div>

                            {{-- <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Soumettre</button>
                            </div> --}}
                        </div>
                    </form>

                     
                </div>
            </div>
        </div>
        <div class="col-8-xxxl col-12">
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>Nos Instituts :</h3>
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

                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenoms</th>
                                    <th>note1</th>
                                    <th>note2</th>
                                    <th>Ajouter</th>
                                </tr>
                            </thead>
                            <tbody>
                        @foreach ($datas as $data)
                        <tr>

                            <td> <b>{{$data->nom}}</b></td>
                            <td> <b>{{$data->prenoms}}</b> </td>
                            <form action="{{route('note.store',$data->id)}}" method="POST">
                            @csrf
                            <td> <input type="text" name="note1">
                                <input type="text" name="idue" value="{{$ue->id}}" hidden>
                             </td>
                            <td>
                                <input type="text" name="note2">
                                <input type="text" name="niveau" value="{{$data->niveau}}" hidden>
                                <input type="text" name="idinstitut" value="{{$data->idinstitut}}" hidden>
                            </td>
                            <td> <button type="submit"  class="btn-fill-lg bg-blue-dark btn-hover-yellow">Ajouter</button> </td>
                        </form>
                        </tr>

                        @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table display data-table text-nowrap">
            <thead>
                <tr>
                    <th>Matiere</th>
                    <th>nom et prenom</th>
                    <th>note1</th>
                    <th>note2</th>
                    <th>Moyenne</th>
                    <th>status </th>
                    <th>Modifier </th>
                </tr>
            </thead>
            <tbody>
        @foreach ($notes as $note)
        <tr>

            <td> <b>{{$note->intitule}}</b></td>
            <td> <b>{{$note->etudiant}}</b> </td>
            <td> <b>{{$note->note1}}</b> </td>
            <td> <b>{{$note->note2}}</b> </td>
            <td> <b>{{($note->note1+$note->note2)/2}}</b> </td>
            <td> <b>{{$note->status}}</b></td>
            <td>      <a href="{{route('note.edit',$note->id)}}"  class="btn-fill-lmd radius-4 text-light bg-red">Modifier</a>
            </td>

        </tr>

        @endforeach

            </tbody>
        </table>
    </div>
    <footer class="footer-wrap-layout1">
        <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                href="#">PsdBosS</a></div>
    </footer>
</div>
@endsection
