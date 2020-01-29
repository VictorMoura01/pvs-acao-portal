<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    public $timestamps = false;
    protected $table = 'colaboradores';

    public function areas()
    {
        return $this->belongsToMany(Area::class);
    }
}
