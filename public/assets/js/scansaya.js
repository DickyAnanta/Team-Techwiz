function success(result) {
    console.log("OKe ya")
    $("#modal-qr-camera").modal("toggle");
}


$("#modal-qr-camera").on("hidden.bs.modal", function () {
    scanner.clear();
    documment.getElementById('reader').remove();
})

const scanner = new Html5QrcodeScanner("reader", {
    qrbox: {
        width: 250,
        height: 200,
    },
    formatsToSupport: [
        Html5QrcodeSupportedFormats.QR_CODE
    ],
    fps: 20
});

$("#modal-qr-camera").on("shown.bs.modal", function () {
    scanner.render(success, error);
    $("#reader__dashboard_section_csr").hide();
})

function error(err) {
    console.error(err);
}