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

jQuery.extend({
    getScript: function(url, callback) {
        var head = document.head;
        var script = document.createElement("script");
        script.src = url;
        
        {
            var done = false;
            script.onload = script.onreadystatechange = function() { 
                if ( !done && (!this.readyState || this.readyState === "loaded" || this.readyState === "complete") ) {
                    done = true;
                    if (callback) { callback(); }
                    script.onload = script.onreadystatechange = null;
                }
            };
        }
        head.appendChild(script);		
        return undefined;
    }
});

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

        loadScript($(this).data("script"));
        $('#top-bar-title').html($(this).find('span').html());
    });
    
    $(".menu-item2").on("click",function (e){
        e.preventDefault();
        loadForm($(this));
        $(this).useClass('active-menu');
        $('#top-bar-title').html($(this).find('span').html());
    });

    $("#menu-toggle").on("click",function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

    $(".submenu-item").on("click",function (e) {
        e.preventDefault();
        loadForm($(this));
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

function loadForm(el){
    $.get(el.attr('href'))
        .done( function (responseText) {
            $("#form-container").html($.parseHTML(responseText));
        })
        .done( function (){
            var fn = el.data("script");
            var scripts = $('script');
            var src = null;
            var title = null;

            if (fn !== '' && typeof fn !== 'undefined') {
                for (var i = scripts.length -1; i >= 0; i--){
                    src = scripts[i].src;
                    title = src.substring(src.lastIndexOf('/') +1, src.length -3);
                    if (fn === title){
                        window[fn]();
                        return;
                    }
                }

                loadScript(fn);
            }
        });
}

function loadScript(fn) {
    if (fn !== '' && fn !== undefined) {
        $.getScript('/HelpDesk/view/js/' +fn+ '.js', function () {
            if (window[fn]) {
                window[fn]();
            }
        });
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
