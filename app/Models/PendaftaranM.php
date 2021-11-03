<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftaranM extends Model
{
    //protected $DBGroup              = 'default';
    protected $table                = 'calon_mahasiswa';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['id','users_id','id_mahasiswa', 'jenis_kelamin', 'rt', 'rw', 'kelurahan', 'kode_pos', 'nisn', 'nim', 'tempat_lahir', 'tanggal_lahir', 'nama_mahasiswa', 'nama_ayah', 'tanggal_lahir_ayah', 'nik_ayah', 'id_jenjang_pendidikan', 'id_pekerjaan_ayah', 'id_penghasilan_ayah', 'nama_ibu_kandung', 'tanggal_lahir_ibu', 'nik_ibu', 'id_jenjang_pendidikan_ibu', 'id_pekerjaan_ibu', 'id_pekerjaan_ibu', 'id_penghasilan_ibu', 'nama_wali', 'tanggal_lahir_wali', 'id_jenjang_pendidikan_wali', 'id_pekerjaan_wali', 'id_jenjang_pendidikan_wali_copy1', 'id_penghasilan_wali','id_jenjang_pendidikan_wali_copy1', 'id_pekerjaan_wali', 'telepone', 'handphone', 'e-mail', 'id_agama', 'kewarganegaraan'];


}
