@extends('shared.base')
@section('content')
    <div class="panel panel-default">
    <div class="panel-heading"><h3>Editar os dados do imóvel</h3></div>
        <div class="panel-body">
            <form method="post" action="{{route('imoveis.update', $imovel->id)}}">
                {{ csrf_field() }}
                <h4>Dados do imóvel</h4>
                <hr>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" placeholder="Descrição" name="descricao" required value="{{$imovel->descricao}}">
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="empresaImovel">Empresa do imóvel</label>
                            <input type="text" class="form-control" placeholder="Empresa do Imóvel" name="empresaImovel" required value="{{$imovel->empresaImovel}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="preco">Preço</label>
                            <input type="text" class="form-control" placeholder="Preço" name="preco" required value="{{$imovel->preco}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="imgImovel">Imagem do imóvel</label>
                            <input type="text" class="form-control" placeholder="url da imagem" name="imgImovel" required value="{{$imovel->imgImovel}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="qtdQuartos">Quantidade de quartos</label>
                            <input type="number" class="form-control" placeholder="Quantidade de Quartos" required name="qtdQuartos" value="{{$imovel->qtdQuartos}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="qtdJanelas">Quantidade de janelas</label>
                            <input type="number" class="form-control" placeholder="Quantidade de Janelas" required name="qtdJanelas" value="{{$imovel->qtdJanelas}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="qtdlampadas">Quantidade de lâmpadas</label>
                            <input type="number" class="form-control" placeholder="Quantidade de lâmpadas" required name="qtdLampadas" value="{{$imovel->qtdLampadas}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="qtdBanheiro">Quantidade de banheiro</label>
                            <input type="number" class="form-control" placeholder="Quantidade de Banheiro" required name="qtdBanheiro" value="{{$imovel->qtdBanheiro}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tipo">Tipo do imóvel</label>
                            <select class="form-control" name="tipo" value="{{$imovel->tipo}}"required>
                                <option {{($imovel->tipo == 'apartamento' ? 'selected' : '')}}>Apartamento</option>
                                <option {{($imovel->tipo == 'casa' ? 'selected' : '')}}>Casa</option>
                                <option {{($imovel->tipo == 'kitnet' ? 'selected' : '')}}>Kitnet</option>
                                <option {{($imovel->tipo == 'galpao' ? 'selected' : '')}}Galpão</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="garagem">Garagem</label>
                            <select class="form-control" name="garagem" value="{{$imovel->garagem}}"required>
                                <option {{($imovel->garagem == 'sim' ? 'selected' : '')}}>Sim</option>
                                <option {{ $imovel->garagem == 'nao' ? 'selected' : '' }}>Não</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="finalidade">Finalidade do imóvel</label>
                            <select class="form-control" name="finalidade" value="{{$imovel->finalidade}}"required>
                                <option {{($imovel->finalidade == 'venda' ? 'selected' : '' )}}>Venda</option>
                                <option {{($imovel->finalidade == 'locacao' ? 'selected' : '')}}>Locação</option>
                            </select>
                        </div>
                    </div>
                </div>
                <h4>Endereço</h4>
                <hr>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="paisEndereco">País</label>
                            <input type="text" class="form-control" placeholder="País" required value="{{$imovel->paisEndereco}}" name="paisEndereco">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="estadoEndereco">Estado</label>
                            <input type="text" class="form-control" placeholder="Estado" required value="{{$imovel->estadoEndereco}}" name="estadoEndereco">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cidadeEndereco">Cidade</label>
                            <input type="text" class="form-control" placeholder="Cidade" required value="{{$imovel->cidadeEndereco}}" name="cidadeEndereco">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cepEndereco">CEP</label>
                            <input type="text" class="form-control" placeholder="CEP" required value="{{$imovel->cepEndereco}}" name="cepEndereco">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="pontoReferenciaEndereco">Ponto de referência</label>
                            <input type="text" class="form-control" placeholder="Ponto de referência" required value="{{$imovel->pontoReferenciaEndereco}}" name="pontoReferenciaEndereco">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="logradouroEndereco">Logradouro</label>
                    <input type="text" class="form-control" placeholder="Logradouro" required value="{{$imovel->logradouroEndereco}}" name="logradouroEndereco">
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="bairroEndereco">Bairro</label>
                            <input type="text" class="form-control" placeholder="Bairro" required value="{{$imovel->bairroEndereco}}" name="bairroEndereco">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="numeroEndereco">Número</label>
                            <input type="number" class="form-control" placeholder="Número" required value="{{$imovel->numeroEndereco}}" name="numeroEndereco">
                        </div>
                    </div>
                </div>
                <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>
        </div>
    </div>
@endsection
