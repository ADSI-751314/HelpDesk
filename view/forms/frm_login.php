<link rel="stylesheet" type="text/css" href="/HelpDesk/view/css/login.css">
<body id="login-body">
    <div id="bgcolor">
        <div class="container" id="login-container">
            <h1 class="title">Iniciar Sesión</h1>
            <form name="frmLogin" action="controller/login_controller.php?petition=validalogin" method="POST" autocomplete="off">
                <div class="row">
                    <div class="col-xs-12 col-md-12 td-alert">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Nombre de usuario o contraseña incorrecta!
                        </div>
                    </div>
                </div>
                <div class="txtBox row">
                    <div class="col-xs-2 col-md-3 td-fa">
                        <i class="fa fa-user fa-3x"></i>
                    </div>
                    <div class="col-xs-10 col-md-9 td">
                        <input class="txt-login form-control" type="text" name="txtUsername" placeholder="Nombre de usuario" maxlength="30" required/>
                    </div>
                </div>
                <div class="txtBox row">
                    <div class="col-xs-2 col-md-3 td-fa">
                        <i class="fa fa-unlock-alt fa-3x"></i>
                    </div>
                    <div class="col-xs-10 col-md-9 td">
                        <input class="txt-login form-control" type="password" name ="txtPassword" placeholder="Contraseña" maxlength="20" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-12 td btn-container">
                        <input class="btn-block" type="submit" name="btnLogin" id="btn-login" value="Ingresar" />
                    </div>
                </div>
            </form>
        </div>
    <script type="text/javascript" src="/HelpDesk/view/js/login.js"></script>
</body>
