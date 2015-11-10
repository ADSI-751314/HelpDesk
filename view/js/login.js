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
         /*$('[data-toggle="popover"]').popover();
         var username = $("input[name=txtUsername]").val();
         var password = $("input[name=txtPassword]").val();

         if(username.trim() == ""){
             $("input[name=txtUsername]").popover('show');
         }
         else if(password.trim() == ""){
             $('[data-toggle="popover"]').popover('show');
         }
         else{*/
             var action = $(this).attr("action");
             var name = $(this).attr("name");
             var data = $(this).serialize()+"&action="+name;
             var method = $(this).attr("method");

             ajax(action,data,method,loginRequestHandler);
         //}
     });

     function loginRequestHandler(response){
         var alert = $("#alert");
         
         if (response.trim()) {
             alert.addClass("alert-success");
             alert.html("Bienvenido!");
        }else{
             alert.addClass("alert-danger");
             alert.html("Nombre de usuario o contraseña incorrecto!");
        }
        alert.fadeIn(500);
        setTimeout(function (){
            alert.fadeOut(500, function (){
                if (response.trim()) {
                    alert.removeClass("alert-success");
                    window.location.reload();
                }else{
                    alert.removeClass("alert-danger");
                }
            });
        },2000);
     }
 });
