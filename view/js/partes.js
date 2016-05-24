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



function cargarAgregar() {
          // document.getElementById('resultado').style.display = 'block';
                divResultado = document.getElementById('ProveedoresF');
               
            
                ajax = objetoAjax();
                ajax.open("POST", "controller/partes_controller.php?op=0", true);
                ajax.onreadystatechange = function () {
                    if (ajax.readyState == 4) {
                        divResultado.innerHTML = ajax.responseText;
                   
                    }
                }
                ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                ajax.send( );
            }
    
    
 function guardar() {
        divResultado = document.getElementById('resultado');
        var serial = document.getElementById('txtSerial').value;
        var marca = document.getElementById('txtMarca').value;
        var descripcion = document.getElementById('txtDescripcion').value;
        var estado = document.getElementById('txtEstado').value;
        var fk_cod_equipo = document.getElementById('txtFk_equipo').value;
        var fk_cod_historial = document.getElementById('txtFk_historial').value;
        
        
        ajax = objetoAjax();
        ajax.open("POST", "controller/partes_controller.php?op=1", true);
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4) {
                divResultado.innerHTML = ajax.responseText;
 }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
       ajax.send("txtSerial=" + serial+"&txtMarca=" +marca+"&txtDescripcion=" + descripcion+"&txtEstado=" +estado+"&txtFk_equipo=" + fk_cod_equipo+"&txtFk_historial=" +fk_cod_historial );
    
     }