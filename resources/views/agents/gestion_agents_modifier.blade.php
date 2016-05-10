@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modifier d'un utilisateur</div>
                <div class="panel-body">
                    @foreach ($agents as $agent)
                    <form class="form-horizontal" method="POST" action="{{ url('/GestionAgentModifier') }}">
                        {!! csrf_field() !!}
                       
                        <input type="hidden" name="id_user" value="{{$agent->id}}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Nom</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{$agent->name}}">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{$agent->email}}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Mot de passe</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">prenom</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="prenom" value="{{$agent->prenom}}">
                                @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>   
                        
                        <div class="form-group{{ $errors->has('num_tel') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Numéro téléphone</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="num_tel" value="{{$agent->num_tel}}">
                                @if ($errors->has('num_tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('num_tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>        
                        
                        <div class="form-group{{ $errors->has('num_fax') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Numéro fax</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="num_fax" value="{{$agent->num_fax}}">
                                @if ($errors->has('num_tel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('num_tel') }}</strong>
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
@endsection
