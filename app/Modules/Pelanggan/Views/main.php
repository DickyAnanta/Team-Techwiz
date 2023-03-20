<div class="col-md-12" style="padding-bottom: 150px;width:fit-content;max-width: 100%;">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="tb-<?= strtolower($module); ?>" class="table table-sm table-striped table-hover">
                    <thead>
                        <tr class="th-src">
                            <th></th>
                            <th>nama</th>
                            <th>telepon</th>
                            <td style="text-align:right"><?= (user_ag() == "mobile") ? "<button type='button' id='btn-table-search' class='btn btn-link'><i class='fa-solid fa-magnifying-glass'></i></button>" : "" ?></td>
                        </tr>
                        <tr id="th" data-thd="1">
                            <th></th>
                            <th>Nama Pelanggan</th>
                            <th>Telepon</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>