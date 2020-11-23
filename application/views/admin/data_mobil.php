<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Mobil</h1>
        </div>

        <a href="<?= base_url('admin/data_mobil/tambah_mobil') ?>" class="btn btn-primary mb-3">Tambah Data</a>

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
        <table class="table table-hover table-striped table-border">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Type</th>
                    <th>Merk</th>
                    <th>No.Plat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mobil as $mb) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td>
                            <img width="60px" src="<?= base_url() . 'assets/upload/' . $mb->gambar ?>">
                        </td>
                        <td><?= $mb->kode_type ?></td>
                        <td><?= $mb->merk ?></td>
                        <td><?= $mb->no_plat ?></td>
                        <td><?php
                            if ($mb->status == "0") {
                                echo "<span class='badge badge-danger'>Tidak Tersedia</span>";
                            } else {
                                echo "<span class='badge badge-success'>Tersedia</span>";
                            }
                            ?></td>
                        <td>
                            <a href="<?= base_url('admin/data_mobil/detail_mobil/') . $mb->id_mobil ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                            <a href="<?= base_url('admin/data_mobil/delete_mobil/') . $mb->id_mobil ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            <a href="<?= base_url('admin/data_mobil/update_mobil/') . $mb->id_mobil ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        </td>
                    <?php endforeach; ?>
                    </tr>
            </tbody>
        </table>
    </section>
</div>