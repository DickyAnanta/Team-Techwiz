var dataTableDisabledOrderCol = [];
var dataTableColNoWrap = [];
var dataTableColRight = [];
var dataTableColLeft = [];
var dataTableColCenter = [];

function initDataTable(disabledOrderCol, colNoWrap, colRight, colLeft, colCenter) {
    dataTableDisabledOrderCol = disabledOrderCol;
    dataTableColNoWrap = colNoWrap;
    dataTableColRight = colRight;
    dataTableColLeft = colLeft;
    dataTableColCenter = colCenter;
}

$(document).ready(function () {
    const STORAGE_QUERY = "WHERECLAUSE_" + jsURI[1].toUpperCase();
    const TABLE_SRCS = "TABLE_SRCS_" + jsURI[1].toUpperCase();

    $('#tb-' + jsURI[1] + ' thead .th-src th').each(function () {
        var title = $(this).text();
        var type = $(this).data("type");
        if (type === undefined) {
            type = "text";
        }

        var inputSrc = '';
        title = title.replace('.', '-');
        if (title != '') {
            if (type == "datetimerange") {
                inputSrc = '<div class="inHvr" title="Colum Name : [' + title.replace('-', '.') + ']" id="hvr-' + title + '">';
                inputSrc += '<input class="form-control form-control-border field-col-search float-right table-datetimerange" name="' + title + '" id="col-' + title + '" value="" type="text" data-type="daterange">';
                inputSrc += '</div>';
            } else {
                inputSrc = '<div class="inHvr" title="Colum Name : [' + title.replace('-', '.') + ']" id="hvr-' + title + '">';
                inputSrc += '<input class="form-control form-control-border field-col-search" name="' + title + '" id="col-' + title + '" type="' + type + '" />';
                inputSrc += '</div>';
            }

            $(this).html(inputSrc);
        }
    });
    $('.table-datetimerange').daterangepicker({
        autoUpdateInput: false,
        timePicker: true,
        locale: {
            cancelLabel: 'Clear',
            timePicker: true,
            format: 'YYYY/MM/DD HH:mm:ss'
        }
    });
    $('.table-datetimerange').on('apply.daterangepicker', function (ev, picker) {
        $(this).val(picker.startDate.format('YYYY/MM/DD HH:mm:ss') + ' - ' + picker.endDate.format('YYYY/MM/DD HH:mm:ss'));
        const buildWhereClause = buildTableWhereclause("table");
        refreshTable(buildWhereClause);
    });

    $('.table-datetimerange').on('cancel.daterangepicker', function (ev, picker) {
        $(this).val('')
        picker.setStartDate({})
        picker.setEndDate({})
        const buildWhereClause = buildTableWhereclause("table");
        refreshTable(buildWhereClause);
    });


    //Start State
    let sessionWhereclause = localStorage.getItem(STORAGE_QUERY);
    if (sessionWhereclause == null || sessionWhereclause == "null") {
        sessionWhereclause = "";
    }
    let sessionScheme = localStorage.getItem(TABLE_SRCS);

    if (sessionScheme == null || sessionScheme == "null" || sessionScheme == "{}") {
        sessionScheme = "";
    }
    var lastCoolSearch = "";

    if (sessionScheme) {
        if (isJson(sessionScheme)) {
            let loop = 0;
            $.each(sessionScheme = JSON.parse(sessionScheme), function (i) {
                if (i != "") {
                    $("#col-" + i).val(sessionScheme[i])

                    if (loop == 0) {
                        lastCoolSearch = i;
                    }
                    loop += 1;
                }
            })
        }
    }
    if ($('#tb-' + jsURI[1]).html() != undefined) {
        refreshTable(sessionWhereclause);
    }
    if (lastCoolSearch) {
        $("input[name=" + lastCoolSearch + "]").select();
    }

    $("#btn-allRecords").on("click", function () {
        localStorage.removeItem(STORAGE_QUERY);
        localStorage.removeItem(TABLE_SRCS);
        if (jsURI[2] == "main") {
            refreshTable("");
            $('.field-col-search').each(function () {
                $(this).val("");
            })
        } else {
            window.location.replace(BASE_URL + jsURI[1] + "/main");
        }
    });
    // End State

    function buildTableWhereclause(source = "") {
        var ret = [];
        if (source === "table") {
            var scheme = {};
            let loop = 0;
            $('.field-col-search').each(function () {
                if ($(this).val()) {
                    scheme[$(this).attr("name")] = $(this).val();
                    ret[loop] = {
                        "column": bin2hex($(this).attr("name")),
                        "value": $(this).val()
                    }
                    if ($(this).data("type") == "daterange") {
                        ret[loop].type = "between";
                    }

                }
                loop += 1;
            });
        } else if (source === "query") {
            ret = $('#where-clause-view').val();
        }

        if ($("#clear-filtering").hasClass("disabled")) {
            $('#clear-filtering').removeClass('disabled');
        }

        $.ajax({
            type: "GET",
            url: BASE_URL + jsURI[1] + "/check_query",
            async: false,
            data: {
                search: ret,
                row_status: jsURI[2] == "main_history" ? 2 : 1,
            },
            success: function (res) {
                localStorage.setItem(TABLE_SRCS, JSON.stringify(scheme));
                if (isJson(res)) {
                    var res = JSON.parse(res);
                    if (res.response) {
                        ret = res.whereclause;
                    } else {
                        var message = errBook['DB004014'] + res.error.code + ' - ' + res.error.message;
                        alert(true, 'DB004014', message, 'error');
                    }
                }
            }
        });

        return ret;
    }

    function tableData(whereclause = null) {
        $('#where-clause-view').html(whereclause);
        $('#where-clause-view').val(whereclause);
        if (whereclause) {
            $('#clear-filtering').removeClass('disabled');
        }

        $('#tb-' + jsURI[1]).DataTable({
            "processing": true,
            "serverSide": true,
            "searching": false,
            "ajax": {
                url: BASE_URL + jsURI[1] + "/table_main",
                type: "GET",
                data: {
                    whereclause: whereclause,
                    row_status: jsURI[2] == "main_history" ? 2 : 1,
                }
            },
            "fnDrawCallback": function (response) {
                response = response.json;
                localStorage.setItem(STORAGE_QUERY, whereclause);

                loader.style.display = "none";
            },
            "columnDefs": [{
                "targets": dataTableDisabledOrderCol,
                "orderable": false
            },
            {
                "targets": dataTableColNoWrap,
                "className": 'colum-nowrap'
            },
            {
                "targets": dataTableColRight,
                "className": 'colum-right'
            },
            {
                "targets": dataTableColLeft,
                "className": 'colum-left'
            },
            {
                "targets": dataTableColCenter,
                "className": 'colum-center'
            },
            ],
            // "order": []
        });
    }

    function refreshTable(buildWhereClause) {
        loader.style.display = "block";
        $('#tb-' + jsURI[1]).DataTable().destroy();
        tableData(buildWhereClause);
    }

    function clearTableSearch() {
        $('.field-col-search').each(function () {
            $(this).val("");
        });
    }

    // Start button clear and referh table
    $('#clear-filtering').on('click', function () {
        if (!$("#clear-filtering").hasClass("disabled")) {
            $('#clear-filtering').addClass('disabled');
            clearTableSearch();
            $('#where-clause-view').html('');
            $('#where-clause-view').val('');
            refreshTable("");
        }
    });

    $(".field-col-search").keyup(function (event) {
        if (event.keyCode === 13) {
            const buildWhereClause = buildTableWhereclause("table");
            refreshTable(buildWhereClause);
            $("#col-" + $(this).attr("name")).select();
        }
    })

    $("#btn-table-search").on("click", function () {
        if ($("#clear-filtering").hasClass("disabled")) {
            $('#clear-filtering').removeClass('disabled');
        }

        const buildWhereClause = buildTableWhereclause("table");
        refreshTable(buildWhereClause);
    })

    $("#excute-whereclauseuser").on('click', function () {
        const buildWhereClause = buildTableWhereclause("query");
        if (jsURI[2] != "main") {
            localStorage.setItem(STORAGE_QUERY, buildWhereClause);
            window.location.replace(BASE_URL + jsURI[1] + "/main");
        }

        clearTableSearch();
        refreshTable(buildWhereClause);
        $('#modal-where-clause').modal('toggle');
    });
    // End button clear and referh table
})