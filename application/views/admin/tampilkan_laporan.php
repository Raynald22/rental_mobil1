<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Laporan Transaksi</h1>
        </div>
    </section>
    <form method="POST" action="<?= base_url('admin/laporan') ?>">
        <div class="form-group">
            <label>Dari Tanggal</label>
            <input type="date" name="dari" class="form-control">
            <?= form_error('dari', '<span class="text-small text-danger"></span>') ?>
        </div>
        <div class="form-group">
            <label>Sampai Tanggal</label>
            <input type="date" name="sampai" class="form-control">
            <?= form_error('sampai', '<span class="text-small text-danger"></span>') ?>
        </div>
        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Tampilkan Data</button>
    </form>
    <hr>
    <div class="btn-group">
        <a href="<?= base_url() . 'admin/laporan/print_laporan/?dari=' . set_value('dari') . '&sampai=' . set_value('sampai') ?>" target="_blank" class="btn btn-sm btn-success"><i class="fa fa-print"></i> Print</a>
    </div>


    <div class="table-responsive mt-3">
        <table class="table table-bordered table-striped">
            <tr>
                <th>No</th>
                <th>Customer</th>
                <th>Mobil</th>
                <th>Tanggal Rental</th>
                <th>Tanggal Kembali</th>
                <th>Harga/Hari</th>
                <th>Denda/Hari</th>
                <th>Total Denda</th>
                <th>Tanggal Dikembalikan</th>
                <th>Status Pengembalian</th>
                <th>Status Rental</th>
            </tr>

            <?php $no = 1;
            foreach ($laporan as $tr) : ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $tr->nama ?></td>
                    <td><?= $tr->merk ?></td>
                    <td><?= date('d/m/Y', strtotime($tr->tanggal_rental)); ?></td>
                    <td><?= date('d/m/Y', strtotime($tr->tanggal_kembali)); ?></td>
                    <td>Rp.<?= number_format($tr->harga, 0, ',', '.')  ?></td>
                    <td>Rp.<?= number_format($tr->denda, 0, ',', '.')  ?></td>
                    <td>Rp.<?= number_format($tr->total_denda, 0, ',', '.')  ?></td>
                    <td>
                        <?php
                        if ($tr->tanggal_pengembalian == "0000-00-00") {
                            echo "-";
                        } else {
                            echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                        }
                        ?>
                    </td>
                    <td><?= $tr->status_pengembalian ?></td>
                    <td><?= $tr->status_rental ?></td>
                </tr>

            <?php endforeach; ?>
        </table>
    </div>
</div>