<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    public $timestamps = false;
    public $table = 'kategoriak';

    public function ingatlanok(){
        return $this->hasMany(Ingatlan::class);
    }
}
