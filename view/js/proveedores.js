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
    
    
    
     function guardar() {
        divResultado = document.getElementById('result');
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
                divResultado.innerHTML = ajax.responseText
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
       ajax.send("txtPro_codigo=" + codigo+"&txtPro_nombre=" + nombre+"&txtPro_telefono=" + telefono+"&txtPro_direccion=" + direccion+"&txtPro_correo=" + correo+"&txtpagina_web=" + pagina_web);
    }

function modificar() {
        divResultado = document.getElementById('result');
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
                divResultado.innerHTML = ajax.responseText
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
       ajax.send("txtPro_codigo=" + codigo+"&txtPro_nombre=" + nombre+"&txtPro_telefono=" + telefono+"&txtPro_direccion=" + direccion+"&txtPro_correo=" + correo+"&txtpagina_web=" + pagina_web);
    }
    
    
    
    
    function eliminar() {
        divResultado = document.getElementById('result');
        var codigo = document.getElementById('txtPro_codigo').value;

        
        
        ajax = objetoAjax();
        ajax.open("POST", "controller/provedores_controller.php?op=4", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                divResultado.innerHTML = ajax.responseText
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
       ajax.send("txtPro_codigo=" + codigo);
    }