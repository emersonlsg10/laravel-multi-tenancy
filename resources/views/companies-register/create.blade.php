@extends('layouts-original.master-without-nav')

@section('content')
<!-- </ul> -->
<!--    Mensagens após a tentativa de salvar no BD-->
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="row" style="max-width: 95vw; display: flex; justify-content: center; margin-top: 30px">
    <div class="col-10">
        <div class="card">
            <div class="card-body">
                <div style="margin-bottom: 30px;display: flex; justify-content: space-between; align-items: center;">
                    <h2 class="card-title">Cadastro de Empresas</h2>
                </div>
                <form method="POST" action="{{ route('register-plan.register') }}">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Nome completo</label>
                            <input required type="name" class="form-control" id="comp_name" name="comp_name">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="phone">CPF / CNPJ</label>
                            <input required type="text" class="form-control" id="comp_document" name="comp_document">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Moeda</label>
                            <select id="comp_currency" name="comp_currency" class="form-control">
                                <option selected value="real">Real</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">País</label>
                            <select id="comp_country" name="comp_country" class="form-control">
                                <option selected value="brasil">Brasil</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="comp_address">Endereço</label>
                            <input required type="text" class="form-control" id="comp_address" name="comp_address">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="comp_phone">Telefone</label>
                            <input required type="text" class="form-control" id="comp_phone" name="comp_phone">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="comp_whatsapp">Whatsapp</label>
                            <input required type="text" class="form-control" id="comp_whatsapp" name="comp_whatsapp">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="comp_email">Email</label>
                            <input required type="email" class="form-control" id="comp_email" name="comp_email">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="comp_username">Nome de usuário</label>
                            <input required type="text" class="form-control" id="comp_username" name="comp_username">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Senha</label>
                            <input required type="password" class="form-control" id="comp_password" name="comp_password" placeholder="Senha">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Confirmar Senha</label>
                            <input required type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Senha">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="comp_language">Idioma</label>
                            <select id="comp_language" name="comp_language" class="form-control">
                                <option selected value="pt-BR">Português</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="prefix">Pósfixo após a barra: (www.ainstentech.com.br/nome_da_sua_empresa)</label>
                            <input required type="text" class="form-control" id="prefix" name="prefix">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="comp_plan">Plano</label>
                            <select id="comp_plan" name="comp_plan" class="form-control">
                                <option <?php if ($plan == "mensal") echo "selected"; ?> value="1">Mensal</option>
                                <option <?php if ($plan == "semestral") echo "selected"; ?> value="2">Semestral</option>
                                <option <?php if ($plan == "anual") echo "selected"; ?> value="3">Anual</option>
                            </select>
                        </div>
                    </div>
                    <!-- <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Observação</label>
                            <textarea class="form-control" id="observation" name="observation" rows="2"></textarea>
                        </div>
                    </div>
                    <div style="margin-bottom: 20px;display: flex; justify-content: space-between; align-items: center;">
                        <h4>Endereço</h4>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">CEP</label>
                            <input required type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Logradouro</label>
                            <input required type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Bairro</label>
                            <input required type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Cidade</label>
                            <input required type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Estado</label>
                            <input required type="text" class="form-control" id="estado" name="estado" placeholder="Estado">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Numero</label>
                            <input required type="text" class="form-control" id="numero" name="numero" placeholder="Numero">
                        </div>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<style>
    .iconTable {
        margin: 0px 10px;
        cursor: pointer;
    }

    .iconTable:hover {
        width: 1.5em;
        height: 1.5em;
        color: #027BFF;
    }

    .footer {
        bottom: -350px !important;
    }
</style>

@endsection