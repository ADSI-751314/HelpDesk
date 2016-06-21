
<script type="text/javascript" src="view/js/proveedores.js"></script>   

 
<div class="well">
    <nav class="navbar  ">
       
     
           <h1 class="text-muted h1_align">Gestion de Provedores<h1>
      
      <ul class="nav nav-justified">
                       
                        <li>   <input type="text"   id="txtPro_parametro" values="Ingrese  el codigo" placeholder="Ingrese Busqueda o de clic en la lupa y tendra todas las opciones" class="form-control" > </li> 
                      </ul>
                   <br>
                        <ul class=" nav nav-justified"> 
                        <li>   <a onclick="mostrarParametro();"  name="btnBuscar" value="Buscar" class="btn btn-lg btn-primary"><i class="glyphicon glyphicon-search"></i></a> </li>
                          <li>    <a onclick="cargarAgregar();"  name="btnconsultar" value="Agregar"class="btn btn-lg btn-success" data-toggle="modal" data-target="#myModal">Agregar</a> </li>
                    </ul>   
      
<!--                    <ul class="nav nav-justified">
                       
                     <li>   <a onclick="mostrar();"  name="btnconsultar" value="consultar"class="btn btn-lg btn-success" >Listar </a> </li>
                         <li>    <a onclick="cargarAgregar();"  name="btnconsultar" value="Agregar"class="btn btn-lg btn-success" data-toggle="modal" data-target="#myModal">Agregar</a> </li>
                     
                    </ul>-->
               
    </nav>           
       </div>           
         

    
 

    
    
    
  <div id="resultado" class=""></div>
  
    <div id="Proveedores" class=""></div>
    
  
  <div class="modal fade" id="myModal" role="dialog">
  

        <div class="modal-dialog fondo ">
                

             <div id="ProveedoresF" class=""></div>
   
        </div>

  </div>
    
  