$(document).ready(function (e) {
    setInterval(11000);
    $(".loadfrm").click(function () {
        var y = $(this).attr("href");
        var respuesta = $(".content");
        respuesta.load(y);
        return false;
    });
});