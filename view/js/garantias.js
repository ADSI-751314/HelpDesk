
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
        
        
        divResultado = document.getElementById('garantiasF');
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
    
    function guardar() {
        
        var codigo = document.getElementById('txt_gar_codigo');
        var tipo = document.getElementById('txt_gar_tipo');
        var fechaI = document.getElementById('gar_fecha_inicio');
        var fechaF = document.getElementById('gar_fecha_fin');
        var descripcion = document.getElementById('txt_descripcion');
        var tipoE = document.getElementById('txt_tipoE');
        
        
        ajax = objetoAjax();
        ajax.open("POST", "controller/garantias_controller1.php?op=7", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                divResultado.innerHTML = ajax.responseText;
                mostrar(); 
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
       ajax.send("txt_gar_codigo=" + codigo +"&txt_gar_tipo=" + tipo +"&gar_fecha_inicio=" + fechaI +"&gar_fecha_fin=" + fechaF +"&txt_descripción=" + descripcion +"&txt_tipoE=" + tipoE);
    
     }

    function cargarAgregar1() {
          // document.getElementById('resultado').style.display = 'block';
                divResultado = document.getElementById('garantiasM');
               
            
                ajax = objetoAjax();
                ajax.open("POST", "controller/garantias_controller1.php?op=7", true);
                ajax.onreadystatechange = function () {
                    if (ajax.readyState == 4) {
                        divResultado.innerHTML = ajax.responseText;
                   
                    }
                }
                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                ajax.send( );
            }
     
     var accion;
     function cargarAgregar(){
         
        accion = 'N';
         $('#modal').modal('show');
         
     }
     
     function editar(){
         
         accion = 'E';
         $('#modal').modal('show');         
     }
     
     function b(){
         
         alert('accion '+ accion);
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
    
