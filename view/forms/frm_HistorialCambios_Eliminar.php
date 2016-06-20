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
                
                
                   <button type="submit" class="btn btn-info btn-lg btn_inventario " 
                        id="btn-inv-consultarEliminar">
                    <span class="glyphicon glyphicon-filter  "  
                          aria-hidden="true"></span> Filtar
                </button>
                  
               
                <div class="row">
                    
                  

                    <div class="col-lg-4">
                        <label>Codigo</label>
                        <input  type='text' id='dte_fecha' class='form-control' required=''>
                    </div>

                    <div class="col-lg-4 col-lg-offset-2">
                        <label>Fecha</label>
                        <input  type='date' id='dte_fecha' class='form-control datepicker' required=''>
                    </div>
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