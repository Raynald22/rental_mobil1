<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Form Update Type Mobil</h1>
        </div>
    </div>

    <?php foreach ($type as $tp) : ?>
        <form method="POST" action="<?= base_url('admin/data_type/update_type_aksi') ?>">

            <div class="form-group">
                <label>Kode Type</label>
                <input type="hidden" name="id_type" value="<?= $tp->id_type ?>">
                <input type="text" name="kode_type" class="form-control" value="<?= $tp->kode_type ?>">
                <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
            </div>

            <div class="form-group">
                <label>Nama Type</label>
                <input type="text" name="nama_type" class="form-control" value="<?= $tp->nama_type ?>">
                <?php echo form_error('nama_type', '<div class="text-small text-danger">', '</div>') ?>
            </div>

            <button class="btn btn-primary mt-4" type="submit">Simpan</button>
            <button class="btn btn-danger mt-4" type="reset">Reset</button>
        </form>

    <?php endforeach; ?>
</div>