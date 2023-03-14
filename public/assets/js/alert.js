$(document).ready(function () {
    const title = $("#alert-data").attr("title");
    const type = $("#alert-data").attr("type");
    const message = $("#alert-data").attr("message");
    const cobtn = $("#alert-data").attr("cobtn");
    const redirect = $("#alert-data").attr("redirect");
    const redirectTo = $("#alert-data").attr("redirect-to");
    let timer = 0;
    if (!cobtn) {
        timer = 2000;
    }

    if (title != "") {
        Swal.fire({
            title: title,
            text: message,
            type: type,
            showConfirmButton: cobtn,
            confirmButtonColor: "rgb(221, 51, 51)",
            confirmButtonText: 'Ok',
            timer: timer,
        })

        if (redirect) {
            setTimeout(() => {
                window.location.replace(BASE_URL + redirectTo);
            }, 2500);
        }
    }
})