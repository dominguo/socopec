@extends('layouts.app')
@section('content')
<div class="container">
    <ol class="breadcrumb">
        <li><a href="{{ url('/GestionVehicule') }}">Gestion des véhicules</a></li>
        <li class="active">Véhicule n° {{ $vehicules->id_vehicule }}</li>
    </ol>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Modification d'un vehicules</div>

                <div class="panel-body">
                    <div class="col-md-6">
                      <form class="form-horizontal" method="POST" action="{{ url('/GestionVehiculeModifier') }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="id_vehicule" value="{{ $vehicules->id_vehicule }}">
                        <div  class="form-group {{ $errors->has('nom') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Nom</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nom" value="{{ $vehicules->nom_vehicule }}">
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
                                    <option value="{{ $vehicules->model_vehicule }}">{{ $vehicules->model_vehicule }}</option>
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
                                <input type="text" class="form-control" name="date_fabrication" value="{{ $vehicules->date_fabrication }}">
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
                                <input type="text" class="form-control" name="hauteur" value="{{ $vehicules->hauteur }}">
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
                                <input type="text" class="form-control" name="largeur" value="{{ $vehicules->largeur }}">
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
                                <input type="text" class="form-control" name="poids" value="{{ $vehicules->poids }}">
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
                                    <option value="{{ $vehicules->id_statut }}">{{ $vehicules->libelle_statut }}</option>
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
                                    <option value="{{ $vehicules->id_agence }}">{{ $vehicules->nom_agence }}</option>
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
                    <div class="col-md-6">                        
                        <script src="http://maps.google.com/maps/api/js?key=AIzaSyAnmayXd-e-0yqCH8KQhlNnldfcbDSBJEg&.js"></script>
                        <div id="map_canvas"></div>
                    </div>
                        <style>#map_canvas {
                            height: 300px;
                        }</style>
                        <script>
                        $(document).ready(function () {
                            var map;
                            var elevator;

                            var myOptions = {
                                zoom: 1,
                                center: new google.maps.LatLng(0, 0),
                                mapTypeId: 'terrain'
                            };
                            map = new google.maps.Map($('#map_canvas')[0], myOptions);

                            var addresses = ['{{$vehicules->ville}} , {{$vehicules->adresse_1}}'];

                            for (var x = 0; x < addresses.length; x++) {
                                $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address='+addresses[x]+'&sensor=false', null, function (data) {
                                    var p = data.results[0].geometry.location
                                    var latlng = new google.maps.LatLng(p.lat, p.lng);
                                    var marker = new google.maps.Marker({
                                        position: latlng,
                                        map: map
                                    });
                                    map.setZoom(17);
                                    map.panTo(marker.position);
                                });
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
