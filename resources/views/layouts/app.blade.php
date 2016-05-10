<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- jQuery -->
    <script src="/assets/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>

    <title>SOCOPEC</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="/assets/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/assets/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body id="app-layout">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">SOCOPEC</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">                    
                     @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-sign-in"></i> Connection</a></li>
                        <li><a href="{{ url('/register') }}"><i class="fa fa-btn fa-plus"></i> Nouvel utilisateur</a></li>
                    @else
                        <li class="dropdown">
                            <li><a href="#">Bonjour {{ Auth::user()->name }} !</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Déconnection</a></li>
                        </li>
                    @endif
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-sign-in"></i> Se connecter</a></li>
                            
                        @else
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li><a href="{{ url('/home') }}"><i class="fa fa-dashboard fa-fw"></i> Tableau de bord</a>
                            </li>
                            <li>
                                <a href="{{ url('/GestionVehicule') }}"><i class="fa fa-car"></i> Gestion des Véhicules</a>
                            </li>
                            <li>
                                <a href="{{ url('/GestionAgence') }}"><i class="fa fa-map-marker"></i> Gestion des Agences</a>
                            </li>
                            <li>
                                <a href="{{ url('/GestionAgent') }}"><i class="fa fa-group"></i> Gestion des Agents</a>
                            </li>
                            <li>
                                <a href="{{ url('/statuts') }}"><i class="glyphicon glyphicon-flag"></i> Gestion des Statuts</a>
                            </li>
                        @endif
                    </ul>
                    
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <br/>
                 @yield('content')
            </div>
        
        </div>
    </div>
    
    
    <!-- Metis Menu Plugin JavaScript -->
    <script src="/assets/js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/assets/js/raphael-min.js"></script>
    <script src="/assets/js/morris.min.js"></script>
    <script src="/assets/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/assets/js/sb-admin-2.js"></script>

</body>

</html>