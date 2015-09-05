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
    <body>
        <header>
            <div class="app-logo"></div>
            <div class="title-box"><h1><!---Sistema de información para la prestación de servicios tecnológicos con base en la metodología ITIL v3--></h1></div>
            <div class="user">
                <div id="usr-photo"></div>
                <div id="usr-name"><p>Nombre del usuario</p></div>
            </div>
        </header>
        <div class="usr-options">
            <ul class="list">
                <li>
                    <a>
                        <i class="fa fa-cog fa-lg"></i>
                        <p>Configuración</p>
                    </a>
                </li>
                <li>
                    <a>
                        <i class="fa fa-power-off fa-lg"></i>
                        <p><a href="?action=login&petition=unlog">Salir</a></p>
                    </a>
                </li>
            </ul>
        </div>

        <nav>
            <ul class="list side-menu">
                <li>
                    <a href="/HelpDesk/view/forms/frm_reportes.php" class="loadfrm">
                        <img src="view/img/reports.png" class="side-mnu-icon">
                        <p class="side-mnu-text">Reportes</p>
                    </a>
                </li>
                <li>
                    <a href="/HelpDesk/view/forms/frm_garantias.php" class="loadfrm">
                        <img src="view/img/warranty.png" class="side-mnu-icon">
                        <p class="side-mnu-text">Garantias</p>
                    </a>
                </li>
                <li>
                    <a href="/HelpDesk/view/forms/frm_inventario_tecnologico.php" class="loadfrm">
                        <img src="view/img/inventory.png" class="side-mnu-icon">
                        <p class="side-mnu-text">Inventario</p>
                    </a>
                </li>
                <li>
                    <a href="/HelpDesk/view/forms/frm_base_conocimiento.php" class="loadfrm">
                        <img src="view/img/knowledge.png" class="side-mnu-icon">
                        <p class="side-mnu-text">Base Conocimiento</p>
                    </a>
                </li>
            </ul>
        </nav>

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