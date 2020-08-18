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
                    <h4 class="card-title">Editar Estoque</h4>
                </div>
                <form method="POST" action="{{ route('tenant.stocks.updateRegister', ['prefix' => \Request::route('prefix')]) }}">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$stock->id}}" name="id" />
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputState">Material</label>
                            <select id="id_material" name="id_material" class="form-control">
                                @foreach($materials as $material)
                                <option <?php if ($stock->id_material == $material->id) echo "selected"; ?> value="{{$material->id}}">{{$material->type}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Quantidade</label>
                            <input value="{{$stock->quantity}}" required type="text" class="form-control" id="quantity" name="quantity">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Forma de pagamento</label>
                            <input value="{{$stock->payment_form}}" required type="text" class="form-control" id="payment_form" name="payment_form" placeholder="Forma de pagamento">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Valor da unidade</label>
                            <input value="{{$stock->unit_value}}" required type="text" class="form-control" id="unit_value" name="unit_value" placeholder="Valor da unidade">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Valor do estoque</label>
                            <input value="{{$stock->stock_value}}" required type="text" class="form-control" id="stock_value" name="stock_value" placeholder="Valor do estoque">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Descrição</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Descrição">{{$stock->description}}</textarea>
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