@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Ajout d'un vehicule</div>

                <div class="panel-body">
                      <form class="form-horizontal" method="POST" action="{{ url('/GestionVehiculeAjouter') }}">
                        {!! csrf_field() !!}
                       
                        <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Nom</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nom" value="{{ old("nom") }}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Model</label>
                            <div class="col-md-6">
                                <select class="form-control" name="model">
                                    <option value="Citadines">Citadines</option>
                                    <option value="Moyennes berlines">Moyennes berlines</option>
                                    <option value="Grandes berlines">Grandes berlines</option>
                                    <option value="Break">Break</option>
                                    <option value="Monospaces">Monospaces</option>
                                    <option value="4x4, SUV et Crossover">4x4, SUV et Crossover</option>
                                    <option value="Coupés">Coupés</option>
                                    <option value="Cabriolets">Cabriolets</option>
                                    <option value="Utilitaires">Utilitaires</option>
                                </select>
                            </div>
                        </div>                        
                        
                        <div class="form-group{{ $errors->has('date_fabrication') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Date fabrication</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="date_fabrication" value="">
                                @if ($errors->has('date_fabrication'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_fabrication') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        
                        
                        <div class="form-group{{ $errors->has('hauteur') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Hauteur</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="hauteur" value="">
                                @if ($errors->has('hauteur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hauteur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                       
                        
                        <div class="form-group{{ $errors->has('largeur') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Largeur</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="largeur" value="">
                                @if ($errors->has('largeur'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('largeur') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        
                        
                        <div class="form-group{{ $errors->has('poids') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Poids</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="poids" value="">
                                @if ($errors->has('poids'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('poids') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        
                                                
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Statut</label>
                            <div class="col-md-6">
                                <select name="statut_id" class="form-control">
                                    @foreach ($statuts as $statut)
                                    <option value="{{ $statut->id }}">{{ $statut->libelle }}</option>                                    
                                    @endforeach
                                </select>
                            </div>
                        </div>                        
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Agence</label>
                            <div class="col-md-6">
                                <select name="agence_id" class="form-control">
                                    @foreach ($agences as $agence)
                                    <option value="{{ $agence->id }}">{{ $agence->nom }} - {{ $agence->code_postal }} - {{ $agence->ville }} - </option>                                    
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
