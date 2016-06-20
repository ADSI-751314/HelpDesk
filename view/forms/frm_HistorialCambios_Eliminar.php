<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="starter-template">
                <h1>ELIMINAR HISTORIAL CAMBIOS</h1>    
            </div>
            <div class="panel panel-default btn-inventario">


                <button type="submit" class="btn btn-info btn-lg btn_inventario " 
                        id="btn-inv-consultarEliminar">
                    <span class="glyphicon glyphicon-search "  
                          aria-hidden="true"></span> Consultar Todo


                </button>
                
                              
                      <div class="container">

            <form class="form-inline" role="form">
                <div class="form-group">
                    <label class="Validacion"></label></br>
                    <label for="txt_codigofiltro">Codigo Historial :</label>                  
                    <input type="text" class="form-control" id="txt_codigofiltro" placeholder="Ingrese codigo de Historial">
              
                    <div class="form-group">
                        <label for="dte_fecha">Fecha:</label>
                        <input type="date" class="form-control" id="dte_fecha" value="<?php echo date("Y-m-d\TH-i");?>">
                    </div>
                
                         
                
                    <button type="" class="btn btn-info btn_inventario " id="btn-inv-filtrarEliminar">
                        <span class="glyphicon glyphicon-filter "  
                              aria-hidden="true"></span> Filtrar
                    </button>
                </div>
            </form>
        </div>
        
            </div>


            <label id="lblRespuestaServidorEliminado"></label>
            <label id="lblRespuestaNoElminado" ></label>
            <form name="" id="formularioElimnar">








            </form>




        </div>



    </div>   
</body>
</html>