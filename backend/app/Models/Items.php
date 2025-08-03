<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    //
    protected $table = 'Items';

    protected $fillable =['nombres', 'precio', 'marca_id'];
}
