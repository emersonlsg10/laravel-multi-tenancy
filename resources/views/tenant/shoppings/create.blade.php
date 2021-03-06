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
                    <h4 class="card-title">Cadastro de Compras</h4>
                </div>
                <form method="POST" action="{{ route('tenant.shoppings.register', ['prefix' => \Request::route('prefix')]) }}">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputState">Caixa</label>
                            <select id="id_cashier" name="id_cashier" class="form-control">
                                @foreach($cashiers as $cashier)
                                <option value="{{$cashier->id}}">{{$cashier->created_at}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputEmail4">Item</label>
                            <input required type="text" class="form-control" id="name_shopping" name="name_shopping" placeholder="Item">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Valor</label>
                            <input min="0" required type="number" step="0.01" class="form-control" id="value" name="value">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Quantidade</label>
                            <input required type="number" min="0" class="form-control" id="quantity" name="quantity">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Adicional Aplique</label>
                            <input min="0" required type="number" step="0.01" class="form-control" id="additional_apply" name="additional_apply">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Adicional Bordado</label>
                            <input min="0" required type="number" step="0.01" class="form-control" id="additional_embroidery" name="additional_embroidery">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Pagamento</label>
                            <input required type="text" class="form-control" id="payment" name="payment" placeholder="Pagamento">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Telefone</label>
                            <input required type="text" class="form-control" id="phone" name="phone">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Data da fatura</label>
                            <input required type="text" class="form-control" id="invoice_date" name="invoice_date" placeholder="Pagamento">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Tipo da compra</label>
                            <input required type="text" class="form-control" id="shopping_type" name="shopping_type">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Observação</label>
                            <textarea class="form-control" id="observation" name="observation" rows="2"></textarea>
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