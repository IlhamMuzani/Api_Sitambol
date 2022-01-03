<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bengkel extends Model
{
    protected $table = 'bengkels';
    protected $fillable = [
        'kelurahan_id','nama','kategori','jadwal','keterangan','latitude','longitude','image'
    ];

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, "kelurahan_id", "id");
    }
}
