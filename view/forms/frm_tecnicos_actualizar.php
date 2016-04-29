<form action="controller/tecnicos_controller.php?petition=actualizar" method="POST" name="frm_tecnicos_actualizar">
			<table border="1" >
				<tr>
					<td colspan="2" ALIGN="CENTER" class="textos">  ACTUALIZAR DATOS DE TECNICOS  </td>					
				</tr>
				<tr>
					
					<td class="textos"> <h3> CODIGO TECNICO : </h3></td> 
					<td><input type="textarea" name="txtCodigoTecnico" size="8" maxlength="10" ></td>
				</tr>
				<tr>
					<td class="textos"> PRIMER NOMBRE:</td>
					<td><textarea name="txtPrimerNombre" cols="55" rows="4" ></textarea></td>
				</tr>
				<tr>
					<td class="textos"> SEGUNDO NOMBRE:</td>
					<td><textarea name="txtSegundoNombre" cols="55" rows="4" ></textarea></td>
				</tr>
				<tr>
					<td class="textos"> PRIMER APELLIDO:</td>
					<td><textarea name="txtPrimerApellido" cols="55" rows="4" ></textarea></td>
				</tr>
				<tr>
					<td class="textos"> SEGUNDO APELLIDO:</td>
					<td><textarea name="txtSegundoApellido"cols="55" rows="4" ></textarea></td>
				</tr>
				<tr>
					<td class="textos"> TELEFONO: </td>
					<td><textarea name="txtTelefono" cols="55" rows="4" ></textarea></td>
				</tr>
				<tr>
					<td class="textos"> CELULAR: </td>
					<td><textarea name="txtNumeroMovil" cols="55" rows="4" ></textarea></td>
				</tr>				
				<tr>
					<td class="textos"> CORREO :</td>
					<td><textarea name="txtCorreo" cols="55" rows="4" value= ></textarea></td>
				</tr>
				<tr>
					<td class="textos"> ESPECIALIDAD  :</td>
					<td><SELECT NAME="" SIZE=1 "> 
					    <OPTION> Seleccione la especialidad </OPTION>
					    <OPTION> Hardware </OPTION>
					    <OPTION> Software </OPTION>
					    <OPTION> Redes </OPTION> 
						</SELECT> </td>
				</tr>

				<tr>
					
					<td colspan="2"> 
					<CENTER>
					<input  type="submit"  name="btnActualizar" value="ACTUALIZAR" onClick="actualizar()">
					
					</td>
					
				</tr>				
		
			</table>
			</form>