<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    //
    public function marca() {
    return $this->belongsTo(Marca::class);
    }
}
