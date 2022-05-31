@extends('layout.layout')
@section('page')
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1 mg-b-25">
            <div class="item-title">

            </div>
           <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
        </div>
        <div class="row">
           <div class="col-lg-6">
               <h3>Relevé de note</h3>

           </div>
           <div class="col-lg-6">
              {{date('d-M-Y');}}
              <br>
              Téléphone:+22897992558
              <br>
              Email:Ourssympa@gmail.com
           </div>
           <div class="col-lg-2">
               @if($user->sexe="masculin")

               <img src="{{asset('assets/img/figure/user3.jpg')}}" alt="student">
               @else
               <img src="{{asset('assets/img/figure/user2.jpg')}}" alt="student">
               @endif

           </div>
           <div class="col-lg-4">

                <table class="table display data-table text-nowrap">

                    <tbody>
                        <tr>
                            <td><b>Nom :</b>{{$user->nom}}</td>
                            <td><b>Prenoms :</b>{{$user->prenoms}}</td>
                        </tr><br>
                        <tr>
                            <td><b>Date de Naissance :</b>{{$user->datenaissance}}</td>
                            <td><b>groupesanguin:</b>{{$user->groupesanguin}}</td>
                        </tr>

                        <tr>
                            <td><b>Sexe :</b>{{$user->sexe}}</td>
                            <td><b>Telephone:</b>{{$user->telephone}}</td>
                        </tr>



                    </tbody>
                </table>

           </div>
           <div class="col-lg-4">
            <table class="table display data-table text-nowrap">

                <tbody>
                    <tr>
                        <td><b>Institut:</b>{{$user->institut}}</td>
                        <td><b>Niveau :</b>{{$user->niveau}}</td>
                    </tr><br>




                </tbody>
            </table>
           </div>
           <div class="col-lg-4">

           </div>
           <div class="col-lg-3">

           </div>
           <div class="col-lg-3">

           </div>
           <div class="col-lg-2" style="height: 2cm;">

           </div>
        </div>

        <div class="table-responsive">
            <table class="table display data-table text-nowrap">
                <thead>
                    <tr>
                        <th>Matiere</th>
                        <th>note1</th>
                        <th>note2</th>
                        <th>Moyenne</th>
                        <th>status </th>
                    </tr>
                </thead>
                <tbody>
            @foreach ($notes as $note)
            <tr>

                <td> <b>{{$note->intitule}}</b></td>
                <td> <b>{{$note->note1}}</b> </td>
                <td> <b>{{$note->note2}}</b> </td>
                <td> <b>{{($note->note1+$note->note2)/2}}</b> </td>
                <td> <b>{{$note->status}}</b></td>

            </tr>

            @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <div class="d-print-none">
        <div class="float-end">
            <a href="javascript:window.print()" class="btn-fill-lg bg-blue-dark btn-hover-yellow"><i class="fa fa-print"> Impression</i></a>
        </div>
    </div>
</div>
@endsection
