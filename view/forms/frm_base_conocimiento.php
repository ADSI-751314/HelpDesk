
<html>
    <head>
        <title> Formulario Buscar </title>
    </head>
    <body>
        <form name="frmBuscar.php">
            <table class="fondo" align="center">

                <tr>
                    <td colspan="2" align="center" class="textos"> Base de conocimiento </td>
                </tr>
                <tr> 
                    <td class="textos"> Buscar por Balabra Clave </td>
                    <td><input type="text"name="txtBuscar_Clave" size="50"maxlength="100"></td>
                </tr>
                <tr>
                    <td class="textos"> Busqueda Especifica </td>
                    <td> <input type="text"name="txtBuscar_especifica" size="50"maxlength="100"></td>
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
                        <input type="submit" name="btnBuscar" size="10" value="Buscar" class="textos" cellpadding="center"><br><br><br>
                        <input type="submit" name="btnNuevo" size="10" value="Nuevo" class="textos"> 
                        <input type="submit" name="btnActualizar" size="10" value="Actualizar" class="textos"> 
                        <input type="submit" name="btnDescripcion_Falla" size="20" value="Descripcion_Falla" class="textos"> 
                        <input type="submit" name="btnSolucion_Falla" size="10" value="Solucion_Falla" class="textos"> 
            </table>
        </form>
    </body>
</html>

