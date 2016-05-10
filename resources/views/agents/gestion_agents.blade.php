@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Gestion des agents</div>

                <div class="panel-body">
                    <a href="{{ url('/GestionAgentAjouter') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Ajouter</a>
                    <table class="table table-striped task-table">
                        <!-- Table Headings -->
                        <thead>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Mail</th>
                            <th>Numéro tél.</th>
                            <th>Numéro fax.</th>                            
                            <th>Date création</th>                            
                            <th>Date modification</th>
                            <th>Edition</th>
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                            @foreach ($agents as $agent)
                                <tr>
                                    <!-- Task Name -->
                                    <td class="table-text">
                                        <div>{{ $agent->name }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $agent->prenom }}</div>
                                    </td>
                                    <td>
                                       <div>{{ $agent->email }}</div>
                                    </td>

                                    <td>
                                       <div>{{ $agent->num_tel }}</div>
                                    </td>
                                    <td>
                                       <div>{{ $agent->num_fax }}</div>
                                    </td>
                                    <td>
                                       <div>{{ $agent->updated_at }}</div>
                                    </td>
                                    <td>
                                       <div>{{ $agent->created_at }}</div>
                                    </td>
                                    <td>                                        
                                        <form action="{{ url('/GestionAgentModifier') }}/{{ $agent->id }}" method="POST">
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
            </div>
        </div>
    </div>
</div>
@endsection
