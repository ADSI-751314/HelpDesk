
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

        if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
            xmlhttp = new XMLHttpRequest();
        }
        return xmlhttp;
    }


 function mostrar() {
        divResultado = document.getElementById('ProveedoresF');
        ajax = objetoAjax();
        ajax.open("POST", "controller/provedores_controller.php?op=1", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                divResultado.innerHTML = ajax.responseText
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send(null);
    }
    
    $(function(){
    $("document").on("ready",function(){
        $("#btnmodificar").on("onclick",function(){
           mostrar(); 
        });
        
    });
 });

     function mostrarParametro() {
        divResultado = document.getElementById('ProveedoresF');
        var parametro = document.getElementById('txtPro_parametro').value;
        ajax = objetoAjax();
        ajax.open("POST", "controller/provedores_controller.php?op=5", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                divResultado.innerHTML = ajax.responseText
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send("txtPro_parametro=" + parametro);
    }
          function cargarAgregar() {
          // document.getElementById('resultado').style.display = 'block';
                divResultado = document.getElementById('ProveedoresF');
               
            
                ajax = objetoAjax();
                ajax.open("POST", "controller/provedores_controller.php?op=7", true);
                ajax.onreadystatechange = function () {
                    if (ajax.readyState == 4) {
                        divResultado.innerHTML = ajax.responseText;
                   
                    }
                }
                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                ajax.send( );
            }
    
    
    
      function cargarModificar(id) {
          // document.getElementById('resultado').style.display = 'block';
                divResultado = document.getElementById('ProveedoresF');
               
             //   var codigo = document.getElementById('txtPro_parametro').value;
                ajax = objetoAjax();
                ajax.open("POST", "controller/provedores_controller.php?op=6", true);
                ajax.onreadystatechange = function () {
                    if (ajax.readyState == 4) {
                        divResultado.innerHTML = ajax.responseText;
                     
                    }
                }
                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                ajax.send("txtPro_parametro=" +id );
            }
    
    
    
     function guardar() {
        divResultado = document.getElementById('resultado');
        var codigo = document.getElementById('txtPro_codigo').value;
        var nombre = document.getElementById('txtPro_nombre').value;
        var telefono = document.getElementById('txtPro_telefono').value;
        var direccion = document.getElementById('txtPro_direccion').value;
        var correo = document.getElementById('txtPro_correo').value;
        var pagina_web = document.getElementById('txtpagina_web').value;
        
        
        ajax = objetoAjax();
        ajax.open("POST", "controller/provedores_controller.php?op=2", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                divResultado.innerHTML = ajax.responseText;
                mostrar(); 
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
       ajax.send("txtPro_codigo=" + codigo+"&txtPro_nombre=" + nombre+"&txtPro_telefono=" + telefono+"&txtPro_direccion=" + direccion+"&txtPro_correo=" + correo+"&txtpagina_web=" + pagina_web);
    
     }

function modificar() {
    
        divResultado = document.getElementById('resultado');
        var codigo = document.getElementById('txtPro_codigo').value;
        var nombre = document.getElementById('txtPro_nombre').value;
        var telefono = document.getElementById('txtPro_telefono').value;
        var direccion = document.getElementById('txtPro_direccion').value;
        var correo = document.getElementById('txtPro_correo').value;
        var pagina_web = document.getElementById('txtpagina_web').value;
        
        
        ajax = objetoAjax();
        ajax.open("POST", "controller/provedores_controller.php?op=3", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                divResultado.innerHTML = ajax.responseText;
                mostrar(); 
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
       ajax.send("txtPro_codigo=" + codigo+"&txtPro_nombre=" + nombre+"&txtPro_telefono=" + telefono+"&txtPro_direccion=" + direccion+"&txtPro_correo=" + correo+"&txtpagina_web=" + pagina_web);
    }
    
    
    
    
    function eliminar(id) {
        
       var del = confirm("Seguro que desea eliminar registro");
        
        if(del==true)
           {
        divResultado = document.getElementById('resultado');
       // var codigo = document.getElementById('txtPro_codigo').value;

        
        
        ajax = objetoAjax();
        ajax.open("POST", "controller/provedores_controller.php?op=4", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                divResultado.innerHTML = ajax.responseText;
                mostrar(); 
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
       ajax.send("txtPro_codigo=" + id);
           }
           
    }