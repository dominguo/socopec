@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Ajout d'une agence</div>

                <div class="panel-body">
                      <form class="form-horizontal" method="POST" action="{{ url('/GestionAgenceAjouter') }}">
                        {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Nom de l'agence</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nom" value="">
                                @if ($errors->has('nom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('adresse_1') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Adresse 1</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="adresse_1" value="">
                                @if ($errors->has('adresse_1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adresse_1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        
                        <div class="form-group{{ $errors->has('adresse_2') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Adresse 2</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="adresse_2" value="">
                                @if ($errors->has('adresse_2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adresse_2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        
                        <div class="form-group{{ $errors->has('adresse_3') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Adresse 3</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="adresse_3" value="">
                                @if ($errors->has('adresse_3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adresse_3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('code_postal') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Code postal</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="code_postal" value="">
                                @if ($errors->has('code_postal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('code_postal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('ville') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Ville</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="ville" value="">
                                @if ($errors->has('ville'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('num_tel') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Num. tel.</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="num_tel" value="">
                                @if ($errors->has('num_tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('num_tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('num_fax') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Num. Fax.</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="num_fax" value="">
                                @if ($errors->has('num_fax'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('num_fax') }}</strong>
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
