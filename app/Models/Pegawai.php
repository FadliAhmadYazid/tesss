<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $primaryKey = 'id';
     protected $fillable = [
          'nama_pgw',
          'nik',
          'jabatan',
          'masa_kerja',
          'gaji',

      ];


    use HasFactory;
}
