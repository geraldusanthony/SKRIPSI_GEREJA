<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwalkegiatan extends Model
{
    use HasFactory;
    protected $table = 'jadwalkegiatan';
    protected $primarykey = 'id';
    protected $fillable = ['hari','tanggal','jam','tempat','kegiatan']; 
}
