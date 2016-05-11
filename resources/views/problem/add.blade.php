@extends('layouts.app')

@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ url('/GestionProbleme') }}">Gestion des problèmes</a></li>
        <li class="active">Ajout</li>
    </ol>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Ajout d'un problème</div>

                <div class="panel-body">
                      <form class="form-horizontal" method="POST" action="{{ url('/GestionProblemeAjouter') }}">
                        {!! csrf_field() !!}
                       
                        <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Commentaire</label>
                            <div class="col-md-6">
                                <textarea name="commentaire">
                                    {{ old("commentaire") }}
                                </textarea>
                            </div>
                        </div>                        
                        
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Vehicule</label>
                            <div class="col-md-6">
                                <select name="vehicule_id" class="form-control">
                                    @foreach ($vehicule as $v)
                                    <option value="{{ $v->id }}">{{ $v->nom }} - {{ $v->model }} </option>                                    
                                    @endforeach
                                </select>
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
