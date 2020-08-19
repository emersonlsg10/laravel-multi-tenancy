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
                    <h4 class="card-title">Cadastro de Serviços</h4>
                </div>
                <form method="POST" action="{{ route('tenant.budgets.updateRegister', ['prefix' => \Request::route('prefix')]) }}">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$budget->id}}" name="id" />
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputState">Serviço</label>
                            <select id="id_service" name="id_service" class="form-control">
                                @foreach($services as $service)
                                <option value="0">...</option>
                                <option <?php if ($service->id == $budget->id_service) echo "selected"; ?> value="{{$service->id}}">{{$service->model}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Valor do orçamento</label>
                            <input value="{{$budget->value}}" min="0" required type="number" step="0.01" class="form-control" id="value" name="value">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Quantidade</label>
                            <input value="{{$budget->quantity}}" min="0" required type="number" step="0.01" class="form-control" id="quantity" name="quantity">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Metragem</label>
                            <input value="{{$budget->budget_footage}}" min="0" required type="number" step="0.01" class="form-control" id="budget_footage" name="budget_footage">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Adicional Aplique</label>
                            <input value="{{$budget->additional_apply}}" min="0" required type="number" step="0.01" class="form-control" id="additional_apply" name="additional_apply">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Adicional Bordado</label>
                            <input value="{{$budget->additional_embroidery}}" min="0" required type="number" step="0.01" class="form-control" id="additional_embroidery" name="additional_embroidery">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Pagamento</label>
                            <input value="{{$budget->payment_budget}}" required type="text" class="form-control" id="payment_budget" name="payment_budget">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Data da fatura</label>
                            <input value="{{$budget->budget_invoice}}" required type="text" class="form-control" id="budget_invoice" name="budget_invoice">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Tipo de orçamento</label>
                            <input value="{{$budget->budget_type}}" required type="text" class="form-control" id="budget_type" name="budget_type">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Telefone</label>
                            <input value="{{$budget->phone}}" required type="text" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Observação</label>
                            <textarea class="form-control" id="observation" name="observation" rows="2">{{$budget->observation}}</textarea>
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
        bottom: -400px !important;
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