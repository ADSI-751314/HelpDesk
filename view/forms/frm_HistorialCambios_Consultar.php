<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Consultar </title>

    </head>
    <body>
        <div class="container">
            <div class="starter-template">
                <h1>HISTORIAL DE CAMBIOS</h1>
                <p class="lead">Aplicación de Consulta  de Inventario Tecnologico</p>
            </div>

            <button type="submit" class="btn btn-info btn-lg btn_inventario " 
                    id="btn-inv-consultarTodo">
                <span class="glyphicon glyphicon-search "  
                      aria-hidden="true"></span> Consultar Todo

            </button>
        </div>
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
                
                <div class="form-group">
                        <label for="tim_Hora">Hora:</label>
                        <input type="time" class="form-control" id="tim_Hora" placeholder="">
                    </div>
                      
                <div class="form-group">
                        <label for="text_descripcion">Descripcion:</label>
                        <input type="text" class="form-control" id="text_descripcion" placeholder="">
                    </div>               
                
              
                
                    <button type="" class="btn btn-info btn_inventario " id="btn-inv-filtrar">
                        <span class="glyphicon glyphicon-filter "  
                              aria-hidden="true"></span> Filtrar
                    </button>
                </div>
            </form>
        </div>
        
      

        <!--        div para mostar el formulario y respuesta desde el servidor-->

        <div id="mostrarFormulario"></div>        

        <div id="HistorialFormulario" class=""></div>





    </form>

</div>  
</div>
</div>

</body>
</html>