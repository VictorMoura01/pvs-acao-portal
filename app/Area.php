<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public $timestamps = false;

    public function colaboradores()
    {
        return $this->belongsToMany(Colaborador::class);
    }

}
