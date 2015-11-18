<form action="../../controller/licencias_controller.php?petition=actualizar" method="POST"  name="frm_licencias_actualizar">
	<table colspan="3"align="center">
		<tr>
			<td> 
				FORMULARIO LICENCIAS <br> ACTUALIZAR
			</td>
			
		</tr>
	</table>

	<table colspan="3"align="center">
		<tr>
			<td>Codigo Licencia</td> 
			<td><input type="text" name="txtCodigo_Licencia" id="txtCodigo_Licencia" value="" size="50" maxlength="80"></td>
		</tr>
		
		<tr>
			<td>Nombre Licencia</td> 
			<td><input type="text" name="txtNombre_Licencia"  id="txtNombre_Licencia" value="" size="50" maxlength="80"></td>
		</tr>
		<tr>
			<td>Fecha Inicio</td> 
                        <td> <input type="date" name="Fecha_Inicio" size="100"> </td> 
                    
                      
		</tr>
		<tr>
			<td>Fecha Caducidad </td> 
                        <td>  <input type="date" name="Fecha_Caducidad"> </td>
                            
                            
                        
		</tr>
		<tr>
			<td>Fecha Compra</td> 
                        <td> <input type="date" name="Fecha_Compra"> </td>
                        
                        
		</tr>
		<tr>
			<td>Precio </td> 
			<td><input type="text" name="txtPrecio"  id="txtPrecio" value="" size="50" maxlength="80"></td>
		</tr>
		<tr>
			<td>Cobertura </td> 
			<td><input type="text" name="txtCobertura"  id="txtCobertura" value="" size="50" maxlength="80"></td>
		</tr>
		
		<table colspan="3"align="center">
		<tr> 
			<td>Estado </td>
			<td>
			<select id="Estado" onChange="mostrarSeleccionEquipos()">
			<option> Seleccione </option>
			<option> Activo </option>			
			<option> Inactivo </option>
			
			
			</select>
			<input type="text" id="mensaje">
			<font color="green" size="65"></font>
			</td>
		</tr>
		<tr align="center">
		
		<td><input type="submit" name="btnActualizar" size="35" value="Actualizar" class="textos" onClick="Actualizar()"> </td>
		</tr>
		</table>
	</table>
</form>