<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeArtikel extends Model
{
    use HasFactory;
    public function artikel()
    {
        return $this->belongsToMany('App\Models\Artikel');
    }
}
