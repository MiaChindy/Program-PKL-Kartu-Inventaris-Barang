<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KIBD extends Model
{
    use HasFactory;
    protected $table = 'kibd';
    protected $primaryKey = 'id_kibd';
    protected $fillable = [
        'barang_id',
        'panjang',
        'lebar',
        'luas',
        'alamat',
        'status',
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
