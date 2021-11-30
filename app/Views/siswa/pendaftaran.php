<?= $this->section('content'); ?>

<!-- <body>
    <div class="container p-4 my-3 border"> -->
<h1 class="text-cen">Form Pendaftaran Mahasiswa Baru</h1>
<form id="form" method="post">
    <div class="alert bg-primary">
        <strong class="text-white">Data Diri</strong>
    </div>
    <div class="row">
        <div class="col-sm-7">

            <div class="form-group">
                <label>Nama Lengkap:</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <label>Nomor Identitas (NIK):</label>
                <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor NIK">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>Tempat Lahir:</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Tanggal Lahir:</label>
                <input type="date" name="tanggal_lahir" class="form-control">
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <select class="form-control" name="jk">
                    <option>Pilih</option>
                    <option value="1">Laki-laki</option>
                    <option value="2">Perempuan</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-4">
            <div class="form-group">
                <label>Kewarganegaraan:</label>
                <select class="form-control" name="kewarganegaraan">
                    <option>Pilih</option>
                    <option value="WNI">Warga Negara Indonesia</option>
                    <option value="WNA">Warga Negara Asing</option>
                </select>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Agama:</label>
                <select class="form-control" name="agama">
                    <option>Pilih</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <label>Nama Ibu Kandung:</label>
                <input type="text" name="nama_ibu" class="form-control" placeholder="Masukan Nama Ibu Kandung">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Masukan Email">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>No Telp:</label>
                <input type="text" name="no_telp" class="form-control" placeholder="Masukan No Telp">
            </div>
        </div>
    </div>
    <div class="alert alert-primary">
        <strong>Data Alamat Asal</strong>
    </div>
    <div class="row">
        <div class="col-sm-5">
            <div class="form-group">
                <label>Alamat:</label>
                <textarea class="form-control" name="alamat" rows="2" id="alamat"></textarea>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label>Kode Pos:</label>
                <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>Provinsi:</label>
                <select class="form-control" name="provinsi" id="provinsi">
                    <?php
                    include "koneksi.php";
                    //Perintah sql untuk menampilkan semua data pada tabel provinsi
                    $sql = "select * from provinsi";
                    $hasil = mysqli_query($kon, $sql);
                    while ($data = mysqli_fetch_array($hasil)) {
                    ?>
                        <option value="<?php echo $data['id_prov']; ?>">
                            <?php echo $data['nama']; ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Kabupaten:</label>
                <select class="form-control" name="kabupaten" id="kabupaten">
                    <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Kecamatan:</label>
                <select class="form-control" name="kecamatan" id="kecamatan">
                    <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
                </select>
            </div>
        </div>

    </div>
    <script>
        $("#provinsi").change(function() {
            // variabel dari nilai combo provinsi
            var id_provinsi = $("#provinsi").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "ambil-data.php",
                data: "provinsi=" + id_provinsi,
                success: function(data) {
                    $("#kabupaten").html(data);
                }
            });
        });

        $("#kabupaten").change(function() {
            // variabel dari nilai combo box kabupaten
            var id_kabupaten = $("#kabupaten").val();

            // Menggunakan ajax untuk mengirim dan dan menerima data dari server
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "ambil-data.php",
                data: "kabupaten=" + id_kabupaten,
                success: function(data) {
                    $("#kecamatan").html(data);
                }
            });
        });
    </script>
    <div class="alert alert-primary">
        <strong>Data Pendidikan</strong>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>Pendidikan Terakhir:</label>
                <select class="form-control" name="pendidikan">
                    <option value="SMA-IPA">SMA - IPA</option>
                    <option value="SMA-IPS">SMA - IPS</option>
                    <option value="SMK-IPA">SMK - IPA</option>
                    <option value="SMK-IPS">SMK - IPS</option>
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Nama Sekolah:</label>
                <input type="text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Rata-rata Nilai Rapor Kelas 12:</label>
                <input type="text" name="nilai_raport" class="form-control" placeholder="Masukan Rata-rata nilai raport">
            </div>
        </div>
    </div>
    <div class="alert alert-primary">
        <strong>Pilihan Program Studi</strong>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label>Pilih Program Studi 1:</label>
                <select class="form-control" name="prog1">
                    <option value="D3 - Teknik Komputer">D3 - Teknik Komputer</option>
                    <option value="D3 - Komputerisasi Akuntansi">D3 - Komputerisasi Akuntansi</option>
                    <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
                    <option value="S1 - Sistem Informasi">SI - Sistem Informasi</option>
                    <option value="S1 - Teknik Informatika">SI - Teknik Informatika</option>
                </select>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label>Pilih Program Studi 2:</label>
                <select class="form-control" name="prog2">
                    <option value="D3 - Teknik Komputer">D3 - Teknik Komputer</option>
                    <option value="D3 - Komputerisasi Akuntansi">D3 - Komputerisasi Akuntansi</option>
                    <option value="D3 - Manajemen Informatika">D3 - Manajemen Informatika</option>
                    <option value="S1 - Sistem Informasi">SI - Sistem Informasi</option>
                    <option value="S1 - Teknik Informatika">SI - Teknik Informatika</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>

    </div>
</form>
</div>
<!-- <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/sb-admin-2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body> -->


<?= $this->endSection(); ?>