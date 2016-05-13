
<script type="text/javascript" src="view/js/proveedores.js"></script>   

    
<div class="well">
    <nav class="navbar  ">
        <ul class="nav navbar-nav">
     
           <li>  <h1 class="text-muted">Consultar Provedores<h1></li> 
        
        </ul>
                    <ul>     
                        <li>   <input type="text"  id="txtPro_parametro" values="Ingrese  el codigo" placeholder="Ingrese Busqueda" class="form-control "> </li> 
                    </ul>   
                 
                     <ul class="nav nav-justified">
                         
                         <li>   <a onclick="mostrarParametro();"  name="btnBuscar" value="Buscar" class="btn btn-lg btn-success">Buscar</a> </li>
                         <li>   <a onclick="mostrar();"  name="btnconsultar" value="consultar"class="btn btn-lg btn-success" >Listar </a> </li>
                         <li>    <a onclick="cargarAgregar();"  name="btnconsultar" value="Agregar"class="btn btn-lg btn-success">Agregar</a> </li>
                    
                      </ul>
                  
    </nav>           

                  
         
</div>
    
 

    
    
    
  <div id="resultado" class=""></div>
  
  <div id="ProveedoresF" class=""></div>


