<form action="controller/provedores_controller.php" method="POST" name="frm_provedores_guardar">
    <table>
        <tr>
            <td colspan="2"><h1> Registro de Provedores<h1></td>
                        </tr>
                        <tr> 
                            <td><label for="txtPro_codigo">Codigo Provedor</label></td> 
                            <td><input type="text"  name="txtPro_codigo" values="Ingrese  el codigo"> </td> 
                        </tr>
                        <tr> 
                            <td><label for="txtPro_nombre">Nombre Provedor</label></td> 
                            <td><input type="text"  name="txtPro_nombre" values="">  </td> 
                        </tr>
                        <tr> 
                            <td><label for="txtPro_telefono">Telefono Provedor</label></td> 
                            <td><input type="text"  name="txtPro_telefono" values=""></td> 
                        </tr>
                        <tr> 
                            <td><label for="txtPro_direccion">Direccion Provedor</label> </td> 
                            <td><input type="text"  name="txtPro_direccion" values=""></td>
                        </tr>
                        <tr> 
                            <td><label for="txtPro_correo">Correo Provedor</label></td> 
                            <td><input type="text"  name="txtPro_correo" values=""></td> 
                        </tr>
                        <tr> 
                            <td><label for="txtPro_pagina_web">Pagina Web</label> </td> 
                            <td><input type="text"  name="txtpagina_web" values=""> </td> 
                        </tr>
                        <tr> 
                            <td colspan="2"><input type="submit"  name="btnguardar" value="guardar"></td> 
                        </tr>
                        </table>
                        </form>