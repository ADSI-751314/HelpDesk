   

<div class="col-md-12">
   

        <div class="well"  >
     
          
            <h1 align="center"> Consultar Garantias<h1></td> 

                    <div class="ROW">
                       
                               
                               <a name="btnconsultar" value="consultar" class="btn btn-primary btn-lg btn-block" onClick="mostrar();">Consultar Garantías</a> 
                               <a onclick="cargarAgregar();"  name="btnconsultar" value="Agregar" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#Modal">Agregar</a> 
                               <a onclick="mostrarParametro();"  name="btnBuscar" value="Buscar" class="btn btn-primary btn-lg btn-block">Buscar Garantia</a>
                               <button type="button" onclick="a();" class="btn btn-primary btn-lg btn-block">Ensayo</button>

                    </div>

                  
                         

        </div>
    <div id="resultado"></div>
  
  <div id="garantiasF"></div>
  
  <div class="modal fade" id="modal" role="dialog" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" action="" name="frmGarantiasN" onsubmit="Registrar(); return false">
                    <div class="col-lg-12">
                    
                    <div class="form-group">
                    <label>Codigo de la Garantía</label>
                    <input id="codigo" class="form-control" placeHolder="Ingrese el numero de la nueva garantía" title="Ingrese el Número de la garantía" required> 
                    </div>
                    
                    <div class="form-group">
                        <label>Tipo de Garantía</label>
                    <select id="tipo" class="form-control" title="tipo de garantía" required>
                        <option>Software</option>
                        <option>Hardware</option>
                        
                     </select>
                    </div>  
                    
                    <div class="form-group">
                        <label>Fecha de inicio de la garantía:</label>
                        <input type="date" id="FechaInicio" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Fecha de fin de la garantía:</label>
                        <input type="date" id="FechaFin" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Descripción de la garantía</label>
                        <input id="descripcion" class="form-control"  placeHolder="Ingrese la descripción de la garantía" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Tipo de Equipo</label>
                       <select id="tipoEquipo" class="form-control" title="Tipo Equipo" required>
                           <option value="1">Computador de mesa</option>
                        <option value="2">Computador portatil</option>
                        
                     </select>                   
                    </div>
                    
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
                    
                   </div> 
                </form>
                
            </div>
        </div>

</div>