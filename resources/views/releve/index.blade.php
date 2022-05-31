@extends('layout.layout')
@section('page')
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Etudiant</h3>
        <ul>
            <li>
                <a href="index.html">Accueil</a>
            </li>
            <li>liste etudiant</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Table Area Start Here -->
    @if (session('message'))
    <div class="alert icon-alart bg-light-green2" role="alert">
        <i class="far fa-hand-point-right bg-light-green3"></i>
        {{ session('message') }}
    </div>
@endif
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Liste des Etudiants</h3>
                    @if (isset($niveau))
                    <h3>de l'institut : {{$datas[0]->institut}} {{$niveau}}</h3>

                    @endif
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
                            <th>Groupe Sanguin</th>
                            <th>Sexe</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Institut</th>
                            <th>Niveau</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $data)
                        <tr>

                          <td> {{$data->nom}}</td>
                          <td> {{$data->prenoms}}</td>
                          <td> {{$data->groupesanguin}}</td>
                          <td> {{$data->sexe}}</td>
                          <td> {{$data->email}}</td>
                          <td> {{$data->telephone}}</td>
                          <td> {{$data->institut}}</td>
                          <td> {{$data->niveau}}</td>
                          <td>
                            <a href="{{route('releve.show',$data->id)}}"  class="btn-fill-md text-light bg-dodger-blue">Relevé de note</a>
                        </td>

                        </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Student Table Area End Here -->
    <footer class="footer-wrap-layout1">
        <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                href="#">PsdBosS</a></div>
    </footer>
</div>
@endsection
