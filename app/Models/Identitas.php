<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function anggota()
    {
        return $this->hasMany('App\Models\Anggota', 'anggotas_id', 'id');
    }

    public function bank()
    {
        return $this->hasOne('App\Models\Bank', 'banks_id', 'id');
    }

    public function fasilitas()
    {
        return $this->hasOne('App\Models\Fasilitas', 'fasilitas_id', 'id');
    }

    public function hukum()
    {
        return $this->hasOne('App\Models\Hukum', 'hukums_id', 'id');
    }

    public function identitas_tambahan()
    {
        return $this->hasOne('App\Models\Identitas_tambahan', 'identitas_tambahans_id', 'id');
    }

    public function invetaris()
    {
        return $this->hasOne('App\Models\Invetaris', 'inventaris_id', 'id');
    }

    public function lokasi()
    {
        return $this->hasOne('App\Models\Lokasi', 'lokasi_id', 'id');
    }

    public function pengalaman()
    {
        return $this->hasMany('App\Models\Pengalaman_karya', 'pengalaman_karya_id', 'id');
    }

    public function sinitasi()
    {
        return $this->hasMany('App\Models\Sinitasi', 'sinitasi_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'users_id', 'id');
    }
    public function kepemilikan()
    {
        return $this->belongsTo('App\Models\Jns_kepemilikan', 'jns_kepemilikan_id', 'id');
    }
    public function kesenian()
    {
        return $this->belongsTo('App\Models\Jns_kesenian', 'jns_kesenian_id', 'id');
    }
    public function pembinaan()
    {
        return $this->belongsTo('App\Models\Jns_pembinaan', 'jns_pembinaan_id', 'id');
    }
    public function kecamatan()
    {
        return $this->belongsTo('App\Models\Kecamatan', 'kecamatan_id', 'id');
    }
}
