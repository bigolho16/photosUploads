<?php

namespace App\Models\Table;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    // protected $table = 'produtos';

    // protected $table = 'grupos';

    protected $fillable = [
        "produto",
        "id_produtos_grupos",
        "id_produtos_marcas"

    ];
    public $timestamps = false;

    // public function grupos ()
    // {
    //     return $this->hasOne("Models\Table\Grupos");

    // }

    // public function marcas ()
    // {
    //     return $this->hasOne("Models\Table\Grupos");

    // }

}
