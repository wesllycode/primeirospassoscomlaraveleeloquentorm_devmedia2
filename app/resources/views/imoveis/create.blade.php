@extends('shared.base')

@section('content')
    <form method="post" action="">
        {{ csrf_field() }}
        <h4>Dados para cadastrar o imóvel</h4>
        <hr>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" placeholder="Descrição" name="descricao" required>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="empresaImovel">Empresa do Imóvel</label>
                    <input type="text" class="form-control" placeholder="Empresa do Imóvel" name="empresaImovel" required>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" class="form-control" placeholder="Preço" name="preco" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="qtdQuartos">Quantidade de Quartos</label>
                    <input type="number" class="form-control" placeholder="Quantidade de Quartos" required name="qtdQuartos">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="qtdJanelas">Quantidade de Janelas</label>
                    <input type="number" class="form-control" placeholder="Quantidade de Janelas" required name="qtdJanelas">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="qtdlampadas">Quantidade de Lâmpadas</label>
                    <input type="number" class="form-control" placeholder="Quantidade de Janelas" required name="qtdlampadas">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="qtdBanheiro">Quantidade de Banheiro</label>
                    <input type="number" class="form-control" placeholder="Quantidade de Baneheiro" required name="qtdBanheiro">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tipo">Tipo do imóvel</label>
                    <select class="form-control" name="tipo" required>
                        <option>Apartamento</option>
                        <option>Casa</option>
                        <option>Kitnet</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="tipo">Garagem</label>
                    <select class="form-control" name="tipo" required>
                        <option>Sim</option>
                        <option>Não</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="qtdQuartos">Finalidade do imóvel</label>
                    <select class="form-control" name="finalidade" required>
                        <option>Venda</option>
                        <option>Locação</option>
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
                    <input type="text" class="form-control" placeholder="País" required name="paisEndereco">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="estadoEndereco">Estado</label>
                    <input type="text" class="form-control" placeholder="Estado" required name="estadoEndereco">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="cidadeEndereco">Cidade</label>
                    <input type="text" class="form-control" placeholder="Cidade" required name="cidadeEndereco">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="cepEndereco">CEP</label>
                    <input type="text" class="form-control" placeholder="CEP" required name="cepEndereco">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="pontoReferenciaEndereco">Ponto de Referência</label>
                    <input type="text" class="form-control" placeholder="CEP" required name="pontoReferenciaEndereco">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="logradouroEndereco">Logradouro</label>
            <input type="text" class="form-control" placeholder="Logradouro" required name="logradouroEndereco">
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="bairroEndereco">Bairro</label>
                    <input type="text" class="form-control" placeholder="Bairro" required name="bairroEndereco">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="number" class="form-control" placeholder="Número" required name="numeroEndereco">
                </div>
            </div>
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
    </div>
    </div>

@endsection
