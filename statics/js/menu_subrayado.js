$(document).ready(function() {
    $("#cssmenu li").on("click", function() {
        $("#cssmenu li").removeClass("active");
        $(this).addClass("active");
    });
});