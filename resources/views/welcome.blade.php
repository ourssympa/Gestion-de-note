@extends('layout.layout')
@section('page')
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Admin Dashboard</h3>
        <ul>
            <li>
                <a href="index.html">Accueil</a>
            </li>
            <li>Admin</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Dashboard summery Start Here -->
    <div class="row gutters-20">
        <div class="col-xl-4 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-green ">
                            <i class="flaticon-classmates text-green"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Etudiants</div>
                            <div class="item-number"><span class="counter">{{$nbretudiant}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-blue">
                            <i class="flaticon-multiple-users-silhouette text-blue"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Enseignants</div>
                            <div class="item-number"><span class="counter">{{$nbrenseignant}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 col-12">
            <div class="dashboard-summery-one mg-b-20">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="item-icon bg-light-yellow">
                            <i class="flaticon-books text-orange"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="item-content">
                            <div class="item-title">Instituts</div>
                            <div class="item-number"><span class="counter">{{$nbrinstitut}}</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div>
        <div class="item-title">
            <h3>Liste des Enseignants</h3>
        </div>
        <div class="heading-layout1">


            <div class="table-responsive">
                <table class="table display data-table text-nowrap" id="example1">
                    <thead>
                        <tr>

                            <th>Nom</th>
                            <th>Prenoms</th>
                            <th>Groupe Sanguin</th>
                            <th>Sexe</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Diplome</th>
                            <th>status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($enseignants as $data)
                        <tr>

                          <td> {{$data->nom}}</td>
                          <td> {{$data->prenoms}}</td>
                          <td> {{$data->groupesanguin}}</td>
                          <td> {{$data->sexe}}</td>
                          <td> {{$data->email}}</td>
                          <td> {{$data->telephone}}</td>
                          <td> {{$data->diplome}}</td>
                          <td> {{$data->status}}</td>
                          <td>
                            <a href="{{route('enseignant.edit',$data->id)}}"  class="btn-fill-md text-light bg-dodger-blue">Modifier</a>
                            <a href="{{route('matiere.add',$data->id)}}"  class="btn-fill-lmd radius-4 text-light bg-red">Attribuer matiere</a>
                        </td>

                        </tr>
                        @endforeach



                    </tbody>
                </table>
            </div>


        </div>
    </div>
    
    <footer class="footer-wrap-layout1">
        <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a
                href="#">PsdBosS</a></div>
    </footer>
    <!-- Footer Area End Here -->
</div>
@endsection
