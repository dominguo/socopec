@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Gestion des statuts</div>

                <div class="panel-body">
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
                                        <form action="{{ url('/GestionAgentModifier') }}/{{ $s->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('GET') }}
                                            <button class="btn-default">Modifier</button>
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
