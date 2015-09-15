<?php
session_start();

if(!$_SESSION['username']){
    echo '<meta http-equiv="refresh" content="0; url=view/forms/frm_login.php" />';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HelpDesk</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="view/css/general.css">
        <link rel="shortcut icon" href="view/img/favicon.png">
        <script type="application/javascript" language="javascript" src="view/js/jquery.js"></script>
        <script type="text/javascript" src="view/js/general.js"></script>
        <link rel="stylesheet" href="view/css/font-awesome.min.css">
    </head>
    <body class="layout">
        <aside class="layout-menu">
            <header class="user">
                <div id="usr-photo"></div>
                <div id="usr-name"><p>Nombre del usuario</p></div>
                <ul class="list usr-options">
                    <li><a href=""><i class="fa fa-wrench"></i><p>Configurar</p></a></li>
                    <li><a href="controller/login_controller.php?petition=logout"><i class="fa fa-power-off"></i><p>Cerrar Sesión</p></a></li>
                </ul>
            </header>
            <nav>
                <ul class="list side-menu">
                    <li>
                        <a href="/HelpDesk/view/forms/frm_reportes.php" class="loadfrm">
                            <i class="fa fa-pie-chart fa-2x left"></i>
                            <p class="side-mnu-text">Reportes</p>
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="list submenu">
                            <li>Create</li>
                            <li>Read</li>
                            <li>Update</li>
                            <li>Delete</li>
                        </ul>
                    </li>
                    <li>
                        <a href="/HelpDesk/view/forms/frm_garantias_guardar.php" class="loadfrm">
                            <i class="fa fa-shield fa-2x left"></i>
                            <p class="side-mnu-text">Garantias</p>
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="list submenu">
                            <li>Create</li>
                            <li>Read</li>
                            <li>Update</li>
                            <li>Delete</li>
                        </ul>
                    </li>
                    <li>
                        <a href="/HelpDesk/view/forms/frm_inventario_tecnologico.php" class="loadfrm">
                            <i class="fa fa-check-square fa-2x"></i>
                            <p class="side-mnu-text">Inventario</p>
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="list submenu">
                            <li>Create</li>
                            <li>Read</li>
                            <li>Update</li>
                            <li>Delete</li>
                        </ul>
                    </li>
                    <li>
                        <a href="/HelpDesk/view/forms/frm_base_conocimiento.php" class="loadfrm">
                            <i class="fa fa-database fa-2x"></i>
                            <p class="side-mnu-text">Base Conocimiento</p>
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="list submenu">
                            <li>Create</li>
                            <li>Read</li>
                            <li>Update</li>
                            <li>Delete</li>
                        </ul>
                    </li>
                </ul>
                <p>Página en construcción...</p>
            </nav>
        </aside>

        <div class="content">
            <h1>Contenido del proyecto</h1>        
            <?php
            // mensaje de prueba para visualizar la vinculacion con la base de datos
            require_once 'model/conexion_class.php';
            $conexion = new conexion_class();
            $conexion->conexion();
            ?>
        </div>    
    </body>
</html>