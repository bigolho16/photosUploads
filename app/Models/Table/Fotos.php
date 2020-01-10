<?php

namespace App\Models\Table;

use Illuminate\Database\Eloquent;
use Illuminate\Database\Eloquent\Model;

class Fotos extends Model
{
    //protected $connection="paragit";
    protected $table="fotos";
    protected $primaryKey = "id_fotos";
    public $timestamps = false;//como ele considera como padrão created_at e updated_at então definir como false
    protected $fillable=[
        "nome",
        "img",
        "id_fotos_produtos"

    ];


}