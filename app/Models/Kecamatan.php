<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatans';
    protected $fillable = [
        'nama'
    ];

    public function kelurahan()
    {
        return $this->hasMany(Kelurahan::class);
    }
}