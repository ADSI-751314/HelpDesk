<form name="frmLicencias_actualizar" >
	<table colspan="3"align="center">
		<tr>
			<td> 
				FORMULARIO LICENCIAS <br> "ACTUALIZAR" 
			</td>
			
		</tr>
	</table>

	<table colspan="3"align="center">
		<tr>
			<td>Codigo Licencia</td> 
			<td><input type="text" name="txtCodigo_Licencia" value="" size="50" maxlength="80"></td>
		</tr>
		
		<tr>
			<td>Nombre Licencia</td> 
			<td><input type="text" name="txtNombre_Licencia" value="" size="50" maxlength="80"></td>
		</tr>
		<tr>
			<td>Fecha Inicio</td> 
			<td><input type="text" name="txtFecha_Inicio" value="" size="50" maxlength="80"></td>
		</tr>
		<tr>
			<td>Fecha Vencimiento </td> 
			<td><input type="text" name="txtFecha_Vencimiento" value="" size="50" maxlength="80"></td>
		</tr>
		<tr>
			<td>Fecha Compra</td> 
			<td><input type="text" name="txtFecha_Compra" value="" size="50" maxlength="80"></td>
		</tr>
		<tr>
			<td>Precio </td> 
			<td><input type="text" name="txtPrecio" value="" size="50" maxlength="80"></td>
		</tr>
		<tr>
			<td>Cobertura </td> 
			<td><input type="text" name="txtCobertura" value="" size="50" maxlength="80"></td>
		</tr>
		
		<table colspan="3"align="center">
		<tr> 
			<td>Tipo Equipo</td>
			<td>
			<select id="Equipo" onChange="mostrarSeleccionEquipos()">
			<option> Seleccione </option>
			<option> Escritorio </option>			
			<option> Portatil </option>
			<option> Servidor </option>
			
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
