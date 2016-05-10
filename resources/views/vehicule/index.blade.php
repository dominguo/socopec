@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Gestion des vehicules</div>

                <div class="panel-body">
    
                 <a class="btn btn-primary pull-right" href="{{ url('/GestionVehiculeAjouter') }}"><i class="fa fa-plus"></i> Ajouter un vehicule</a>
                    <table class="table table-striped task-table">
                        <thead>
                            <th>Nom Statut</th>
                            <th>Modèle</th>
                            <th>Date fab.</th>
                            <th>Hauteur</th>
                            <th>Largeur</th>
                            <th>Poids</th>
                            <th>Statut</th>
                            <th>Agence</th>
                            <th>Code postal</th>
                            <th>Ville</th>
                            
                                
                            <th style="text-align:right">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($vehicules as $s)
                                <tr>
                                    <td class="table-text">
                                        <div>{{ $s->nom_vehicule }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $s->model_vehicule }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $s->date_fabrication }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $s->hauteur }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $s->largeur }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $s->poids }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $s->libelle_statut }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $s->nom_agence }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $s->code_postal }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $s->ville }}</div>
                                    </td>
                                    
                                    <td style="text-align:right">
                                        <form action="{{ url('/GestionVehiculeSupprimer') }}/{{ $s->id_vehicule }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('GET') }}
                                            <button class="btn btn-danger" style="float:right;margin-left: 4px;">Supprimer</button>
                                        </form>
                                        <form action="{{ url('/GestionVehiculeModifier') }}/{{ $s->id_vehicule }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('GET') }}
                                            <button class="btn btn-defaut">Modifier</button>
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
</div>
    
@endsection
