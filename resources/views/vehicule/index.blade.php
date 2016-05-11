@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Gestion des vehicules
        <a class="btn btn-primary pull-right" href="{{ url('/GestionVehiculeAjouter') }}"><i class="fa fa-plus"></i> Ajouter un vehicule</a>
        
        </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-12">

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
            <th></th>
            <th style="text-align:right" >Action</th>
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
                            <button class="btn btn-danger" style="float:right;margin-left: 4px;"><i class="fa fa-close"></i> Supprimer</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ url('/GestionVehiculeModifier') }}/{{ $s->id_vehicule }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('GET') }}
                            <button class="btn btn-warning"><i class="fa fa-pencil"></i> Modifier</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.table').DataTable({
            "language": {
                "url": "/assets/js/fr_datatable.json"
            }
        });
        
    });
</script>
@endsection
