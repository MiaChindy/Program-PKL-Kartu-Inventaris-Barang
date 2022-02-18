<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = 'jabatan';
    protected $primaryKey = 'id_jabatan';
    protected $fillable = [
        'kode_jabatan',
        'jabatan',
    ];

    public function kibc()
    {
        return $this->hasMany(KIBC::class);
    }

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
