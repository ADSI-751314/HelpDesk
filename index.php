<!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Mesa de Ayuda</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="view/css/layout.css">
        <script type="application/javascript" language="javascript" src="view/js/jquery.js"></script>
    </head>
    <body>
        <div class="logo"></div>

        <div class="content">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="view/forms/frm_reportes.php">Reportes</a></li>
                        <li><a href="view/forms/frm_garantias.php">Garantias</a></li>
                        <li><a href="view/forms/frm_inventario_tecnologico.php">Inventario</a></li>
                        <li><a href="view/forms/frm_base_conocimiento.php">Base Conocimiento</a></li>
                    </ul>
                </nav>

            </div>
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
