
<script type="text/javascript" src="view/js/proveedores.js"></script>   
<div class="col-md-12">
   

        <div class="well"  >
     
          
            <h1> Consultar Base de Conocimiento<h1></td> 

                    <div class="ROW">
                       
                                 <a onclick="mostrar();"  name="btnconsultar" value="consultar"class="btn btn-lg btn-success">Pendiente Listar </a>
                                 <a onclick="cargarAgregar();"  name="btnconsultar" value="Agregar"class="btn btn-lg btn-success">Agregar Informacion</a>
                              
                                 <input type="text"  id="txtPro_parametro" values="Ingrese  el codigo" placeholder="Ingrese Busqueda" class=" col-xs-5  ">
                                 <a onclick="mostrarParametro();"  name="btnBuscar" value="Buscar"class="btn btn-lg bg-primary ">Buscar</a>
                               

                    </div><br><br>
                    
                    <div>
                        <tr>
                                <div class="textos"> Descripciòn de la Falla </div>
                                <div> <textarea id= "textarea" name="descripion_falla" rows="10"cols="30"> </textarea><br><br></div>
			
			</tr>
                        
                    </div>
                                <div class="textos"> Soluciòn de la Falla </div>
				<div> <textarea id= "textarea" name="Solucion_falla" rows="10"cols="30"> </textarea><br><br></div>
                     <div >
        
        
        
                    </div>
        </div>
    
        
   
  
  <div id=""></div>

</div>



<!--<form action="../../controller/base_conocimiento_controller.php?petition=consultar" method="POST"  name="frm_base_conocimiento_consultar"><br><br>
			<table class="fondo" align="center">
			
			
			<tr> 
				<td class="textos"> Consultar Palabra Clave </td>
				<td><form id="buscador" name="buscador" method="post" size="30"action="<?php echo $_SERVER['PHP_SELF'] ?>" width="50">  
				<input id="buscar" name="buscar" type="search" placeholder="Buscar aqui..." autofocus size="45" > 
				 </form> </td>
			
			</tr>
			<tr>
				<td class="textos"> Consulta Especifica </td>
				<td> <form id="buscador" name="buscador" method="post" size="50"action="//////<?php echo $_SERVER['PHP_SELF'] ?>">  
				<input id="buscar" name="buscar" type="search" placeholder="Digite aqui su Busqueda Especifica......." autofocus  size="45"> 
				
			
			</tr>
			<tr>
			<td align="center" colspan="3">
			<input type="submit" name="btnbuscador" class="boton peque aceptar btn btn-info" size="30" value="Consultar" id="buscador">
			</td>
			</tr>
			<tr>
				<td class="textos"> Descripcion de la Falla </td>
				<td> <textarea id= "textarea" name="descripion_falla" rows="10"cols="50"> </textarea><br><br></td>
			
			</tr>
			<tr>
				<td class="textos"> Solucion de la Falla </td>
				<td> <textarea id= "textarea" name="Solucion_falla" rows="10"cols="50"> </textarea><br><br></td>
			
			</tr>	
				
			</table>
	</form>-->