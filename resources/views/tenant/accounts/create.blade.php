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
                    <h4 class="card-title">Cadastro de Conta a pagar</h4>
                </div>
                <form method="POST" action="{{ route('tenant.accounts.register', ['prefix' => \Request::route('prefix')]) }}">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="phone">Nome</label>
                            <input required type="text" class="form-control" id="name" name="name" placeholder="Nome">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="status">Status</label>
                            <select id="status_account" name="status" class="form-control">
                                <option value="1">Aberta</option>
                                <option value="2">Paga</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Data de Vencimento</label>
                            <input type="text" class="form-control" id="due_date" name="due_date">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Valor</label>
                            <input type="number" step="0.01" class="form-control" id="value" name="value">
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