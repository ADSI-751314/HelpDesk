<!DOCTYPE html>
<html>
    <head>
        <title>Login Help Desk</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/login.css">
        <link rel="shortcut icon" href="../img/favicon.png">
        <link rel="stylesheet" href="/HelpDesk/view/css/font-awesome.min.css">
        <script type="text/javascript" src="../js/jquery.js"></script>
        <script type="text/javascript" src="../js/general.js"></script>
    </head>
    <body class="login-body">
        <section class="login-container">
            <article class="login-article">
                <h1>Iniciar Sesión</h1>
                <form name="frmLogin" action="../../controller/login_controller.php?petition=validalogin" method="POST" autocomplete="off">
                    <table width="100%" id="frm-table">
                        <tr>
                            <td align="center">
                                <div class="txtBox">
                                    <i class="fa fa-user fa-3x"></i>
                                    <input class="txt-login" type="text" name="username" placeholder="Nombre de usuario" maxlength="30" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <div class="txtBox">
                                    <i class="fa fa-unlock-alt fa-3x"></i>
                                    <input class="txt-login" type="password" name ="password" placeholder="Contraseña" maxlength="20" />
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
</html>
