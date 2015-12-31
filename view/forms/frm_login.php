<link rel="stylesheet" type="text/css" href="/HelpDesk/view/css/login.css">
<body id="login-body">
    <div id="bgcolor">
        <div class="container">
            <form id="frm-login" name="login" action="controller/login_controller.php" method="POST" autocomplete="off">
                <h1 class="frm-login-heading">Iniciar Sesión</h1>
                <div class="row">
                    <div class="col-xs-12 col-md-12 td-alert">
                        <div class="alert" role="alert" id="alert"></div>
                    </div>
                </div>
                <div class="txtBox row">
                    <div class="col-xs-2 col-md-3 td-fa">
                        <i class="fa fa-user fa-3x"></i>
                    </div>
                    <div class="col-xs-10 col-md-9 td">
                        <input class="txt-login form-control" type="text" name="txtUsername" id="txtUsu" placeholder="Nombre de usuario" maxlength="30"/>
                    </div>
                </div>
                <div class="txtBox row">
                    <div class="col-xs-2 col-md-3 td-fa">
                        <i class="fa fa-unlock-alt fa-3x"></i>
                    </div>
                    <div class="col-xs-10 col-md-9 td">
                        <input class="txt-login form-control" type="password" name="txtPassword" id="txtPass" placeholder="Contraseña" maxlength="20"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-12 td btn-container">
                        <input class="btn" type="submit" name="btnLogin" id="btn-login" value="INGRESAR" />
                    </div>
                </div>
            </form>
        </div>
    <script type="text/javascript" src="/HelpDesk/view/js/login.js"></script>
</body>
