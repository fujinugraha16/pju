<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataPJU extends Model
{
    protected $table = 'data_pjus';
    protected $fillable = ["tgl_masuk", "no_surat", "kecamatan", "desa", "alamat", "id_pelanggan", "no_kontak", "ket_kerusakan", "ket_sdh_blm", "tgl_pemeliharaan", "pelaksana"];
}
