@extends('layout.layout')
@section('page')
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Ue </h3>
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>Liste des Ues</li>
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
                                <h3>ajout de matiere</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i
                                            class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                </div>
                            </div>
                        </div>
                        <form class="new-added-form" method="POST" action="{{ route('matiere.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                    <label>Enseignant</label>
                                    <input disabled type="text" value="{{ $data->nom . ' ' . $data->prenoms }}"
                                        placeholder="" class="form-control">
                                    <input hidden type="text" value="{{ $data->id }}" placeholder="" name="idprof"
                                        class="form-control">
                                </div>
                                <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                    <label>Libelle</label>
                                    <input name="intitule" type="text" placeholder="libellé ue" class="form-control">
                                </div>

                                <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                    <label>Credit</label>
                                    <input name="credit" type="text" placeholder="3" class="form-control">
                                </div>
                                <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                    <label>Code Matiere</label>
                                    <input name="codematiere" type="text" placeholder="MATH-101" class="form-control">
                                </div>

                                <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                    <label>Institut</label>
                                    <select name="idinstitut" class="select2">
                                        <option value="">l'institut :</option>
                                        @foreach ($institut as $d)
                                            <option value="{{ $d->id }}">{{ $d->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12-xxxl col-lg-6 col-12 form-group">
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

                                <div class="col-12 form-group mg-t-8">
                                    <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Ajouter</button>
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
                                <h3>Matiere</h3>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-expanded="false">...</a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
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

                                        <th>Intitulé</th>
                                        <th>codematiere</th>
                                        <th>credit</th>
                                        <th>Institut</th>
                                        <th>niveau</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $ue)
                                        <tr>

                                            <td>{{$ue->intitule }}</td>
                                            <td>{{$ue->codematiere }}</td>
                                            <td>{{$ue->credit }}</td>
                                            <td>{{$ue->institut}}</td>
                                            <td>{{$ue->niveau}}</td>
                                            <td>
                                                <form action="{{route('matiere.destroy',$ue->id)}}" method="POST">
                                                    @csrf
                                                    <button class="btn-fill-lmd radius-4 text-light bg-red"> Supprimer</button>
                                               </form>
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
