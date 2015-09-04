<?php include 'view/forms/head.php';?>
    <body>
        <header>
            <div class="app-logo"></div>
            <div class="title-box"><h1><!---Sistema de información para la prestación de servicios tecnológicos con base en la metodología ITIL v3--></h1></div>
            <div class="user">
                <div id="usr-photo"></div>
                <div id="usr-name"><p>Nombre del usuario</p></div>
            </div>
        </header>
        
        <nav>
            <ul class="side-menu">
                <li>
                    <a href="/HelpDesk/view/forms/frm_reportes.php">
                        <img src="view/img/reports.png" class="side-mnu-icon">
                        <p class="side-mnu-text">Reportes</p>
                    </a>
                </li>
                <li>
                    <a href="/HelpDesk/view/forms/frm_garantias.php">
                        <img src="view/img/warranty.png" class="side-mnu-icon">
                        <p class="side-mnu-text">Garantias</p>
                    </a>
                </li>
                <li>
                    <a href="/HelpDesk/view/forms/frm_inventario_tecnologico.php">
                        <img src="view/img/inventory.png" class="side-mnu-icon">
                        <p class="side-mnu-text">Inventario</p>
                    </a>
                </li>
                <li>
                    <a href="/HelpDesk/view/forms/frm_base_conocimiento.php">
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
