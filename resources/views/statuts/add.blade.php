@extends('layouts.app')

@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ url('/GestionVehicule') }}">Gestion des statuts</a></li>
        <li class="active">Ajout</li>
    </ol>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Ajout d'un statut</div>

                <div class="panel-body">
                      <form class="form-horizontal" method="POST" action="{{ url('/GestionStatutsAjouter') }}">
                        {!! csrf_field() !!}
                       
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Nom statut</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Ajouter
                                </button>
                            </div>
                        </div>
                    </form>        
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
