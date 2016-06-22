
function objetoAjax() {
        var xmlhttp = false;
        try {
            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {

            try {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (E) {
                xmlhttp = false;
            }
        }

        if (!xmlhttp && typeof XMLHttpRequest !== 'undefined') {
            xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
    }
    
    function mostrar(){
        
        
        divResultado = document.getElementById('resultado');
        ajax = objetoAjax();
        ajax.open("POST", "controller/garantias_controller1.php?op=1", true);
        ajax.onreadystatechange = function(){
            if (ajax.readyState === 4) {
                divResultado.innerHTML = ajax.responseText;
            }
        };
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send(null);
    }
    
    

    function cargarmodificar1() {
          // document.getElementById('resultado').style.display = 'block';
        divResultado = document.getElementById('resultado');
        codigo = document.getElementById('codigo').value;
        tipo = document.getElementById('tipo').value;
        FechaInicio = document.getElementById('FechaInicio').value;
        FechaFin = document.getElementById('FechaFin').value;
        descripcion = document.getElementById('descripcion').value;
        tipoEquipo = document.getElementById('tipoEquipo').value;
            
                ajax = objetoAjax();
                ajax.open("POST", "controller/garantias_controller1.php?op=7", true);
                ajax.onreadystatechange = function () {
                    if (ajax.readyState == 4) {
                        divResultado.innerHTML = ajax.responseText;
                        
                    }
                }
                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                ajax.send( "codigo=" + codigo +"&tipo=" + tipo +"&FechaInicio=" + FechaInicio +"&FechaFin=" + FechaFin +"&descripcion=" + descripcion +"&tipoEquipo=" + tipoEquipo);
            }
     
     
     function cargarAgregar(){
         
        
         $('#modal').modal('show');
         
     }
     
     function editar(id){
         divResultado = document.getElementById('garantiasF');
                 ajax = objetoAjax();
         ajax.open("POST","controller/garantias_controller1.php?op=8",true);
         ajax.onreadystatechange = function(){
             
             if(ajax.readyState==4){
             divResultado.innerHTML = ajax.responseText;
                 $('#modal2').modal('show');
             }
         }
         ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
         ajax.send("codigo= "+ id );
            
       
       
         
     }
     
     
     
     function Registrar(){
        divResultado = document.getElementById('resultado');
        var codigo = document.getElementById('codigo').value;
        var tipo = document.getElementById('tipo').value;
        var FechaInicio = document.getElementById('FechaInicio').value;
        var FechaFin = document.getElementById('FechaFin').value;
        var descripcion = document.getElementById('descripcion').value;
        var tipoEquipo = document.getElementById('tipoEquipo').value;
         
        
         ajax = objetoAjax();
         ajax.open("POST","controller/garantias_controller1.php?op=2",true);
         ajax.onreadystatechange = function(){
             
             if(ajax.readyState==4){
             divResultado.innerHTML = ajax.responseText;
                
             }
         }
         ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
         ajax.send("codigo="+ codigo +"&tipo="+ tipo +"&FechaInicio="+ FechaInicio +"&FechaFin="+ FechaFin +"&descripcion="+ descripcion +"&tipoEquipo="+ tipoEquipo);
     }
     
     function eliminar(codigo){
         
         var del = confirm("Se eliminará el registro con código "+codigo+" \n\n Seguro desea eliminarlo?");
        
        if(del==true)
           {
        divResultado = document.getElementById('resultado');
        
        ajax = objetoAjax();
        ajax.open("POST", "controller/garantias_controller1.php?op=3", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                divResultado.innerHTML = ajax.responseText;
               
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
       ajax.send("codigo=" + codigo);
           }
     }
    
