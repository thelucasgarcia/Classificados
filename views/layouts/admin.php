<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Painel Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php $this->asset('admin/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php $this->asset('admin/vendor/metisMenu/metisMenu.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php $this->asset('admin/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php $this->asset('admin/vendor/morrisjs/morris.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php $this->asset('admin/vendor/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="<?php $this->asset('admin/vendor/jquery/jquery.min.js '); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php $this->asset('admin/vendor/bootstrap/js/bootstrap.min.js '); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php $this->asset('admin/vendor/metisMenu/metisMenu.min.js '); ?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php $this->asset('admin/vendor/raphael/raphael.min.js '); ?>"></script>
    <script src="<?php $this->asset('admin/vendor/morrisjs/morris.min.js '); ?>"></script>
    <script src="<?php $this->asset('admin/data/morris-data.js '); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php $this->asset('admin/dist/js/sb-admin-2.js '); ?>"></script>
</head>

<body>

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
                <a class="navbar-brand" href="index.html">Classificados</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php echo (isset($_SESSION['auth']['nome']) ? $_SESSION['auth']['nome'] : '') ?> <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php $this->url('admin/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
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
                        <li>
                            <a href="<?php $this->url('admin') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php $this->url('admin/categorias') ?>"><i class="fa fa-dashboard fa-fw"></i> Categorias</a>
                        </li>
                        <li>
                            <a href="<?php $this->url('admin/anuncios') ?>"><i class="fa fa-dashboard fa-fw"></i> Anuncios</a>
                        </li>
                        <li>
                            <a href="<?php $this->url('admin/tags') ?>"><i class="fa fa-dashboard fa-fw"></i> Tags</a>
                        </li>
                        <li>
                            <a href="<?php $this->url('admin/usuarios') ?>"><i class="fa fa-dashboard fa-fw"></i> Usuarios</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

 

</body>

</html>
