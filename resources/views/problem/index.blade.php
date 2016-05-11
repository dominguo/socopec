@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Gestion des problèmes
            <a class="btn btn-primary pull-right" href="{{ url('/GestionProblemeAjouter') }}"><i class="fa fa-plus"></i> Ajouter un problème</a>

        </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-12">

        <table class="table table-striped task-table">
            <thead>
            <th>Déscription du problème</th>
            <th>Actif</th>
            <th style="text-align:right">Action</th>
            </thead>
            <tbody>
                @foreach ($problemes as $s)
                <tr>
                    <td class="table-text">
                        <div>{{ $s->commentaire }}</div>
                    </td>
                    <td class="table-text">
                        <div>
                            @if ($s->active == 0)
                            Non
                            @else
                            Oui
                            @endif
                        </div>
                    </td>
                    <td style="text-align:right">
                        <form action="{{ url('/GestionProblemeModifier') }}/{{ $s->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('GET') }}
                            <button class="btn btn-defaut">Modifier/Consulter</button>
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
