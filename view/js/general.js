$(function() {

    //-----------------Control de efectos menu principal-------------------

    $(".user").on("click",function(){
        $(".usr-options").slideToggle("fast");
        $(this).toggleClass("active-header");
    });
    $(".usr-options").on("click",function (){
        $(this).slideUp(200);
        $(".user").removeClass("active-usr");
    });
    
    $(".menu").on("click",function (){
        if (!$(this).hasClass("active-menu")){
            var objMenu = $(".menu");
            objMenu.siblings("ul").slideUp(200);
            objMenu.removeClass("active-menu");
            alterClass(objMenu.children("i:last-child"),"fa-chevron-up","fa-chevron-down");
            alterClass($(this).children("i:last-child"),"fa-chevron-down","fa-chevron-up")
            $(this).addClass("active-menu");
            $(this).siblings("ul").slideDown(200);
        }else{
            alterClass($(this).children("i:last-child"),"fa-chevron-up","fa-chevron-down")
            $(this).removeClass("active-menu");
            $(this).siblings("ul").slideUp(200);
        }
    });
    
    $(".submenu > li").on("click",function (){
        $(".submenu > li").removeClass("active-sm");
        $(this).addClass("active-sm");
    });

    //----------------------------------Funcionalidad----------------------------

    $(".menu").click(function () {
        var html_form = $(this).attr("href");
        var container = $(".content");
        container.load(html_form);
        return false;
    });

    //Funcion para cambiar clases
    //obj: elemento html
    //reCl: clase que será eliminada
    //adCl: clase que reemplazará la anterior
    function alterClass(obj,reCl,adCl){
        obj.removeClass(reCl);
        obj.addClass(adCl);
    };
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

