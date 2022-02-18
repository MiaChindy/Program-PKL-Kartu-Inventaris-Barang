<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KIBE extends Model
{
    use HasFactory;
    protected $table = 'kibe';
    protected $primaryKey = 'id_kibe';
    protected $fillable = [
        'barang_id',
        'judul',
        'pencipta',
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
