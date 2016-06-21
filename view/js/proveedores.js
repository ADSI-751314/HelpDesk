//$(function () {
//    $("form").on("submit", function (e) {
//        e.preventDefault();
//        var action = $(this).attr("action");
//        var name = $(this).attr("name");
//        var data = $(this).serialize() + "&petition=" + name;
//        var method = $(this).attr("method");
//
//        ajax(action, data, method, loginRequestHandler);
//
//    });
//    
//
//    function loginRequestHandler(response) {
//        alert(response);
//    }
//});

$(document).on("ready",function(){
   alert('si llega'); 
    
});

            $(document).on("ready", function () {
                alert("si llega");
                $(".campos").on("keyup", function () {

                    $(".campos").each(function () {
                     if ($(this).val() == "")
                        {
                          $(this).addClass("error");
                        }else{$(this).removeClass("error")}
                    });
                });
            });
            

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
        divResultado = document.getElementById('Proveedores');
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
        divResultado = document.getElementById('Proveedores');
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
        
        
         if (codigo == "") {

            $('.validacion').html('<p style="color:red">debe ingresar codigo</p>');
            $("#myModal").effect("shake", {times: 3, distance: 20}, 400);
        } else{
            
        ajax = objetoAjax();
        ajax.open("POST", "controller/provedores_controller.php?op=2", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                divResultado.innerHTML = ajax.responseText;
                 $('#myModal').modal('hide');
                mostrar(); 
                
                 showAlert(" <button type='button' class='close' data-dismiss='alert'>&times;</button>"+
        "<strong>¡Bien!</strong> Dato agregado Correctamente.");
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
       ajax.send("txtPro_codigo=" + codigo+"&txtPro_nombre=" + nombre+"&txtPro_telefono=" + telefono+"&txtPro_direccion=" + direccion+"&txtPro_correo=" + correo+"&txtpagina_web=" + pagina_web);
    
     }
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
                showAlert("<strong>¡Bien!</strong> Dato Modificado Correctamente."+ "<button type='button' class='close' data-dismiss='alert'>&times;</button>");
                $('#myModal').modal('hide');
                mostrar(); 
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send("txtPro_codigo=" + codigo+"&txtPro_nombre=" + nombre+"&txtPro_telefono=" + telefono+"&txtPro_direccion=" + direccion+"&txtPro_correo=" + correo+"&txtpagina_web=" + pagina_web);
    }
    
    
    
    
    function eliminar(id) {
        
     
        $.confirm({
 
       title: 'CONFIRMAR ELIMINACION!',
       text: 'Esta Seguro que Desea Eliminar este Registro',
         confirm:function(){
                divResultado = document.getElementById('resultado');
                ajax = objetoAjax();
                ajax.open("POST", "controller/provedores_controller.php?op=4", true);
                ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                divResultado.innerHTML = ajax.responseText;
                    showAlert( "<button type='button' class='close' data-dismiss='alert'>&times;</button>" +
                                "<strong>Ups</strong> Registro Eliminado con exito  .")
                mostrar(); 
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        ajax.send("txtPro_codigo=" + id);
      
          },
            cancel: function() {}
         });  
    }
    
      function showAlert(msg, cb) {
        $(".alerta").html(msg)
                .fadeIn(500, function() {
                    setTimeout(function() {
                        $(".alerta").fadeOut(1000);
                        cb();
                    }, 3000);
                });
    }