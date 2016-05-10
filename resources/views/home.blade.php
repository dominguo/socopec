@extends('layouts.app')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tableau de bord</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">

                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>Prêt(s)</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Voir Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>Location(s)</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Voir Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>En exposition</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Voir Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Problème(s) en cours</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                        <div class="col-lg-4">
                                    <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Dernières voitures prêtées
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-car"></i> Peugeot 208<br>
                                                        <i class="glyphicon glyphicon-user"></i> M. Du Bois Paul
                                                        <span class="pull-right text-muted small"><em>4 minutes</em>
                                                        </span>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-car"></i> Kangoo<br>
                                                        <i class="glyphicon glyphicon-user"></i> M. BEN YOUSSEF Muss
                                                        <span class="pull-right text-muted small"><em>12 minutes</em>
                                                        </span>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-car"></i> Opel astra <br>
                                                        <i class="glyphicon glyphicon-user"></i> Mme Julie Malau
                                                        <span class="pull-right text-muted small"><em>27 minutes</em>
                                                        </span>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-car"></i> Audi A5<br>
                                                        <i class="glyphicon glyphicon-user"></i>  M. Jean Michelle Kazan
                                                        <span class="pull-right text-muted small"><em>43 minutes</em>
                                                        </span>
                                                    </a>
                                                <!-- /.list-group -->
                                                <a href="#" class="btn btn-default btn-block">Voir plus</a>
                                            </div>
                                        <!-- /.panel-body -->
                                        </div>
                                    </div>
                        <!-- /.col-lg-4 -->
                        </div>
                        <div class="col-lg-4">
                                    <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Dernières voitures en location
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-car"></i> Peugeot 208<br>
                                                        <i class="glyphicon glyphicon-user"></i> M. Du Bois Paul
                                                        <span class="pull-right text-muted small"><em>4 minutes</em>
                                                        </span>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-car"></i> Kangoo<br>
                                                        <i class="glyphicon glyphicon-user"></i> M. BEN YOUSSEF Muss
                                                        <span class="pull-right text-muted small"><em>12 minutes</em>
                                                        </span>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-car"></i> Opel astra <br>
                                                        <i class="glyphicon glyphicon-user"></i> Mme Julie Malau
                                                        <span class="pull-right text-muted small"><em>27 minutes</em>
                                                        </span>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-car"></i> Audi A5<br>
                                                        <i class="glyphicon glyphicon-user"></i>  M. Jean Michelle Kazan
                                                        <span class="pull-right text-muted small"><em>43 minutes</em>
                                                        </span>
                                                    </a>
                                                <!-- /.list-group -->
                                                <a href="#" class="btn btn-default btn-block">Voir plus</a>
                                            </div>
                                        <!-- /.panel-body -->
                                        </div>
                                    </div>
                        <!-- /.col-lg-4 -->
                        </div>
                        <div class="col-lg-4">
                                    <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Dernières voitures en expositions
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body">
                                                <div class="list-group">
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-car"></i> Peugeot 208<br>
                                                        <i class="fa fa-location-arrow"></i> 1, Rue des tondes, Nantes
                                                        <span class="pull-right text-muted small"><em>4 minutes</em>
                                                        </span>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-car"></i> Kangoo<br>
                                                        <i class="fa fa-location-arrow"></i> 1, Avenue Georges, Paris
                                                        <span class="pull-right text-muted small"><em>12 minutes</em>
                                                        </span>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-car"></i> Opel astra <br>
                                                        <i class="fa fa-location-arrow"></i> 1, Rue jean ka, Lyon
                                                        <span class="pull-right text-muted small"><em>27 minutes</em>
                                                        </span>
                                                    </a>
                                                    <a href="#" class="list-group-item">
                                                        <i class="fa fa-car"></i> Audi A5<br>
                                                        <i class="fa fa-location-arrow"></i>  1, Rue des ponts, Metz
                                                        <span class="pull-right text-muted small"><em>43 minutes</em>
                                                        </span>
                                                    </a>
                                                <!-- /.list-group -->
                                                <a href="#" class="btn btn-default btn-block">Voir plus</a>
                                            </div>
                                        <!-- /.panel-body -->
                                        </div>
                                    </div>
                        <!-- /.col-lg-4 -->
                        </div>


                    <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-bell fa-fw"></i> Derniers problèmes signalé
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="list-group">
                                        <a href="#" class="list-group-item">
                                            <i class="glyphicon glyphicon-alert"></i> Problèmes 1
                                            <span class="pull-right text-muted small"><em>4 minutes</em>
                                            </span>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="glyphicon glyphicon-alert"></i> Carte grise à refaire
                                            <span class="pull-right text-muted small"><em>12 minutes</em>
                                            </span>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="glyphicon glyphicon-alert"></i> Contrôle technique périmé
                                            <span class="pull-right text-muted small"><em>27 minutes</em>
                                            </span>
                                        </a>
                                        <a href="#" class="list-group-item">
                                            <i class="glyphicon glyphicon-alert"></i> Pneus à changer
                                            <span class="pull-right text-muted small"><em>43 minutes</em>
                                            </span>
                                        </a>
                                    <!-- /.list-group -->
                                    <a href="#" class="btn btn-default btn-block">Voir plus</a>
                                </div>
                                <!-- /.panel-body -->
                                </div>
                            </div>
                    </div>

            </div>
            <!-- /.row -->
@endsection
