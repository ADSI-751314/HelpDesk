<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="starter-template">
                <h1>MODIFICAR HISTORIAL CAMBIOS</h1>    
            </div>
            <button type="submit" class="btn btn-info btn-lg btn_inventario " 
                    id="btn-inv-consultarModificar">
                <span class="glyphicon glyphicon-search "  
                      aria-hidden="true"></span> Consultar Todo

            </button></br>
            <label id="lblRespuestaServidor" ></label>

            <div id="mostrarFormularioMoficar" ></div>






            <div class="modal fade" id="Modal"   class="btn-inventario" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close  btn-circle btn-danger" data-dismiss="modal" aria-hidden="true">
                                <i class="fa fa-times"></i></button>
                            <h4 class="modal-title">Modifcar Historial</h4>
                        </div>
                        <form role="form" action="" name="frmInventario" class="btn-inventario" id="historialModalMoficar"  >

                            <div class="col-lg-12">             




                                <button type="submit" class="btn btn-info btn-lg btn_inventario " 
                                        id="btn-inv-registrar">
                                    <span class="glyphicon glyphicon-star "  
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

        </div>




    </body>
</html>