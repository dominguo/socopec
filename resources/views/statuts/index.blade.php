@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Gestion des statuts
            <a class="btn btn-primary pull-right" href="{{ url('/GestionStatutsAjouter') }}"><i class="fa fa-plus"></i> Ajouter un statut</a>

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
            <th style="text-align:right">Action</th>
            </thead>
            <tbody>
                @foreach ($statuts as $s)
                <tr>
                    <td class="table-text">
                        <div>{{ $s->libelle }}</div>
                    </td>
                    <td style="text-align:right">
                        <form action="{{ url('/GestionStatutsSupprimer') }}/{{ $s->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('GET') }}
                            <button class="btn btn-danger" style="float:right;margin-left: 4px;">Supprimer</button>
                        </form>
                        <form action="{{ url('/GestionStatutsModifier') }}/{{ $s->id }}" method="POST">
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
