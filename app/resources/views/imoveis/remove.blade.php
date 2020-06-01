@extends('shared.base')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Remover o imóvel</div>
        <div class="panel-body">
            <form method="post" action="{{route ('imoveis.destroy',$imovel->id)}}">
                <input type="hidden" name="_method" VALUE="DELETE">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <h4>SOBRE</h4>
                        <p><strong>Descrição:</strong> {{$imovel->descricao}}</p>
                        <p><strong>Corretor:</strong> {{$imovel->empresaImovel}}</p>
                        <p><strong>Preço:</strong> R$ {{number_format($imovel->preco, 2, ',', '.')}}</p>
                        <p><strong>Finalidade:</strong> {{$imovel->finalidade}}</p>
                        <hr>
                        <h4>CARACTERÍSTICAS</h4>
                        <p><strong>Tipo:</strong> {{$imovel->tipo}}</p>
                        <p><strong>Quantidade de quartos:</strong> {{$imovel->qtdQuartos}}</p>
                        <p><strong>Quantidade de lâmpadas:</strong> {{$imovel->qtdLampadas}}</p>
                        <p><strong>Quantidade de banheiro:</strong> {{$imovel->qtdBanheiro}}</p>
                        <p><strong>Garagem:</strong> {{$imovel->garagem}}</p>
                        <hr>
                        <h4>ENDEREÇO</h4>
                        <p><strong>País:</strong>{{$imovel->paisEndereco}}</p>
                        <p><strong>Estado:</strong>{{$imovel->estadoEndereco}}</p>
                        <p><strong>Cidade:</strong> {{$imovel->cidadeEndereco}}</p>
                        <p><strong>Logradouro:</strong> {{$imovel->logradouroEndereco}}</p>
                        <p><strong>Bairro:</strong> {{$imovel->bairroEndereco}}</p>
                        <p><strong>Número:</strong> {{$imovel->numeroEndereco}}</p>
                        <p><strong>CEP:</strong> {{$imovel->cepEndereco}}</p>
                        <p><strong>Ponto de referência:</strong> {{$imovel->pontoReferenciaEndereco}}</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid img-thumbnail rounded" src="{{$imovel->imgImovel}}" >
                    </div>
                </div>
                <button type="submit" class="btn btn-danger">Remover</button>
                <a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>
            </form>
        </div>
    </div>
@endsection
