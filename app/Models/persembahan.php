<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persembahan extends Model
{
    use HasFactory;
    protected $table = 'persembahan';
    protected $primarykey = 'id';
    protected $fillable = ['tahun','bulan','minggu','jumlah','jumlah2',"keterangan"]; 
}
