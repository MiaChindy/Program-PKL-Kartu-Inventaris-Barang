<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KIBA extends Model
{
    use HasFactory;
    protected $table = 'kiba';
    protected $primaryKey = 'id_kiba';
    protected $fillable = [
        'barang_id',
        'luas',
        'alamat',
        'hak',
        'penggunaan',
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
