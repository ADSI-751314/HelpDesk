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
        $(".menu").siblings("ul").slideUp(200);
        $(".menu").removeClass("active-menu");
        $(".menu").children("i:last-child").removeClass("fa-chevron-up");
        $(".menu").children("i:last-child").addClass("fa-chevron-down");
        if (!$(this).hasClass("active-menu")){
            $(this).children("i:last-child").removeClass("fa-chevron-down");
            $(this).children("i:last-child").addClass("fa-chevron-up");
            $(this).addClass("active-menu");
            $(this).siblings("ul").slideDown(200);
        }else{
            $(this).removeClass("active-menu");
            $(this).siblings("ul").slideUp(200);
        }
    });
    
    //-----------------Control de efectos login-------------------
    $(".txt-login").on("focus",function (){
        $(this).siblings(".fa").addClass("active-fa");
    });
    $(".txt-login").on("blur",function (){
        $(this).siblings(".fa").removeClass("active-fa");
    });
});