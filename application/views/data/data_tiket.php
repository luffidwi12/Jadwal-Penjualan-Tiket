<div class="container">
    <?php if($this->session->flashdata('flash')) : ?>
                <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data tiket <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                        <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                        <span aria-hidden="true"></span> 
                        </button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <a href="<?= base_url('data/tambah') ?>" class="btn btn-primary">Tambah Data Tiket</a> |
    <a href="<?= base_url('data/mpdf')?>" class="btn btn-warning" target="blank">Print Data Tiket</a> |
    <a href="<?= base_url('data/excel')?>" class="btn btn-success">Export to Excel</a>
    <br><br>
<table class="table table-striped table-hover">
    <tr>
        <th>NO</th>
        <th>ASAL</th>
        <th>TUJUAN</th>
        <th>TANGGAL</th>
        <th>JADWAL</th>
        <th>HARGA</th>
        <th>SEAT</th>
        <th>JAM KEBERANGKATAN</th>
        <th>AKSI</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach($tiket as $tk): ?>
    <tr>
        <td><?= $i; ?></td>
        <td><?= $tk['asal']; ?></td>
        <td><?= $tk['tujuan']; ?></td>
        <td><?= $tk['tanggal']; ?></td>
        <td><?= $tk['jadwal']; ?></td>
        <td><?= $tk['harga']; ?></td>
        <td><?= $tk['seat']; ?></td>
        <td><?= $tk['j_keberangkatan']; ?></td>
        <td>
            <a href="<?= base_url(); ?>data/ubah/<?= $tk['id_tiket']; ?>" class="btn btn-success">Ubah</a>
            <a href="<?= base_url(); ?>data/hapus/<?= $tk['id_tiket']; ?>" class="btn btn-danger float-right" onclick="return confirm('yakin?');">Hapus</a>
        </td>
    </tr>
    <?php $i++ ?>
    <?php endforeach; ?>

</table>
</div>
