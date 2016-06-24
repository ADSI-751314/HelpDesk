<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EQUIPOS</title>
    </head>
    <body>
        <nav class="navbar navbar-inverse"  >
            <div class="container">
                
                <h3 style="color:white; position:absolute; right:350px ">EQUIPOS TECNOLOGICOS</h3>
                
        </nav>
        <div class="container">
            <div class="starter-template">
                <h1>CRUD EQUIPOS</h1>
                <p class="lead">CONTENIDO DE EQUIPOS</p>
                
                <button type="button" onclick="Nuevo()" class="btn btn-primary btn-lg" >
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Nuevo
                </button> 
               
                
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Lista de Equipos</div>
                <table class="table" style="background-color:#C4BFBF">
                    <thead style="background-color:#5085DA; color:white ">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Dependencia</th>
                            <th>Tipo Equipo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                        require("../../model/Conexion_equ.php");
                        $con = Conectar();
                        $sql = "select pk_equ_codigo, equ_nombre, equ_precio, dep_nombre, tip_nombre, pk_tip_codigo, pk_dep_codigo from equipos e inner join tipos_equipos t on t.pk_tip_codigo = fk_tip_codigo "
                                . "inner join dependencias d on d.pk_dep_codigo = e.fk_dep_codigo";
                        $stmt = $con->prepare($sql);
                        $result = $stmt->execute();
                        $rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
                        foreach ($rows as $row) {
                            ?>   
                 

                            <tr>
                                <td> <?php print($row->pk_equ_codigo); ?> </td>
                                <td><?php print($row->equ_nombre); ?></td>
                                <td><?php print($row->equ_precio); ?></td>
                                <td><?php print($row->dep_nombre); ?></td>
                                <td><?php print($row->tip_nombre); ?></td>
                                <td>
                                    <div class="btn-group">
                                        <div class="starter-template">
                                        <a class="btn btn-danger"onclick="eliminar('<?php print($row->pk_equ_codigo); ?>')"><i class="glyphicon glyphicon-trash"></i></a>
                                        <a class="btn btn-primary" onclick="Actualizar('<?php print($row->pk_equ_codigo); ?>','<?php print($row->equ_nombre); ?>','<?php print($row->equ_precio); ?>','<?php print($row->pk_dep_codigo); ?>','<?php print($row->pk_tip_codigo); ?>');"><i class="glyphicon glyphicon-edit"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>



                            <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
            
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Nuevo Usuario</h4>
                        </div>
                        <form role="form" action="" name="frmEquipos" onsubmit="Registrar(accion);
                                return false">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Codigo</label>
                                    <input id="codigo" class="form-control" required="">
                                </div>

                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input id="nombres" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Precio</label>
                                    <input id="precio" class="form-control" required>
                                </div>

                                 <div class="form-group">
                                    <label>Dependencia</label>
                                <select id="Tipo_Dependencia" class="form-control input-sm">
                                                <option disabled="disabled" selected="selected">SELECCIONE---></option>
                                                <option value="1">Administrador</option>
                                                <option value="2">Gerencia</option>
                                                <option value="3">Empleado</option>
                                </select>
                                </div>
                                
                                
                                
                                
                                <div class="form-group">
                                    <label>Tipo de Equipo</label>
                                <select id="Tipo_Equipo" class="form-control input-sm">
                                                <option disabled="disabled" selected="selected">SELECCIONE---></option>
                                                <option value="1">soportes</option>
                                                <option value="2">Computador</option>
                                                <option value="3">portatil</option>
                                </select>
                                </div>
                                
                                
                             

                                <button type="submit" class="btn btn-info btn-lg">
                                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Registrar
                                </button>

                            </div>
                        </form>
                        <div class="modal-footer">
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
     
        
      
        
        </script>
    </body>
</html>