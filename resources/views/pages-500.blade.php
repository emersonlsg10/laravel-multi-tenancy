@extends('layouts.master-without-nav')
@section('title') 500 Error @endsection
@section('content')
    <div class="my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center my-5">
                        <h1 class="font-weight-bold text-error">5 <span class="error-text">0<img src="{{ URL::asset('/assets/images/error-img.png')}}" alt="" class="error-img"></span> 0</h1>
                        <h3 class="text-uppercase">Internal Server Error</h3>
                        <div class="mt-5 text-center">
                            <a class="btn btn-primary waves-effect waves-light" href="{{url('index')}}">Back to Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
