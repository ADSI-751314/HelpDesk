<link rel="stylesheet" type="text/css" href="view/css/login.css">
<body id="login-body">
    <div id="layer">
        <form id="frm-login" name="login" action="controller/login_controller.php" method="POST" autocomplete="off">
            <h1 class="frm-login-heading">Iniciar Sesión</h1>
            <div class="row row-alert">
                <div id="alert"></div>
            </div>
            <div class="txtBox row">
                <i class="fa fa-user fa-3x"></i>
                <input class="txt-login form-control" type="text" name="txtUsername" id="txtUsu" placeholder="Nombre de usuario" maxlength="30"/>
            </div>
            <div class="txtBox row">
                <i class="fa fa-unlock-alt fa-3x"></i>
                <input class="txt-login form-control" type="password" name="txtPassword" id="txtPass" placeholder="Contraseña" maxlength="20"/>
            </div>
            <div class="row">
                <div class="btn-container">
                    <input class="btn" type="submit" name="btnLogin" id="btn-login" value="Ingresar" />
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="view/js/login.js"></script>
</body>
