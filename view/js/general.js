$(function() {
    
    /*---------------------------Event Listeners------------------------*/
    $("#sidebar-heading").on("click",function () {
        $(this).toggleClass("active-profile");
    });
    
    $(".menu-item").on("click",function (e){
        e.preventDefault();
        if (!$(this).hasClass("active-menu")){
            showSubmenu($(this));
        }else{
            hideSubmenu($(this));
        }
        loadJS('highcharts.js');
        setTimeOut(function(){
            
            loadJS('reportes.js');
        },5000);
        
    });

    $("#menu-toggle").on("click",function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(".submenu-item").on("click",function (e) {
        e.preventDefault();
        var href = $(this).attr("href");
        var container = $("#form-container");
        container.load(href);

        $(".submenu-item").removeClass("active-submenu");
        $(this).addClass("active-submenu");
    });

    $("#logout").on("click", function() {
        ajax("controller/login_controller.php", "action=logout", "POST", logoutHandler);
    });

    /*---------------------------End Event Listeners------------------------*/

    /*---------------------------Functions------------------------*/

    /*Funcion para cambiar clases
    Parametros:
    obj: elemento html
    reCl: clase que será eliminada
    adCl: clase nueva*/
    function alterClass(obj,reCl,adCl){
        obj.removeClass(reCl);
        obj.addClass(adCl);
    }

    function showSubmenu(menu){
        var menuItems = $(".menu-item");

        menuItems.siblings("ul").slideUp(200);
        menuItems.removeClass("active-menu");
        alterClass(menuItems.children("i:last-child"),"fa-angle-up","fa-angle-down");

        alterClass(menu.children("i:last-child"),"fa-angle-down","fa-angle-up")
        menu.addClass("active-menu");
        menu.siblings("ul").slideDown(200);
    }

    function hideSubmenu(menu){
        alterClass(menu.children("i:last-child"),"fa-angle-up","fa-angle-down")
        menu.removeClass("active-menu");
        menu.siblings("ul").slideUp(200);
    }

    function logoutHandler(data){
        window.location.reload();
    }
    /*---------------------------End Functions------------------------*/
});


function ajax(url,data,method,callback){
    $.ajax({
        url: url,// URL para la petición
        data: data,// Información a enviar
        type: method,// Especifica si será una petición POST o GET
        beforeSend: function () {
            // Antes de que se complete la petición
        },
        success: function(response){
            // Si la petición es satisfactoria
            callback(response);
        },
        error: function(){
            // Si la petición falla
        }
    });
}

function loadJS(fileName){
    var script = document.createElement('script');
    script.setAttribute("type","text/javascript");
    script.setAttribute("src", '/HelpDesk/view/js/'+fileName);
    if (typeof script!="undefined")
        document.getElementsByTagName("head")[0].appendChild(script);
}

