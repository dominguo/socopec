@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Gestion des statuts</div>

                <div class="panel-body">
                    <form action="{{ url('/photo/add/') }}/{{ $vehicule }}" method="post" enctype="multipart/form-data" class="alert alert-info">
                        {{ csrf_field() }}
                        <input type="file" name="photo" class="col-md-11">
                        <input type="submit" class="btn-primary" class="col-md-1">
                    </form>
                    <hr><h4>Liste des photos</h4><hr>
                    <table class="table table-striped task-table">
                        <thead>
                            <th>Nom Statut</th>
                            <th style="text-align:right">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($photos as $p)
                                <tr>
                                    <td class="table-text">
                                        <div>{{ $p->nom }}</div>
                                    </td>
                                    <td style="text-align:right">
                                        <a href="{{ url('/photo/supprimer') }}/{{ $vehicule }}/{{ $p->id }}" >Supprimer</a>
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
