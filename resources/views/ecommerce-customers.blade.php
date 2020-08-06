@extends('layouts.master')
@section('title') Customers @endsection
@section('css')
    <!-- DataTables css -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')                
    @slot('title') Customers @endslot
    @slot('li_1') Ecommerce @endslot
    @slot('li_2') Customers @endslot
@endcomponent
<!-- Start row --> 
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div>
                    <a href="javascript:void(0);" class="btn btn-success mb-2"><i class="mdi mdi-plus mr-2"></i> Add Customer</a>
                </div>
                <div class="table-responsive mt-3">
                    <table class="table table-centered datatable dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customercheck">
                                        <label class="custom-control-label" for="customercheck">&nbsp;</label>
                                    </div>
                                </th>
                                <th>Customer</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Wallet Balance</th>
                                <th>Joining Date</th>
                                <th style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customercheck1">
                                        <label class="custom-control-label" for="customercheck1">&nbsp;</label>
                                    </div>
                                </td>
                                
                                <td>Carolyn Harvey</td>
                                <td>CarolynHarvey@rhyta.com</td>
                                <td>580-464-4694</td>
                                
                                <td>
                                    $ 3245
                                </td>
                                <td>
                                    06 Apr, 2020
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customercheck2">
                                        <label class="custom-control-label" for="customercheck2">&nbsp;</label>
                                    </div>
                                </td>
                                
                                <td>Angelyn Hardin</td>
                                <td>AngelynHardin@dayrep.com</td>
                                <td>913-248-2690</td>
                                
                                <td>
                                    $ 2435
                                </td>
                                <td>
                                    05 Apr, 2020
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customercheck3">
                                        <label class="custom-control-label" for="customercheck3">&nbsp;</label>
                                    </div>
                                </td>
                                
                                <td>Carrie Thompson</td>
                                <td>CarrieThompson@rhyta.com</td>
                                <td>734-819-9286</td>
                                
                                <td>
                                    $ 2653
                                </td>
                                <td>
                                    04 Apr, 2020
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customercheck4">
                                        <label class="custom-control-label" for="customercheck4">&nbsp;</label>
                                    </div>
                                </td>
                                
                                <td>Kathleen Haller</td>
                                <td>KathleenHaller@dayrep.com</td>
                                <td>313-742-3333</td>
                                
                                <td>
                                    $ 2135
                                </td>
                                <td>
                                    03 Apr, 2020
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customercheck5">
                                        <label class="custom-control-label" for="customercheck5">&nbsp;</label>
                                    </div>
                                </td>
                                
                                <td>Martha Beasley</td>
                                <td>MarthaBeasley@teleworm.us</td>
                                <td>301-330-5745</td>
                                
                                <td>
                                    $ 2698
                                </td>
                                <td>
                                    02 Apr, 2020
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customercheck6">
                                        <label class="custom-control-label" for="customercheck6">&nbsp;</label>
                                    </div>
                                </td>
                                
                                <td>Kathryn Hudson</td>
                                <td>KathrynHudson@armyspy.com</td>
                                <td>414-453-5725</td>
                                
                                <td>
                                    $ 2758
                                </td>
                                <td>
                                    02 Apr, 2020
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customercheck7">
                                        <label class="custom-control-label" for="customercheck7">&nbsp;</label>
                                    </div>
                                </td>
                                
                                <td>Robert Bott</td>
                                <td>RobertBott@armyspy.com</td>
                                <td>712-237-9899</td>
                                
                                <td>
                                    $ 2836
                                </td>
                                <td>
                                    01 Apr, 2020
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customercheck8">
                                        <label class="custom-control-label" for="customercheck8">&nbsp;</label>
                                    </div>
                                </td>
                                
                                <td>Mary McDonald</td>
                                <td>MaryMcDonald@armyspy.com</td>
                                <td>317-510-25554</td>
                                
                                <td>
                                    $ 3245
                                </td>
                                <td>
                                    31 Mar, 2020
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customercheck9">
                                        <label class="custom-control-label" for="customercheck9">&nbsp;</label>
                                    </div>
                                </td>
                                
                                <td>Keith Rainey</td>
                                <td>KeithRainey@jourrapide.com</td>
                                <td>214-712-1810</td>
                                
                                <td>
                                    $ 3125
                                </td>
                                <td>
                                    30 Mar, 2020
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customercheck10">
                                        <label class="custom-control-label" for="customercheck10">&nbsp;</label>
                                    </div>
                                </td>
                                
                                <td>Anthony Russo</td>
                                <td>AnthonyRusso@jourrapide.com</td>
                                <td>412-371-8864</td>
                                
                                <td>
                                    $ 2456
                                </td>
                                <td>
                                    30 Mar, 2020
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customercheck11">
                                        <label class="custom-control-label" for="customercheck11">&nbsp;</label>
                                    </div>
                                </td>
                                
                                <td>Donna Betz</td>
                                <td>DonnaBetz@jourrapide.com</td>
                                <td>626-583-5779</td>
                                
                                <td>
                                    $ 3423
                                </td>
                                <td>
                                    29 Mar, 2020
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customercheck12">
                                        <label class="custom-control-label" for="customercheck12">&nbsp;</label>
                                    </div>
                                </td>
                                
                                <td>Angie Andres</td>
                                <td>AngieAndres@armyspy.com</td>
                                <td>213-494-4527</td>
                                
                                <td>
                                    $ 3245
                                </td>
                                <td>
                                    28 Apr, 2020
                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="mr-3 text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection
@section('script')
<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js')}}"></script>

<script src="{{ URL::asset('/assets/js/pages/ecommerce-datatables.init.js')}}"></script>
@endsection

