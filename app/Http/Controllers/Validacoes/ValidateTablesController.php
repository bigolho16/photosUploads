<?php
namespace App\Http\Controllers\Validacoes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\DB;
use App\Http\Requests\FormsValidations\ValidateTablesRequest;
use App\Models\Table\Fotos;
use App\Models\Table\Produtos;

class ValidateTablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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
    public function store(ValidateTablesRequest $request, Produtos $produtos, Fotos $fotos)
    {
        $data = $request->all();
        $file = $request->file("userfile");

        try {
            if (isset($data["idProduto"]) && isset($file)) { // validar imagem com id produto junto
                $data["idProduto"] = htmlspecialchars($data["idProduto"]);

                

                $path = $file->store("images", "public"); // metodo que vai mandar para pasta

                if ($path) {
                    $verify =   $fotos->create([
                                    "nome"                  =>  $data["userfile"]->getClientOriginalName(),
                                    "img"                   =>  $data["userfile"]->hashname(),
                                    "id_fotos_produtos"     =>  $data["idProduto"]  

                                ]);
    
                    if ($verify) {
                        // deixar methodo aqui por enquanto até descobrir outro jeito de mudar ele de local
                        $data_produtos =    $produtos->join("grupos", "produtos.id_produtos_grupos", "=", "grupos.id_grupos")
                                                        ->join("marcas", "produtos.id_produtos_marcas", "=", "marcas.id_marcas")
                                                        ->join("fotos", "produtos.id_produtos", "=", "fotos.id_fotos_produtos")
                                                        ->get();
                        // deixar methodo aqui por enquanto até descobrir outro jeito de mudar ele de local
                    
        
                        if ($data_produtos) {     
                            return redirect()->route("validacoes.show", ["id" => $data_produtos]);
                            

                       }
    
                    }else {
                        abort(400,"Erro ao inserir a imagem");
    
                    }
    
                }
            
            }

            if ($file && isset($data["createProductImage"]) && isset($data["idGrupo"]) && isset($data["idMarca"])) {
                $result =   $produtos->create([
                                "produto"               =>  $data["createProductImage"],
                                "id_produtos_grupos"    =>  $data["idGrupo"],
                                "id_produtos_marcas"    =>  $data["idMarca"]
                            ]);


                if ($result) {
                    $path = $file->store("images", "public");

                }else {
                    echo "Não Inserido: ". $result;

                }

                if ($path) {
                    $ifImageInserted   = $fotos->insert([
                                            "nome"                  =>  $data["userfile"]->getClientOriginalName(),
                                            "img"                   =>  $data["userfile"]->hashname(),
                                            "id_fotos_produtos"     =>  $result->id
        
                                         ]);

                }

                if ($ifImageInserted) {
                    // deixar methodo aqui por enquanto até descobrir outro jeito de mudar ele de local
                    $data_produtos =    $produtos->join("grupos", "produtos.id_produtos_grupos", "=", "grupos.id_grupos")
                                                 ->join("marcas", "produtos.id_produtos_marcas", "=", "marcas.id_marcas")
                                                 ->join("fotos", "produtos.id_produtos", "=", "fotos.id_fotos")
                                                 ->get();
                    // deixar methodo aqui por enquanto até descobrir outro jeito de mudar ele de local
                }

                if ($data_produtos) {
                    return redirect()->route("validacoes.show", ["id" => $data_produtos]);

                    

                }
                

            }
            
            // dd($data["userfile"]);

        }catch(\Except $e) {
            echo $e;
            
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($data = "value default")
    {
        if ($data) {
            dd($data);
        
        }else {
            echo "variavel nao existe, ficando como: " . $data;

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
