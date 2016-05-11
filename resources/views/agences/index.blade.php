@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Gestion des agences
            <a class="btn btn-primary pull-right" href="{{ url('/GestionAgenceAjouter') }}"><i class="fa fa-plus"></i> Ajouter une agence</a>

        </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped task-table">
            <thead>
            <th>Nom</th>
            <th>Code Postal</th>
            <th>Ville</th>
            <th>Tel.</th>
            <th>Fax</th>
            <th>Date création</th>
            <th>Date de modification</th>
            <th style="text-align:right">Action</th>
            </thead>
            <tbody>
                @foreach ($agences as $s)
                <tr>
                    <td class="table-text">
                        <div>{{ $s->nom }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $s->code_postal }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $s->ville }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $s->num_tel }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $s->num_fax }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $s->created_at }}</div>
                    </td>
                    <td class="table-text">
                        <div>{{ $s->updated_at }}</div>
                    </td>


                    <td style="text-align:right">
                        <form action="{{ url('/GestionAgenceSupprimer') }}/{{ $s->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('GET') }}
                            <button class="btn btn-danger" style="float:right;margin-left: 4px;">Supprimer</button>
                        </form>
                        <form action="{{ url('/GestionAgenceModifier') }}/{{ $s->id }}" method="POST">
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
