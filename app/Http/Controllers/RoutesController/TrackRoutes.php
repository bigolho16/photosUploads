<?php

namespace App\Http\Controllers\RoutesController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Table\Produtos;

class TrackRoutes extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function index() {
        $data_grupos   =     DB::select("select * from grupos", [1]);
        $data_marcas   =     DB::select("select * from marcas", [1]);

        $data_produtos =     Produtos::join("grupos", "produtos.id_produtos_grupos", "=", "grupos.id_grupos")
                                    ->join("marcas", "produtos.id_produtos_marcas", "=", "marcas.id_marcas")
                                    ->get();

        return view("uploadAplication.localUpload", \compact("data_grupos", "data_marcas", "data_produtos")); // criei um arquivo de rotas mais não sei se vou precisar dele tenho que me acostumar do jeitão laravel
        
	}
	 
    public function __invoke(Request $request)
    {
        //
    }

    // public function NameadvancedForm() {// formulario do arquivo localUpload.php
    //     return view();

    // }
}
