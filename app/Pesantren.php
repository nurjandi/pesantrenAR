<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesantren extends Model
{
    protected $fillable = ['nama', 'pimpinan', 'no_telp','ormas', 'kurikulum', 'fasilitas', 'alamat', 'longitude', 'latitude', 'foto'];
    protected $table = 'pesantrens';
}
