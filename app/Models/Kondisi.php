<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kondisi extends Model
{
    use HasFactory;
    protected $table = 'kondisi';
    protected $primaryKey = 'id_kondisi';
    protected $fillable = [
        'kode_kondisi',
        'kondisi',
        'ket'
    ];

    public function kibc()
    {
        return $this->hasMany(KIBC::class);
    }
}
