$(document).ready(function (e) {

    $(".menu").click(function () {
        var y = $(this).attr("href");
        var respuesta = $(".content");
        respuesta.load(y);
        return false;
    });
    
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
    
    //-----------------Control de efectos login-------------------
    $(".txt-login").on("focus",function (){
        $(this).siblings(".fa").addClass("active-fa");
    });
    $(".txt-login").on("blur",function (){
        $(this).siblings(".fa").removeClass("active-fa");
    });
});

//obj: objeto al que se le alterara el atributo clase
//reCl: clase que será eliminada
//adCl: clase que reemplazará la anterior
function alterClass(obj,reCl,adCl){
    obj.removeClass(reCl);
    obj.addClass(adCl);
};