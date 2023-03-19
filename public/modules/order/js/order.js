$(document).ready(function () {
    let orderDetailed = {};
    let lastPic = {};

    $(".tambah-menu").on("click", function () {
        const menuId = $(this).data("menuid");
        if (orderDetailed[menuId] === undefined) {
            $.ajax({
                url: BASE_URL + "/menu/detailed_menu",
                type: "GET",
                async: false,
                data: {
                    id: menuId
                },
                success: function (response) {
                    if (isJson(response)) {
                        response = JSON.parse(response);
                        orderDetailed[menuId] = {
                            title: response.title,
                            harga: response.harga,
                            jumlah: 1,
                            total: response.harga
                        };
                        lastPic = {
                            id: menuId,
                            title: response.title,
                            harga: response.harga
                        };
                        refreshOrder();
                    }
                }
            })
        } else {
            const harga = parseInt(orderDetailed[menuId].harga);
            const jumlah = parseInt(orderDetailed[menuId].jumlah) + 1;
            const total = harga * jumlah;

            // Set value
            orderDetailed[menuId].jumlah = jumlah;
            orderDetailed[menuId].total = total;
            $("#total-" + menuId).html(idr(total.toString()));
            $("#" + menuId + " input[name=jumlah]").val(jumlah);
            refreshTotalOrder()
        }
    })

    function refreshOrder() {
        let html = "";
        html += '<div class="row" id="' + lastPic.id + '">';
        html += '<div class="col-2">';
        html += '<button class="btn btn-block btn-danger delete-order-list" data-menuid="' + lastPic.id + '"><i class="fa fa-trash" aria-hidden="true" style="text-align: center;"></i></button>';
        html += '</div>';
        html += '<div class="col-7">';
        html += '<p class="float-left p-0 m-1">' + lastPic.title + ' <br><span class="text-success" id="total-' + lastPic.id + '">' + idr(lastPic.harga) + '</span></p>';
        html += '</div>';
        html += '<div class="row col-3 float-right">';
        html += '<input type="number" class="form-control form-control" name="jumlah"  data-menuid="' + lastPic.id + '" value="1">';
        html += '</div>';
        html += '<div class="input-group p-0 m-3 ">';
        html += '<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="' + lastPic.id + '" placeholder="Masukkan Catatan">';
        html += '</div>';
        html += '</div>';

        $("#detailed-order-list").append(html);
        refreshTotalOrder()
    }

    $("#detailed-order-list").on("keyup mouseup", "input[name=jumlah]", function (params) {
        const id = $(this).data("menuid");
        const harga = orderDetailed[id].harga;
        const jumlah = $(this).val();
        const total = harga * jumlah;

        // Set value
        orderDetailed[id].jumlah = jumlah;
        orderDetailed[id].total = total;
        $("#total-" + id).html(idr(total.toString()));
        refreshTotalOrder()
    })

    $("#detailed-order-list").on("click", ".delete-order-list", function () {
        const id = $(this).data("menuid");
        $("#" + id).remove();
        delete orderDetailed[id];
        refreshTotalOrder()
    });

    function refreshTotalOrder() {
        let total = 0;
        $.each(orderDetailed, function (key, value) {
            total = total + parseInt(value.total);
        })
        $("#total-all-order").html(idr(total.toString()));
    }

    $("#lanjut-order1").on("click", function (params) {
        $("#metode-pembayaran").modal("show");
    })

    $("#lanjut-order2").on("click", function (params) {
        const nama = $("input[name=nama]").val();
        const tlp = $("input[name=tlp]").val();
        const metodepembayaran = $("input[name=metodepembayaran]:checked").val()

        let orderData = {
            menu: orderDetailed,
            pembayaran: {
                nama: nama,
                tlp: tlp,
                metodepembayaran: metodepembayaran
            }
        };

        $("#metode-pembayaran").modal("hide");
        $("#modal-pembayaran").modal("show");

        let totalOrder = 0;
        $("#nama").html(nama);
        $.each(orderDetailed, function (key, value) {
            $("#list-menu").append('<p class="mb-0">' + value.title + '<span class="font-weight-normal float-right">' + idr(value.total.toString()) + '</span></p>');
            totalOrder = totalOrder + parseInt(value.total);
        })

        let pembayaran = "";
        if (metodepembayaran == "kasir") {
            pembayaran = "Langsung Kasir";
        } else if (metodepembayaran == "transfer") {
            pembayaran = "Transfer Bank";
        }

        $("#pembayaran").html(pembayaran);
        $("#total-pembayaran").html(idr(totalOrder.toString()));
    })
})