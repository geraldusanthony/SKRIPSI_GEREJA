<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwalmisa extends Model
{
    use HasFactory;
    protected $table = 'jadwalmisa';
    protected $primarykey = 'id';
    protected $fillable = ['hari','tanggal','jam','keterangan','kuota']; 
}
