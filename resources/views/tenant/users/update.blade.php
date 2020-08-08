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
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div style="margin-bottom: 30px;display: flex; justify-content: space-between; align-items: center;">
                    <h4 class="card-title">Editar usuário</h4>
                </div>
                <form method="POST" action="{{ route('tenant.users.updateRegister', ['prefix' => \Request::route('prefix')]) }}">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{$user->id_user}}" name="id_user" />
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nome</label>
                            <input value="{{$user->name}}" required type="name" class="form-control" id="name" name="name" placeholder="Nome">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input value="{{$user->email}}" required type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Senha">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Confirmar Senha</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Senha">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">Tipo</label>
                            <select value="{{$user->user_type}}" id="user_type" name="user_type" class="form-control">
                                <option <?php if ($user->user_type == 1) echo "selected"; ?> value="1">1</option>
                                <option <?php if ($user->user_type == 2) echo "selected"; ?> value="2">2</option>
                                <option <?php if ($user->user_type == 3) echo "selected"; ?> value="3">3</option>
                            </select>
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