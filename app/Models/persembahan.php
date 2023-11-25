<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persembahan extends Model
{
    use HasFactory;
    protected $table = 'persembahan';
    protected $primarykey = 'id';
    protected $fillable = ['tanggal','jumlah','jumlah2','keterangan']; 
}
