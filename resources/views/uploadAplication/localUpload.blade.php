@extends('templates.body')


@section('title')
    PAGINA HOME
@stop

@push('scripts')
    <script type="application/javascript" src="{{asset('js/uploadApplication/app.js')}}" defer></script>
    
@endpush
@push('styles')
    <link rel="stylesheet" href="{{asset('css/uploadApplication/localUpload.css')}}"type="text/css" />

@endpush

@section('content')
    <h1 style='text-indent:30pt; box-shadow:4px 4px 3px black; padding-bottom:10px;'>ADD PRODUCTS TO THE<span style='color:gold; box-shadow:4px 4px 3px gold; padding-left:5px; margin-right:5px;'>$</span>DATABASE</h1>

    <div id='msgErrosThisForm'></div>

    <!-- FORMULARIO DE NOME: advancedForm -->
    <form enctype="multipart/form-data" action="{{ route('validacoes.store') }}" method="POST" class="sec-form">
        {!!csrf_field()!!}

        <table class='sec-table'>
        <!-- depois que eu aprender a inserir imagem no banco volto na pagina de comercio e termino de adicionar as imagens do banco de dados -->
        <tr class='trs'>
            <td class='tds'>
            Imagem: <input name="userfile" type="file" id='putImage'/>

            </td>

            <td class='tds'>
                <span class='avisos-span'>caso o produto ainda não exista</span><br>
                Nome do produto:<input class='addInputs secondverificacaoCampos' type="text" name="createProductImage">

            </td>

        </tr>
            
        <tr class='trs'>
            <td class='tds case-prod' colspan="2">
                <span class='avisos-span'>caso o produto exista</span><br>
                id Produto
                <select name='idProduto' class="indentifyMethods">
                    <option value="">SELECIONAR</option>

                    @foreach ($data_produtos as $key => $value)
                        <option value="{{$value['id_produtos']}}">{{$value['produto']}} - {{$value['id_grupos']}} {{$value['id_marcas']}}</option>

                    @endforeach
                </select>
            </td>
        </tr>
        
        <tr class='trs'>
            <td class='tds'>
                id Grupo - grupos existentes
                <select name='idGrupo' class="indentifyMethods secondverificacaoCampos">
                <option value="">SELECIONAR</option>

                    @foreach ($data_grupos as $key => $value)
                        <option value="{{$value->id_grupos}}">{{$value->grupo}} - {{$value->id_grupos}}</option>

                    @endforeach
                </select>

            </td>

            <td class='tds'>
                id Marca - marcas existentes
                <select name='idMarca' class="indentifyMethods secondverificacaoCampos">
                <option value="">SELECIONAR</option>

                    @foreach ($data_marcas as $key => $value)
                        <option value="{{$value->id_marcas}}">{{$value->marca}} - {{$value->id_marcas}}</option>

                    @endforeach
                </select>
            </td>
        </tr>
    
        
            @if ($errors->any())
                <tr class='tds'>
                    <td class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach 
                    </td>
                </tr>
            @endif

        <tr class='trs'>
            <td class='tds btn' colspan="2">
            <input type="submit" value="Enviar" name='botao' id='subBotao' />
            </td>
        </tr>

    </tr>
</table>

</form>
<div style='width:100%;margin-top:10pt;padding-bottom:10pt;'>
<div style='width:220px;height:250px; padding:5pt;padding-bottom:20pt;margin:auto;'>
@php
    //if (isset($_SESSION['nomeImg'])) {

        //echo "<span style='color:green;'>Última imagem adicionada</span> <br> <img style='width:100%; height:100%;' src='".$_SESSION['nomeImg']."' alt='vazia'>";
        // unset($_SESSION['nomeImg']);
    //} 
@endphp
</div>
</div>

@endsection