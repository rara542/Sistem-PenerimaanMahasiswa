<?= $this->extend('template/index'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tempat/Tanggal lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>No Telp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>