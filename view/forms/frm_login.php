<body class="login-body">
    <section class="login-container">
        <article class="login-article">
            <h1>Iniciar Sesión</h1>
            <form name="frmLogin" action="controller/login_controller.php?petition=validalogin" method="POST" autocomplete="off">
                <table width="100%" id="frm-table">
                    <tr>
                        <td align="center">
                            <div class="txtBox">
                                <i class="fa fa-user fa-3x"></i>
                                <input class="txt-login" type="text" name="txtUsername" placeholder="Nombre de usuario" maxlength="30" required/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <div class="txtBox">
                                <i class="fa fa-unlock-alt fa-3x"></i>
                                <input class="txt-login" type="password" name ="txtPassword" placeholder="Contraseña" maxlength="20" required/>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td id="btn-td">
                            <input type="submit" name="btnLogin" id="btn-login" value="Ingresar" />
                        </td>
                    </tr>
                </table>
            </form>
        </article>
    </section>
</body>
