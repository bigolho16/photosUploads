@extends('templates.body')

@section('title')
    Lista dados
@stop

@push('scripts')
    <script type="text/javascript" src="{{asset('js/uploadApplication/linkInsidePages/linksPages.js')}}" defer></script>

@endpush
@push('styles')
    <link rel="stylesheet" href="{{asset('css/uploadApplication/tables.css')}}" type="text/css" />

@endpush

@section('content')
    
{{-- #content1, #content2, #content3, #content4 {
    height: 50vh;
    border: 1px solid red;
  }
  <a href="#content1"> CONTEUDO 1</a>
  <a href="#content2"> CONTEUDO 2</a>
  <a href="#content3"> CONTEUDO 3</a>
  <a href="#content4"> CONTEUDO 4</a>
  
  
  
  <div id="content1" class="content1">CONTEUDO 1 TEXTO</div>
  <div id="content2" class="content1">CONTEUDO 2 TEXTO</div>
  <div id="content3" class="content1">CONTEUDO 3 TEXTO</div>
  <div id="content4" class="content1">CONTEUDO 4 TEXTO</div> --}}

<table class="view-data">
    <tr>
        <td>Produto</td>
        <td>Unidade</td>
        <td>Criado em</td>
        <td>Grupos</td>
        <td>Marcas</td>
        <td>Photo</td>
    </tr>

    @foreach ($data_produtos as $key => $datas)
        @php
        $thisProduct = "";
        if ($datas["id_produtos"] == $idProduto){
                $thisProduct = "path";
            
        }   
        @endphp

        <tr class="trs-datas {{$thisProduct}}" id="#{{$thisProduct}}">
            <td>{{$datas["produto"]}}</td>
            <td>{{$datas["unidade"]}}</td>
            <td>{{$datas["lastupdate"]}}</td>
            <td>{{$datas["grupo"]}}</td>
            <td>{{$datas["marca"]}}</td>
            <td>{{$datas["img"]}}</td>
        </tr>

    @endforeach

</table>

@endsection