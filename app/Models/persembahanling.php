<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persembahanling extends Model
{
    use HasFactory;
    protected $table = 'persembahanling';
    protected $primarykey = 'id';
    protected $fillable = ['tanggal','tahun','ket','nama_ling','jumlah']; 
}
