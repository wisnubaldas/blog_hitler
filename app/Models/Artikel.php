<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;
    public function type()
    {
        return $this->belongsToMany('App\Models\TypeArtikel');
    }
    public function writer()
    {
        return $this->hasOne('App\Models\User','id','writer_id');
    }
}
