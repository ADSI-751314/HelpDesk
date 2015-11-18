 $(function () {

     //-----------------Control de efectos-------------------

     $(".txt-login").on("focus",function (){
         $(this).parent().prev().addClass("active-fa");
         $(this).parent().prev().css("color", "rgb(255,255,255)");
     });
     $(".txt-login").on("blur",function (){
         $(this).parent().prev().removeClass("active-fa");
         if($(this).val() !== "") {
             $(this).parent().prev().css("color", "rgb(23, 170, 86)");
         }else{
             $(this).parent().prev().css("color", "rgb(255,255,255)");
         }
     });

     //-----------------Funcionalidad-----------------

     $("form").on("submit", function (e) {
         e.preventDefault();

         var username = $("input[name=txtUsername]").val();
         var password = $("input[name=txtPassword]").val();

         if(username.trim() == ""){
             $("#txtUsu").popover({
                 placement: 'right',
                 html: true,
                 content: "<i class='fa fa-exclamation-circle fa-lg'></i> Campo requerido.",
                 trigger: 'manual',
             }).focus(function () {
                 $(this).popover('destroy');
             });

             $("#txtUsu").popover('show');
         }
         else if(password.trim() == ""){
             $("#txtPass").popover({
                 placement: 'right',
                 html: true,
                 content: "<i class='fa fa-exclamation-circle fa-lg'></i> Campo requerido.",
                 trigger: 'manual',
             }).focus(function () {
                 $(this).popover('destroy');
             });

             $("#txtPass").popover('show');
         }
         else{
             var action = $(this).attr("action");
             var name = $(this).attr("name");
             var data = $(this).serialize()+"&action="+name;
             var method = $(this).attr("method");

             ajax(action,data,method,loginRequestHandler);
         }
     });

     function loginRequestHandler(response){
         var alert = $("#alert");
         
         if (response.trim()) {
             $(".txtBox").addClass("login-success");
             alert.addClass("alert-success");
             alert.html("Bienvenido!");
        }else{
             $(".txtBox").addClass("login-fail");
             alert.addClass("alert-danger");
             alert.html("Nombre de usuario o contraseña incorrecta!");

             $(".txtBox").on("click",function () {
                 $(".txtBox").removeClass("login-fail");
             });
        }
        alert.fadeIn(1000).fadeOut(3000, function (){
            if (response.trim()) {
                alert.removeClass("alert-success");
                window.location.reload();
            }else{
                alert.removeClass("alert-danger");
            }
        });
     }
 });
