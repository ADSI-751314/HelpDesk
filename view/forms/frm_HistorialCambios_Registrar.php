<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrar </title>

</head>
<body>
    <div class="container">
      <div class="starter-template">
        <h1>HISTORIAL DE CAMBIOS</h1>
        <p class="lead">Aplicación Registro de Inventario Tecnologico</p>
        <button type="button"  id="botonModal" class="btn btn-primary btn-lg btn_inventario" >
          <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span> Nuevo Registro
        </button>
            </div>
<!--        div para mostar el formulario-->
    <label id="lblRespuestaServidor" ></label>
         
        
         <div class="panel panel-default btn_inventario" id="mostrarFormulario" >       
      
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
              <form role="form" action="" name="frmInventario" class="btn-inventario" id="frmHistorialCambios"  >
               
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Codigo</label>
                  <span class="validacion"></span>
                  <input id="pkCodigo" class="form-control" required="" >
                </div>

                <div class="form-group">
                  <label>fecha</label>
                  <input  type="date" id="fecha" class="form-control datepicker" required="">
                </div>

                <div class="form-group">
                  <label>hora</label>
                  <input id="hora" type="time" class="form-control" required="">
                </div>

                <div class="form-group">
                  <label>Descripcion </label>
                  <input id="txtdescripcion" class="form-control" required="" title="Debe ingresar">
                </div>

                  <button type="submit" class="btn btn-info btn-lg btn_inventario " 
                           id="btn-inv-registrar">
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

  
  
     

    </div>  
    
  </body>
  </html>