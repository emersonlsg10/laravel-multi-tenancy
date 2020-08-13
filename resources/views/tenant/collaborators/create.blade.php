@extends('layouts.tenant')

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

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div style="margin-bottom: 30px;display: flex; justify-content: space-between; align-items: center;">
                    <h4 class="card-title">Cadastro de colaboradores</h4>
                </div>
                <form method="POST" action="{{ route('tenant.collaborators.register', ['prefix' => \Request::route('prefix')]) }}">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome</label>
                            <input required type="name" class="form-control" id="name" name="name" placeholder="Nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Telefone</label>
                            <input required type="text" class="form-control" id="phone" name="phone" placeholder="Telefone">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Serviço</label>
                            <input required type="text" class="form-control" id="service" name="service" placeholder="Serviço">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Valor</label>
                            <input required type="text" class="form-control" id="value" name="value" placeholder="Valor">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">Tipo</label>
                            <select id="type" name="type" class="form-control">
                                <option selected value="funcionario">Funcionário</option>
                                <option value="costureira">Costureira</option>
                                <option value="tecnico">Técnico</option>
                            </select>
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
                    </div>
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
        bottom: -200px !important;
    }
</style>
@section('script')
<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js')}}"></script>
@endsection

@endsection