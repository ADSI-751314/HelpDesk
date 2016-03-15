  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
     
            
                      
            <form  class="form-horizontal" action="controller/HistorialCambios_controller.php?petition=guardar" method="POST"  name="frm_HistorialCambios">
                <div class="container">
                <br>
                <div style="text-align:center " >
                 <h1>Guardar Historial de Cambios</h1>
                 </div>
                <div class="form-group">
                    <label> Codigo De Historial</label>
                    <input class="form-control" name="txtCodigo"  id="pkCodigo"type="number" placeholder="Ingrese aqui codigo del Historial">                    
                               
                    
                </div>
                   
                <div class="form-group">
                    <label > Fecha De Cambio</label>  
                    <input  type="date" class="form-control" name="fecha" id="fecha"> 
                                                      	
                  
                </div>
                     
                     <div class="form-group">
                         
                         <label > Hora De Cambio</label>                                               
                         <input class="form-control "type="time" name="hora" id="Hora">
                        
                     </div>
                       
                        
                       <div class="form-group">
                           <label > Descripcion De Cambio</label> 
                           
                        <textarea class="form-control"   name="txtdescripcion" placeholder="Descripcion">  </textarea>
                                                                         
                                     
                        </div>
                <div class="form-group">
                    <div class="col-md-0 col-md-offset-6">
                        <button type="submit" class="btn btn-primary " id="guardar">Guardar</button>
                    
                       </div>
                       
                    
                </div>
              
                       
            
            
                 </form> 
  

   
            
        </div>
   

  
                      
