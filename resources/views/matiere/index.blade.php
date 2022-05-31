@extends('layout.layout')
@section('page')
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Ue</h3>
        <ul>
            <li>
                <a href="index.html">Accueil</a>
            </li>
            <li>liste des Ues</li>
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
                    <h3>Liste Ues</h3>
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

                            <th>Intitulé</th>
                            <th>code</th>
                            <th>Credit</th>
                            <th>Professeur</th>
                            <th>Institut</th>
                            <th>Niveau</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $ue)
                        <tr>

                            <td>{{$ue->intitule }}</td>
                            <td>{{$ue->codematiere }}</td>
                            <td>{{$ue->credit }}</td>
                            <td>{{$ue->prof }}</td>
                            <td>{{$ue->institut}}</td>
                            <td>{{$ue->niveau}}</td>
                            <td>
                                <form action="{{route('matiere.destroy',$ue->id)}}" method="POST">
                                    @csrf
                                    <button class="btn-fill-lmd radius-4 text-light bg-red" onclick="return confirm('Voulez vous vraiment supprimer ?')">
                                        Supprimer</button>
                               </form>
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
