<div class="main-content">
    <div class="section">
        <div class="section-header">
            <h1>Data Type</h1>
        </div>
    </div>

    <a href="<?= base_url('admin/data_type/tambah_type') ?>" class="btn btn-primary mb-3">Tambah Type</a>

    <?php if ($this->session->flashdata('pesan')) : ?>
        <script>
            swal({
                title: "Done",
                text: "<?php echo $this->session->flashdata('pesan'); ?>",
                icon: 'success',
                button: "Nice"
            });
        </script>
    <?php endif; ?>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th width="20px">No</th>
                <th>Kode Type</th>
                <th>Nama Type</th>
                <th width="180px">Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;
            foreach ($type as $tp) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tp->kode_type ?></td>
                    <td><?php echo $tp->nama_type ?></td>
                    <td>
                        <a href="<?= base_url('admin/data_type/delete_type/') . $tp->id_type ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                        <a href="<?= base_url('admin/data_type/update_type/') . $tp->id_type ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>