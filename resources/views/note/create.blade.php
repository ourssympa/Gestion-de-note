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

                    <form class="new-added-form" method="POST" action="{{route('note.create')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <input type="text" value="{{$niveau}}" name="niveau" hidden>
                                <input type="text" value="{{$institut}}" name="idinstitut" hidden>
                                <label>Choix de l'Ue:</label>
                                <select name="idue" class="select2">
                                <option value="">Selection de l'ue </option>
                                @foreach($ues as $ue)
                                <option value="{{$ue->id}}">{{$ue->intitule}}</option>
                                @endforeach
                            </select>
                            </div>

                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Soumettre</button>
                            </div>
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
                                    <th>Institut</th>
                                    <th>Niveau</th>
                                </tr>
                            </thead>
                            <tbody>
                        @foreach ($datas as $data)
                        <tr>

                            <td> <b>{{$data->nom}}</b></td>
                            <td> <b>{{$data->prenoms}}</b> </td>
                            <td> <b>{{$data->institut}}</b> </td>
                            <td> <b>{{$data->niveau}}</b></td>

                        </tr>

                        @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All Subjects Area End Here -->
    <footer class="footer-wrap-layout1">
        <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                href="#">PsdBosS</a></div>
    </footer>
</div>
@endsection
