@extends('shared.base')
@section('content')
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Detalhes do imóvel</div>
        <div class="panel-body">
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
        </div>
    </div>
    <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
@endsection
