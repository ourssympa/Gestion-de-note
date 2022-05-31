@extends('layout.layout')
@section('page')
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Les Instituts</h3>
        <ul>
            <li>
                <a href="index.html">Accueil</a>
            </li>
            <li>Institut</li>
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
                            <h3>Ajouter un Institut</h3>
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
                    @if (isset($data))
                    <form class="new-added-form" method="POST" action="{{route('institut.update',$data->id)}}">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Nom du l'institut</label>
                                <input type="text" value="{{$data->nom}}" placeholder="" class="form-control" name="nom">
                            </div>

                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Modifier</button>
                            </div>
                        </div>
                    </form>
                    @else
                    <form class="new-added-form" method="POST" action="{{route('institut.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                <label>Nom du l'institut</label>
                                <input type="text" placeholder="" class="form-control" name="nom">
                            </div>

                            <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                    @endif
                     
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

                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                        @foreach ($datas as $data)
                        <tr>

                            <td>{{$data->id}}</td>
                            <td> <b>{{$data->nom}}</b> </td>
                            <td>
                                <a href="{{route('institut.edit',$data->id)}}"  class="btn-fill-md text-light bg-dodger-blue">Modifier</a>
                                <a href="{{route('institut.destroy',$data->id)}}"  class="btn-fill-lmd radius-4 text-light bg-red">Supprimer</a>
                            </td>
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
