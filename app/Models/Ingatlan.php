<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingatlan extends Model
{
    public $timestamps = false;
    public $table  = 'ingatlanok';

    public function kategoria(){
        return $this->belongsTo(Kategoria::class, "kategoria");
    }

}
