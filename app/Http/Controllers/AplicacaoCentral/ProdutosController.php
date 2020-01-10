<?php
namespace App\Http\Controllers\AplicacaoCentral;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Table\Produtos;
// use App\Models\Table\Grupos;
// use App\Models\Table\Marcas;

class ProdutosController extends Controller
{   
    // private $produtos;

    // public function __construct (Produtos $produtos, Grupos $grupos, Marcas $marcas) {
    //     $this->produtos = $produtos;
        
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data_grupos   =     DB::select("select * from grupos", [1]);
        // $data_marcas   =     DB::select("select * from marcas", [1]);

        // $data_produtos =     Produtos::join("grupos", "produtos.id_produtos_grupos", "=", "grupos.id_grupos")
        //                             ->join("marcas", "produtos.id_produtos_marcas", "=", "marcas.id_marcas")
        //                             ->get();

        // return view("uploadAplication.localUpload", \compact("data_grupos", "data_marcas", "data_produtos")); // criei um arquivo de rotas mais não sei se vou precisar dele tenho que me acostumar do jeitão laravel

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return "Metodo edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return "Metodo update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return "Metodo destroy";
    }

}
