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
            <li>liste des etudiants</li>
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Promotion Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>liste des etudiants par niveau :</h3>
                </div>
               <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button"
                    data-toggle="dropdown" aria-expanded="false">...</a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                    </div>
                </div>
            </div>
            <form class="new-added-form" method="POST" action="{{route('note.listepost')}}">
               @csrf
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Institut</label>
                        <select name="idinstitut" class="select2">
                            <option value="">l'institut :</option>
                          @foreach ($datas as $d)
                          <option value="{{$d->id}}">{{$d->nom}}</option>
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

                    <div class="col-12 form-group mg-t-8">
                      <button type="submit" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Lister</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Student Promotion Area End Here -->
    <footer class="footer-wrap-layout1">
        <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
    </footer>
</div>
@endsection

