<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datapemohon extends Model
{
    protected $table = 'datapemohons';
    protected $fillable = [
        'name',
        'nik',
        'kecamatan',
        'desa',
        'alamat',
        'tgl_pengajuan',
        'ktp',
        'kk',
        'pekerjaan',
        'gaji',
        'rekening',
        'wa',
    ];
}
