<h1>FORMULARIO BASE DE CONOCIMIENTO <h1> 

        <form action="controller/base_conocimiento_controller.php" method="POST" name="consultar"> 

            <div class="col-md-12">


                <div class="well"  >

                            <div class="ROW">

                                <input type="text"  id="txtPro_parametro" values="Ingrese  el codigo" placeholder="Ingrese Busqueda" class=" col-xs-5  ">
                                <a onclick="mostrarParametro();"  name="btnBuscar" value="Buscar"class="btn btn-lg bg-primary btn btn-lg btn-success">Buscar</a>


                            </div><br><br>

                            <div>
                                <tr>
                                <div class="textos"> Descripciòn de la Falla </div>
                                <div> <textarea id= "textarea" name="descripion_falla" rows="10"cols="30"> </textarea><br><br></div>

                                </tr>

                            </div>

                            <div >
                                <div class="textos"> Soluciòn de la Falla </div>
                                <div> <textarea id= "textarea" name="Solucion_falla" rows="10"cols="30"> </textarea><br><br></div>

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