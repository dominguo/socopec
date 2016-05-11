@extends('layouts.app')

@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ url('/GestionProbleme') }}">Gestion des problèmes</a></li>
        <li class="active">Problème n° {{ $problemes->id }}</li>
    </ol>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modification/Consultation d'un problème</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/GestionProblemeModifier') }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id_probleme" value="{{ $problemes->id }}">
                        <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Commentaire</label>
                            <div class="col-md-6">
                                <textarea name="commentaire">{{ $problemes->commentaire }}</textarea>
                            </div>
                        </div>                        

                        <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">En cours ?</label>
                            <div class="col-md-6">
                                @if ($problemes->active == 0)
                                <label>Oui
                                    <input type="radio" name="active" value="1" checked="checked">
                                </label>
                                <label>Non
                                    <input type="radio" name="active" value="0" >
                                </label>
                                @else
                                <label>Oui
                                    <input type="radio" name="active" value="1">
                                </label>
                                <label>Non
                                    <input type="radio" name="active" value="0" checked="checked">
                                </label>
                                @endif  
                            </div>
                        </div>                        



                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Vehicule</label>
                            <div class="col-md-6">
                                <select name="vehicule_id" class="form-control">
                                    @foreach ($vehicules as $v)
                                    @if($v->id == $problemes->vehicule_id) checked="checked 
                                    <option value="{{ $v->id }}" selected="selected">{{ $v->nom }} - {{ $v->model }} </option>   
                                    @else
                                    <option value="{{ $v->id }}" >{{ $v->nom }} - {{ $v->model }} </option>   
                                    @endif

                                    @endforeach
                                </select>
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
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
