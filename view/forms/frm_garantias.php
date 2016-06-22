   

<div class="col-md-12">
   

        <div class="well"  >
     
          
            <h1 align="center"> GESTIÓN GARANTIAS HARDWARE Y SOFTWARE<h1> 

                    <div class="ROW">
                               <a name="btnconsultar" value="consultar" class="btn btn-primary btn-lg btn-block" onClick="mostrar();">Consultar Garantías</a> 
                               <a onclick="cargarAgregar();"  name="btnconsultar" value="Agregar" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#Modal">Agregar</a> 
                    </div>
        </div>
    <div id="resultado"></div>
    
  <div id="garantiasF"></div>
  
  <div class="modal fade" id="modal" role="dialog" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form role="form" action="" id="frmGarantiasM" name="frmGarantiasN" onsubmit="Registrar(); return false">
                    <div class="col-lg-12">
                    
                    <div class="form-group">
                    <p class="bg-info">Codigo de la Garantía</p>
                    <input id="codigo" class="form-control" placeHolder="Ingrese el numero de la nueva garantía" title="Ingrese el Número de la garantía" required> 
                    </div>
                    
                    <div class="form-group">
                        <p class="bg-info">Tipo de Garantía</P>
                    <select id="tipo" class="form-control" title="tipo de garantía" required>
                        <option value="">Eliga el Tipo de Garantía</option>
                        <option value="Software">Software</option>
                        <option value="Hardware">Hardware</option>
                        
                     </select>
                    </div>  
                    
                    <div class="form-group">
                        <p class="bg-info">Fecha de inicio de la garantía:</p>
                        <input type="date" id="FechaInicio" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <p class="bg-info">Fecha de fin de la garantía:</p>
                        <input type="date" id="FechaFin" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <p class="bg-info">Descripción de la garantía</p>
                        <input id="descripcion" class="form-control"  placeHolder="Ingrese la descripción de la garantía" required>
                    </div>
                    
                    <div class="form-group">
                        <p class="bg-info">Marca del Equipo</p>
                       <select id="tipoEquipo" class="form-control" title="Tipo Equipo" required>
                        <option value="">Eliga la Marca del Equipo</option>
                        <option value="1">Samsung</option>
                        <option value="2">Compaq</option>
                        
                     </select>                   
                    </div>
                    
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
                        
                    
                   </div> 
                </form>
                
            </div>
        </div>

</div>
  

  
  