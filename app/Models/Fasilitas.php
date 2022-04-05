<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function identitas()
    {
        return $this->belongsTo('App\Models\Identitas', 'identitas_id', 'id');
    }
}
