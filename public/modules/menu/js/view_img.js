$(document).ready(function () {
    $("#tb-" + jsURI[1]).on("click", ".images img", function (e) {
        $("#full-image").attr("src", $(this).attr("src"));
        $('#image-viewer').show();
    });

    $("#image-viewer .close").click(function () {
        $('#image-viewer').hide();
    });
})