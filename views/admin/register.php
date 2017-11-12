<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Classificados</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php $this->asset('admin/vendor/bootstrap/css/bootstrap.min.css '); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php $this->asset('admin/vendor/metisMenu/metisMenu.min.css '); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php $this->asset('admin/dist/css/sb-admin-2.css '); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php $this->asset('admin/vendor/font-awesome/css/font-awesome.min.css '); ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Cadastro de Usuario</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="<?php echo BASE_URL.'admin/createuser' ?>">
                            <fieldset>
                                
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nome" name="nome" type="text" autofocus>
                                    <small class="text-danger"><?php echo (isset($nome) ? $nome : ''); ?></small>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email">
                                    <small class="text-danger"><?php echo (isset($email) ? $email : ''); ?></small>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="senha" type="password" value="">
                                    <small class="text-danger"><?php echo (isset($senha) ? $senha : ''); ?></small>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <small class="text-center text-danger"><?php echo (isset($erros) ? $erros : ''); ?></small>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Cadastrar</button>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <a href="<?php echo BASE_URL.'admin/login' ?>">Já tenho uma conta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php $this->asset('admin/vendor/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php $this->asset('admin/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php $this->asset('admin/vendor/metisMenu/metisMenu.min.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php $this->asset('admin/dist/js/sb-admin-2.js'); ?>"></script>

</body>

</html>
