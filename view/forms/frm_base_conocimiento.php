<form name="frmBuscar.php"><br><br>
    <table class="fondo" align="center">
        <tr> 
            <td class="textos"> Adicionar Balabra Clave </td>
            <td><form id="buscador" name="buscador" method="post" size="10"action="<?php echo $_SERVER['PHP_SELF'] ?>">  
                    <input id="buscar" name="buscar" type="search" placeholder="Buscar aqui..." autofocus > 
                    <input type="submit" name="buscador" class="boton peque aceptar" size="20" value="Buscar" > </form> </td>
        </tr>
        <tr>
            <td class="textos"> Adicionar Busqueda Especifica </td>
            <td> <input type="text"name="txtBuscar_especifica" size="50"maxlength="100"><br></td></td>

        </tr>
        <tr>
            <td class="textos"> Descripcion de la Falla </td>
            <td> <textarea id= "textarea" name="descripion_falla" rows="10"cols="50"> </textarea><br><br></td>

        </tr>
        <tr>
            <td class="textos"> Solucion de la Falla </td>
            <td> <textarea id= "textarea" name="Solucion_falla" rows="10"cols="50"> </textarea><br><br></td>

        </tr>
        <tr align="center">

            <td colspan="4">
                <input type="submit" name="btnCrear" size="10" value="Crear" class="textos" cellpadding="center"><br><br><br>

    </table>
</form>
