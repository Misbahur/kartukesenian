<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jns_kesenian extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function identitas()
    {
        return $this->hasOne('App\Models\Identitas', 'identitas_id');
    }

    public function sub_kesenian()
    {
        return $this->hasMany('App\Models\Sub_kesenian', 'identitas_id');
    }
}
