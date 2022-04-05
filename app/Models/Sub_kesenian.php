<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_kesenian extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kesenian()
    {
        return $this->belongsTo('App\Models\Jns_kesenian', 'jns_kesenian_id', 'id');
    }
}
