$(function () {
    $("form").on("submit", function (e) {
        e.preventDefault();
        var action = $(this).attr("action");
        var name = $(this).attr("name");
        var data = $(this).serialize() + "&petition=" + name;
        var method = $(this).attr("method");

        ajax(action, data, method, loginRequestHandler);

    });
    

    function loginRequestHandler(response) {
        alert(response);
    }
});





