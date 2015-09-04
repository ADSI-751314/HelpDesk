<?php include 'view/forms/head.php';?>
    <body>
        <header>
            <div class="app-logo"></div>
            <div class="title-box"><h1>Sistema de información para la prestación de servicios tecnológicos con base en la metodología ITIL v3</h1></div>
            <div class="user">
                <div id="usr-photo"></div>
                <div id="usr-name"></div>
            </div>
        </header>
        
        <nav>
            <ul class="menu">
                <li><a href="/HelpDesk/view/forms/frm_reportes.php">Reportes</a></li>
                <li><a href="/HelpDesk/view/forms/frm_garantias.php">Garantias</a></li>
                <li><a href="/HelpDesk/view/forms/frm_inventario_tecnologico.php">Inventario</a></li>
                <li><a href="/HelpDesk/view/forms/frm_base_conocimiento.php">Base Conocimiento</a></li>
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
