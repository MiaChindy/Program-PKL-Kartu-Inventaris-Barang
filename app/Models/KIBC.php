<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KIBC extends Model
{
    use HasFactory;
    protected $table = 'kibc';
    protected $primaryKey = 'id_kibc';
    protected $fillable = [
        'barang_id',
        'kon_bangunan',
        'luas_lantai',
        'alamat',
        'luas',
        'harga',
        'tahun',
        'jumlah_B',
        'jumlah_KB',
        'jumlah_RB',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class,'barang_id');
    }

    public function kondisi()
    {
        return $this->belongsTo(Kondisi::class,'kondisi_id');
    }


}
