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
                    <h4 class="card-title">Editar Produto</h4>
                </div>
                <form method="POST" action="{{ route('tenant.clothings.updateRegister', ['prefix' => \Request::route('prefix')]) }}">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$clothing->id}}" name="id" />
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome</label>
                            <input value="{{$clothing->name}}" required type="name" class="form-control" id="name" name="name" placeholder="Nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Modelo</label>
                            <input value="{{$clothing->model}}" required type="text" class="form-control" id="model" name="model" placeholder="Modelo">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Custo</label>
                            <input value="{{$clothing->cost}}" type="number" step="0.01" class="form-control" id="cost" name="cost">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Valor</label>
                            <input value="{{$clothing->value}}" type="number" step="0.01" class="form-control" id="value" name="value">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Classificação</label>
                            <input value="{{$clothing->classification}}" required type="text" class="form-control" id="classification" name="classification" placeholder="Classificação">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Tamanho</label>
                            <input value="{{$clothing->size}}" required type="text" class="form-control" id="size" name="size" placeholder="Tamanho">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Cor</label>
                            <input value="{{$clothing->color}}" type="text" class="form-control" id="color" name="color">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Quantidade</label>
                            <input value="{{$clothing->quantity}}" type="number" min="0" class="form-control" id="quantity" name="quantity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Observação</label>
                            <textarea class="form-control" id="observation" name="observation" rows="2">{{$clothing->name}}</textarea>
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