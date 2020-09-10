@extends('layouts.tenant')

@section('title') Home @endsection

@section('css')
<!-- jquery.vectormap css -->
<link href="{{ URL::asset('/assets/libs/jquery-vectormap/jquery-vectormap.min.css')}}" rel="stylesheet" type="text/css" />

<!-- DataTables -->
<link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="col-xl-12">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body overflow-hidden">
                            <p class="text-truncate font-size-14 mb-2">Contas a pagar</p>
                            <h4 class="mb-0">R$ {{$totalAccounts}}</h4>
                        </div>
                        <div class="text-primary">
                            <i class="ri-stack-line font-size-24"></i>
                        </div>
                    </div>
                </div>

                <!-- <div class="card-body border-top py-3">
                    <div class="text-truncate">
                        <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span>
                        <span class="text-muted ml-2">From previous period</span>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body overflow-hidden">
                            <p class="text-truncate font-size-14 mb-2">Contas a receber</p>
                            <h4 class="mb-0">$ {{$totalReceipts}}</h4>
                        </div>
                        <div class="text-primary">
                            <i class="ri-store-2-line font-size-24"></i>
                        </div>
                    </div>
                </div>
                <!-- <div class="card-body border-top py-3">
                    <div class="text-truncate">
                        <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span>
                        <span class="text-muted ml-2">From previous period</span>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body overflow-hidden">
                            <p class="text-truncate font-size-14 mb-2">Vendas</p>
                            <h4 class="mb-0">$ 15.4</h4>
                        </div>
                        <div class="text-primary">
                            <i class="ri-briefcase-4-line font-size-24"></i>
                        </div>
                    </div>
                </div>
                <!-- <div class="card-body border-top py-3">
                    <div class="text-truncate">
                        <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span>
                        <span class="text-muted ml-2">From previous period</span>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body overflow-hidden">
                            <p class="text-truncate font-size-14 mb-2">Pedidos a entregaar</p>
                            <h4 class="mb-0">$ 15.4</h4>
                        </div>
                        <div class="text-primary">
                            <i class="ri-briefcase-4-line font-size-24"></i>
                        </div>
                    </div>
                </div>
                <!-- <div class="card-body border-top py-3">
                    <div class="text-truncate">
                        <span class="badge badge-soft-success font-size-11"><i class="mdi mdi-menu-up"> </i> 2.4% </span>
                        <span class="text-muted ml-2">From previous period</span>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- end row -->
</div>

<div class="row" style="margin-top: 20px">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Funil</h4>

                <div id="column_chart_datalabel" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
        <!--end card-->
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Fatura por status</h4>

                <div id="donut_chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('/assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<!-- apexcharts init -->
<script src="{{ URL::asset('/assets/js/pages/apexcharts.init.js')}}"></script>

@endsection