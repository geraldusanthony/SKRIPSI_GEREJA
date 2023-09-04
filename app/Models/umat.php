<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class umat extends Model
{
    use HasFactory;
    protected $table = 'umat';
    protected $primarykey = 'id';
    protected $fillable = ['nama_umat','baptis','nama_bpts',
    'tgl_bpts','paroki','wali_bpts','komuni','tgl_kp','paroki_kp',
    'warga','negara','nik','no_kk',
    'jns_kelamin','ling','tgl_lahir',
    'tmp_lhr','gol_darah','alamat','kota_kab',
    'kec','kel','no_hp','email','pend','pekerjaan',
    'images']; 
}
