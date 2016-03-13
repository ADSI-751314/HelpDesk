<script type="text/javascript" src="view/js/proveedores.js"></script>
 <div class="col-md-6">
<form action="controller/provedores_controller.php" method="POST" name="guardar">
    <table class="table">
                        <tr>
                        <td colspan="2"><h1> Registro de Provedores<h1></td>
                        </tr>
                        <tr> 
                            <td>Codigo Proveedor</td> 
                            <td><input type="text"  name="txtPro_codigo" values="Ingrese  el codigo"> </td> 
                        </tr>
                        <tr> 
                            <td>Nombre Proveedor</td> 
                            <td><input type="text"  name="txtPro_nombre" values="">  </td> 
                        </tr>
                        <tr> 
                            <td>Telefono Proveedor</td> 
                            <td><input type="text"  name="txtPro_telefono" values=""></td> 
                        </tr>
                        <tr> 
                            <td>Direccion Proveedor</td> 
                            <td><input type="text"  name="txtPro_direccion" values=""></td>
                        </tr>
                        <tr> 
                            <td>Correo Proveedor</td> 
                            <td><input type="text"  name="txtPro_correo" values=""></td> 
                        </tr>
                        <tr> 
                            <td>Pagina Web </td> 
                            <td><input type="text"  name="txtpagina_web" values=""> </td> 
                        </tr>
                        <tr> 
                            <td colspan="2"><input type="submit"  name="btnguardar" id="btnguardar" value="guardar"  class="btn btn-lg btn-success"></td> 
                        </tr>
    </table>
</form>
     
     <div>