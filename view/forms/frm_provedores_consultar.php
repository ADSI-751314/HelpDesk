
<script type="text/javascript" src="view/js/proveedores.js"></script>   
<div class="col-md-6">
    <form action="controller/provedores_controller.php" method="POST" name="consultar">


        <table class="table">

            <tr> 
                <td colspan="2"  >  <h1> Consultar Provedores<h1></td> 

                            </tr>

                            <tr> 
                                <td  >   


                                    <a onclick="mostrar();"  name="btnconsultar" value="consultar"class="btn btn-lg btn-success">Consultar</a>

                                </td> 


                                <td>   Buscar Proveedor
                                    <input type="text"  name="txtConsulta" values="Ingrese  el codigo"> </td> 


                            </tr>
                            <tr> 
                                <td>  Codigo Proveedor</td> 
                                <td> <input type="text"  name="txtPro_codigo" values="Ingrese  el codigo"> </td> 
                            </tr>


                            <tr> 
                                <td> Nombre Proveedor</td> 
                                <td> <input type="text"  name="txtPro_nombre" values="">  </td> 
                            </tr>

                            <tr> 
                                <td>   Telefono Proveedor</td> 
                                <td> <input type="text"  name="txtPro_telefono" values=""> </td> 
                            </tr>

                            <tr> 
                                <td> Direccion Proveedor</td> 
                                <td> <input type="text"  name="txtPro_direccion" values="">  </td> 
                            </tr>

                            <tr> 
                                <td>  Correo Proveedor</td> 
                                <td>   <input type="text"  name="txtPro_correo" values="">  </td> 
                            </tr>

                            <tr> 
                                <td> Pagina Web</td> 
                                <td>  <input type="text"  name="txtpagina_web" values=""> </td> 
                            </tr>
                            </table>

                            <div id="ProveedoresF"></div>
                            <?php
                            //include ('../../model/provedores_class.php');
                            //$mostrar = new provedores_class();
                            //$mostrar->consultar($pro_codigo);
                            ?>





                            </div >          

























                            </form>




