<!DOCTYPE html>
<html lang="en">
    <?php
     require("../../model/PDOConexionPrueba_class.php");

       $sql = "SELECT pk_equ_codigo, equ_nombre FROM equipos order by equ_nombre asc";
       $sql2 = "SELECT pk_htc_codigo, htc_descripcion FROM historial_cambios order by htc_descripcion asc";
     $result = mysql_query($sql);
     $result2 = mysql_query($sql2);
       
     ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registrar </title>

    </head>
    <body id="body">
        <div class="container" id="contenedor">
            <div class="starter-template">
                <h1>PARTES  DE EQUIPOS</h1>
                <p class="lead">Aplicación de Control de Partes de Equipos</p>
                <button type="button"  id="botonModal" class="btn btn-primary btn-lg btn_partesEquipos" >
                    <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Nuevo Registro
                </button>

                <button type="submit" class="btn btn-info btn-lg btn_partesEquipos " 
                        id="btn-pte-consultarTodo">
                    <span class="glyphicon glyphicon-search "  
                          aria-hidden="true"></span> Consultar Todo

                </button>
            </div></br>
            <div class="container">

                <form class="form-inline">
                    <div class="form-group">
                        <label class="Validacion"></label></br>
                        <label for="txt_codigofiltro">Codigo Parte Equipo:</label>                  
                        <input type="text" class="form-control" id="txt_codigofiltro" placeholder="Ingrese codigo de parte de Equipo">
                        <div class="form-group">
                            <label for="txt_SeralFiltro">Serial:</label>
                            <input type="text" class="form-control" id="txt_SerialFiltro" placeholder="Ingrese el codigo del serial de parte de Equipo">
                        </div>
                        <button type="" class="btn btn-info btn_partesEquipos" id="btn_pte_filtar">
                            <span class="glyphicon glyphicon-filter "  
                                  aria-hidden="true"></span> Filtrar
                        </button>
                    </div>
                </form>
            </div>

            <!--        div para mostar el formulario-->
            <label id="lblRespuestaServidor" class=""></label>


            <div class="panel panel-default frmMostar" id="mostrarFormulario"  >       

            </div>
            <div class="panel panel-default btn_inventario" id="CargarDatos"  ></div>

            <div class="modal fade" id="modal"   class="btn-inventario" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close  btn-circle btn-danger" data-dismiss="modal" aria-hidden="true">
                                <i class="fa fa-times"></i></button>
                            <h4 class="modal-title">Nuevo Historial</h4>
                        </div>
                        <form role="form" action="" name="frmInventario" class="btn-inventario" id="frmPArtesEquipos"  >

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Codigo Partes:</label>
                                    <span class="validacion"></span>
                                    <input id="txtPkCodigo" class="form-control" required="" >
                                </div>

                                <div class="form-group">
                                    <label>Serial:</label>
                                    <input  type="text" id="txtSerial" class="form-control datepicker" required="">
                                </div>

                                <div class="form-group">
                                    <label>Marca:</label>
                                    <input id="txtMarca" type="text" class="form-control" required="">
                                </div>

                                <div class="form-group">
                                    <label for="comment">Descripcion:</label>
                                    <textarea class="form-control" rows="5" id="txtDescripcion"></textarea>
                                </div>


                                <div class="form-group">
                                    <label>Estado: </label>
                                    <input id="txtEstado" class="form-control" required="" title="Debe ingresar">
                                </div>


                                <div class="form-group">
                                    <label>Nombre de Equipo: </label>
                                    <select id="sltEquipó" class="form-control" required="" title="Debe ingresar">
                                        <option disabled="disabled" selected="selected">SELECCIONE---></option>
                                        <?php
                                      while ($row = mysql_fetch_array($result)) {
                                          echo "<option value='".$row['0']."'>".$row['1']."</option>";
                                        }
                                        ?>


                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Codigo de Historial: </label>
                                    <select class="form-control" id="sltHistorial">
                                         <option disabled="disabled" selected="selected">SELECCIONE---></option>
                                          <?php
                                      while ($row = mysql_fetch_array($result2)) {
                                          echo "<option value='".$row['0']."'>".$row[0]."</option>";
                                        }
                                        ?>

                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary btn-lg btn_partesEquipos " 
                                        id="btn-pte-registrar">
                                    <span class="glyphicon glyphicon-save "  
                                          aria-hidden="true"></span> Registrar
                                    <!--                        //data-dismiss="modal"-->
                                </button>

                            </div>
                        </form>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>



            <!--Modal para modificar Partes-->
            <div class="modal fade" id="modalModificar"   class="btn-inventario" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close  btn-circle btn-danger" data-dismiss="modal" aria-hidden="true">
                                <i class="fa fa-times"></i></button>
                            <h4 class="modal-title">Modifcar Historial</h4>
                        </div>
                        <form role="form" action="" name="frmInventario" class="btn-inventario" id="FormularioModificar"  >

                            <div class="col-lg-12">             




                                <button type="submit" class="btn btn-info btn-lg btn_inventario " 
                                        id="btn-inv-registrar">
                                    <span class="glyphicon glyphicon-star "  
                                          aria-hidden="true"></span> Modificar
                                    <!--                        //data-dismiss="modal"-->
                                </button>

                            </div>
                        </form>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>




        </div>  

    </body>
</html>