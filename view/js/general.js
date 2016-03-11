jQuery.fn.useClass = function (className, callback){
    var active = document.getElementsByClassName(className);
    if (active.length) {
        if (typeof  callback === 'function'){
            callback($(active[0]));
        }
        $(active[0]).removeClass(className);
    }
    this.addClass(className);
};

jQuery.fn.alterClass = function (rClass, aClass){
    this.removeClass(rClass);
    this.addClass(aClass);
};

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

        loadScript($(this));
        $('#top-bar-title').html($(this).find('span').html());
    });
    
    $(".menu-item2").on("click",function (e){
        e.preventDefault();
        loadScript($(this));
        loadForm(this.getAttribute('href'));
        $(this).useClass('active-menu');
        $('#top-bar-title').html($(this).find('span').html());
    });

    $("#menu-toggle").on("click",function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(".submenu-item").on("click",function (e) {
        e.preventDefault();
        loadForm(this.getAttribute('href'));
        $(this).useClass("active-submenu");
    });

    $("#logout").on("click", function() {
        ajax("controller/login_controller.php", "action=logout", "POST", logoutHandler);
    });

    /*---------------------------End Event Listeners------------------------*/
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

function loadForm(href){
    $("#form-container").load(href);
}

function loadScript(el){
    var fileName = el.data("script");
    var scripts = $('script');
    var src = null;
    var title = null;

    for (var i = scripts.length -1; i >= 0; i--){
        src = scripts[i].src;
        title = src.substring(src.lastIndexOf('/') +1, src.length -3);
        if (fileName === title){
            return;
        }
    }

    if (fileName !== '' && typeof fileName !== 'undefined') {
        var script = document.createElement('script');
        script.setAttribute("type","text/javascript");
        script.setAttribute("src", '/HelpDesk/view/js/'+fileName+ '.js');
        if (typeof script!== "undefined")
            document.getElementsByTagName("head")[0].appendChild(script);
    }
}

function showSubmenu(menu){
    menu.children().last().alterClass("fa-angle-down","fa-angle-up");
    menu.useClass("active-menu", function(element){
        if (!element.hasClass('menu-item2')){
            element.siblings("ul").slideUp(200);
            element.children().last().alterClass("fa-angle-up","fa-angle-down");
        }
    });
    menu.siblings("ul").slideDown(200);
}

function hideSubmenu(menu){
    menu.children().last().alterClass("fa-angle-up","fa-angle-down");
    menu.removeClass("active-menu");
    menu.siblings("ul").slideUp(200);
}

function logoutHandler(data){
    window.location.reload();
}
