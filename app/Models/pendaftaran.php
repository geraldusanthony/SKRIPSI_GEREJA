<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    use HasFactory;
    protected $table = 'daftarmisa';
    protected $primarykey = 'id';
    protected $fillable = ['user_id','jadwal','nama','no_hp','alamat','jns_klmn','usia','lingkungan','duduk','misa_id','jumlah']; 
    public function jadwalmisa(): BelongsTo
    {
        return $this->belongsTo(jadwalmisa::class);
    }
}


