<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table = 'daftar';
    protected $fillable = ['id_mahasiswa','id_dosen','ta', 'tgl_ujian'];
}
