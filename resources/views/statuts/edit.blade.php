@extends('layouts.app')

@section('content')
@foreach ($statuts as $statut)
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ url('/statuts') }}">Gestion des statuts</a></li>
        <li class="active">Statut n° {{ $statut->id }}</li>
    </ol>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modification d'un statut</div>

                <div class="panel-body">
                       
                        
                      <form class="form-horizontal" method="POST" action="{{ url('/GestionStatutsModifier') }}">
                        {!! csrf_field() !!}
                       <input type="hidden" name="id_statut" value="{{$statut->id}}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Nom statut</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{$statut->libelle}}">
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
                                    <i class="fa fa-btn fa-user"></i> Modifier
                                </button>
                            </div>
                        </div>
                    </form>    
                    @endforeach
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
