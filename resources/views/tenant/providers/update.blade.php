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
                    <h4 class="card-title">Editar fornecedor</h4>
                </div>
                <form method="POST" action="{{ route('tenant.providers.updateRegister', ['prefix' => \Request::route('prefix')]) }}">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$provider->id}}" name="id" />
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Nome da empresa</label>
                            <input value="{{$provider->name_company}}" required type="name" class="form-control" id="name_company" name="name_company" placeholder="Nome da empresa">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone">Representante</label>
                            <input value="{{$provider->provider_representant}}" required type="text" class="form-control" id="provider_representant" name="provider_representant" placeholder="Representante">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Telefone</label>
                            <input value="{{$provider->phone}}" required type="text" class="form-control" id="phone" name="phone" placeholder="Telefone">
                        </div>
                    </div>
                    <div style="margin-bottom: 20px;display: flex; justify-content: space-between; align-items: center;">
                        <h4>Endereço</h4>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">CEP</label>
                            <input value="{{$provider->cep}}" required type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Logradouro</label>
                            <input value="{{$provider->logradouro}}" required type="text" class="form-control" id="logradouro" name="logradouro" placeholder="Logradouro">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Bairro</label>
                            <input value="{{$provider->bairro}}" required type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Cidade</label>
                            <input value="{{$provider->cidade}}" required type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Estado</label>
                            <input value="{{$provider->estado}}" required type="text" class="form-control" id="estado" name="estado" placeholder="Estado">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Numero</label>
                            <input value="{{$provider->numero}}" required type="text" class="form-control" id="numero" name="numero" placeholder="Numero">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
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