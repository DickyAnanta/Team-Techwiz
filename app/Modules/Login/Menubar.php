<div class="col">
    <h3><?= ($method == 'index') ? 'List' : ucfirst(str_replace('_', '', $method)); ?> <?= strtolower(str_replace('_', '', $module)); ?></h3>
</div>
<div class="col-auto">
    <?php
    $disabled_offset = [];
    $disabled = "";
    if (($method != "edit") || in_array($method, $disabled_offset)) {
        $disabled = "disabled";
    }
    ?>
    <button title="Simpan" class="btn btn-link <?= $disabled; ?>" id="menubar-save">
        <i class="fas fa-lg fa-save"></i>
    </button>
    <?php
    $disabled_offset = [];
    $disabled = "";
    if (($method == "edit") || in_array($method, $disabled_offset)) {
        $disabled = "disabled";
    }
    ?>
    <a title="Tambah" class="btn btn-link <?= $disabled; ?>" href="<?= base_url() . "/" . strtolower($module) . "/edit" ?>">
        <i class="fas fa-lg fa-plus-circle"></i>
    </a>
</div>