<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KIBB extends Model
{
    use HasFactory;
    protected $table = 'kibb';
    protected $primaryKey = 'id_kibb';
    protected $fillable = [
        'barang_id',
        'merk',
        'rangka',
        'mesin',
        'polisi',
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
