@extends('layouts.master')
@section('title') Round slider @endsection
@section('css')
 <!-- roundslider css -->
<link href="{{ URL::asset('/assets/libs/round-slider/round-slider.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
    @slot('title') Round slider @endslot
    @slot('li_1') UI Elements @endslot
    @slot('li_2') Round slider @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Slider Types</h4>

                <div class="row">
                    <div class="col-xl-4 col-sm-6">
                        <div class="text-center mt-4">
                            <h5 class="font-size-14 mb-4">Default</h5>

                            <div dir="ltr">
                                <div id="default-slider" class="rs-range-primary"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="text-center mt-4">
                            <h5 class="font-size-14 mb-4">Min range</h5>

                            <div dir="ltr">
                                <div id="min-range" class="rs-range-primary"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6">
                        <div class="text-center mt-4">
                            <h5 class="font-size-14 mb-4">Min range</h5>

                            <div dir="ltr">
                                <div id="range" class="rs-range-primary"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Slider circle shapes</h4>

                <div class="row">
                    <div class="col-xl-4 col-sm-6">
                        <div class="text-center mt-4">
                            <h5 class="font-size-14 mb-4">Quarter top left</h5>
                            
                            <div dir="ltr">
                                <div id="quarter-top-left" class="rs-range-primary"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="text-center mt-4">
                            <h5 class="font-size-14 mb-4">Half top</h5>

                            <div dir="ltr">
                                <div id="half-top" class="rs-range-primary"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Example</h4>

                <div class="row">
                    <div class="col-xl-4 col-sm-6">
                        <div class="text-center mt-4">
                            <h5 class="font-size-14 mb-4">Square Roundslider</h5>

                            <div dir="ltr">
                                <div id="square-roundslider" class="rs-range-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="text-center mt-4">
                            <h5 class="font-size-14 mb-4">Handleshape Dot</h5>

                            <div dir="ltr">
                                <div id="handleshape-dot" class="rs-range-info"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6">
                        <div class="text-center mt-4">
                            <h5 class="font-size-14 mb-4">Border Roundslider</h5>

                            <div dir="ltr">
                                <div id="border-roundslider" class="rs-range-success rs-circle-border"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-sm-6">
                        <div class="text-center mt-4 mt-5">
                            <h5 class="font-size-14 mb-4">Outer border</h5>

                            <div dir="ltr">
                                <div id="outer-border" class="rs-range-warning outer-border"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="text-center mt-4 mt-5">
                            <h5 class="font-size-14 mb-4">Outer border Dot</h5>

                            <div dir="ltr">
                                <div id="outer-border-dot" class="rs-range-primary outer-border-dot"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Handle shapes</h4>

                <div class="row">
                    <div class="col-xl-4 col-sm-6">
                        <div class="text-center mt-4">
                            <h5 class="font-size-14 mb-4">Handle arrow</h5>

                            <div dir="ltr">
                                <div id="handle-arrow" class="rs-handle-arrow rs-range-danger"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6">
                        <div class="text-center mt-4">
                            <h5 class="font-size-14 mb-4">Handle arrow dashed </h5>

                            <div dir="ltr">
                                <div id="handle-arrow-dashed" class="rs-handle-arrow-dash rs-range-success"></div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection
@section('script') 
<!-- roundslider js -->
<script src="{{ URL::asset('/assets/libs/round-slider/round-slider.min.js')}}"></script>

<!-- roundslider init -->
<script src="{{ URL::asset('/assets/js/pages/roundslider.init.js')}}"></script>

@endsection
