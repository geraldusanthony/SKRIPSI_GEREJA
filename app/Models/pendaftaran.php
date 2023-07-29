<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'daftarmisa';
    protected $primarykey = 'id';
    protected $fillable = ['jadwal','nama','no_hp','alamat','jns_klmn','usia','lingkungan']; 
}
