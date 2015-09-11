<form name="frmBase_Conocimiento_Consultar.php"><br><br>
			<table class="fondo" align="center">
			
			
			<tr> 
				<td class="textos"> Consultar Palabra Clave </td>
				<td><form id="buscador" name="buscador" method="post" size="30"action="<?php echo $_SERVER['PHP_SELF'] ?>">  
				<input id="buscar" name="buscar" type="search" placeholder="Buscar aqui..." autofocus > 
				<input type="submit" name="btnbuscador" class="boton peque aceptar" size="20" value="Buscar" > </form> </td>
			
			</tr>
			<tr>
				<td class="textos"> Consulta Especifica </td>
				<td><input type="text"name="txtEspecifica" size="38"maxlength="100">
                                    
                                    
			
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
	</form>