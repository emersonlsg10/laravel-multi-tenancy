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
                    <h4 class="card-title">Cadastro de Materiais</h4>
                </div>
                <form method="POST" action="{{ route('tenant.materials.register', ['prefix' => \Request::route('prefix')]) }}">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Tipo de material</label>
                            <input required type="text" class="form-control" id="type" name="type" placeholder="Tipo de material">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Categoria</label>
                            <input required type="text" class="form-control" id="category" name="category" placeholder="Categoria">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Cor</label>
                            <input required type="text" class="form-control" id="color" name="color" placeholder="Cor">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Unidade de medida</label>
                            <input required type="text" class="form-control" id="measure" name="measure" placeholder="Unidade de medida">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Quantidade</label>
                            <input required type="number" class="form-control" id="quantity" name="quantity" min="0">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Tamanho</label>
                            <input required type="text" class="form-control" id="size" name="size" placeholder="Tamanho">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputState">Fornecedor</label>
                            <select id="id_provider" name="id_provider" class="form-control">
                                @foreach($providers as $provider)
                                <option value="{{$provider->id}}">{{$provider->name_company}}</option>
                                @endforeach
                            </select>
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
        bottom: -300px !important;
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