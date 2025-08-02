<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    public function productos() {
    return $this->hasMany(Producto::class);
    }
}