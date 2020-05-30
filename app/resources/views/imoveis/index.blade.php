@extends('shared.base')
@section('content')
   <div class="panel panel-default">
       <div class="panel-heading">Lista de Imóveis</div>
       <div class="row">
           <div class="col-md-12">
               <table class="table table-bordered">
                   <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Cidade</th>
                        <th>Preço</th>
                        <th>Finalidade</th>
                        <th>Tipo</th>
                        <th>Ações</th>
                    </tr>
                   </thead>
                   <tbody>
                    @foreach($imoveis as $imovel)
                            <tr>
                                <td>{{$imovel->descricao}}</td>
                                <td>{{$imovel->cidadeEndereco}}</td>
                                <td>R$ {{$imovel->preco}}</td>
                                <td>{{$imovel->finalidade}}</td>
                                <td>{{$imovel->tipo}}</td>
                                <td>
                                    <a href="#"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
                                    <a href="#"><i class="glyphicon glyphicon-zoom-in"></i></a>
                                </td>
                            </tr>
                    @endforeach
                   </tbody>
               </table>
           </div>
       </div>
   </div>
    <a href="{{route('imoveis.create')}}"><button class="btn btn-primary">Adicionar</button></a>
@endsection
