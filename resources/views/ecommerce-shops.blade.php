@extends('layouts.master')
@section('title') Shops @endsection
@section('content')
@component('components.breadcrumb')                
    @slot('title') Shops @endslot
    @slot('li_1') Ecommerce @endslot
    @slot('li_2') Shops @endslot
@endcomponent
<!-- Start row --> 
<div class="row">
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ URL::asset('/assets/images/companies/img-1.png')}}" alt="" class="avatar-sm mt-2 mb-4">
                    <div class="media-body">
                        <h5 class="text-truncate"><a href="#" class="text-dark">Nedick's</a></h5>
                        <p class="text-muted">
                            <i class="mdi mdi-account mr-1"></i> Wayne McClain
                        </p>
                    </div>
                </div>

                <hr class="my-4">

                <div class="row text-center">
                    <div class="col-6">
                        <p class="text-muted mb-2">Products</p>
                        <h5>86</h5>
                    </div>
                    <div class="col-6">
                        <p class="text-muted mb-2">Wallet Balance</p>
                        <h5>$12,456</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ URL::asset('/assets/images/companies/img-2.png')}}" alt="" class="avatar-sm mt-2 mb-4">
                    <div class="media-body">
                        <h5 class="text-truncate"><a href="#" class="text-dark">Brendle's</a></h5>
                        <p class="text-muted">
                            <i class="mdi mdi-account mr-1"></i> David Marshall
                        </p>
                    </div>
                </div>

                <hr class="my-4">

                <div class="row text-center">
                    <div class="col-6">
                        <p class="text-muted mb-2">Products</p>
                        <h5>72</h5>
                    </div>
                    <div class="col-6">
                        <p class="text-muted mb-2">Wallet Balance</p>
                        <h5>$10,352</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ URL::asset('/assets/images/companies/img-3.png')}}" alt="" class="avatar-sm mt-2 mb-4">
                    <div class="media-body">
                        <h5 class="text-truncate"><a href="#" class="text-dark">Tech Hifi</a></h5>
                        <p class="text-muted">
                            <i class="mdi mdi-account mr-1"></i> Katia Stapleton
                        </p>
                    </div>
                </div>

                <hr class="my-4">

                <div class="row text-center">
                    <div class="col-6">
                        <p class="text-muted mb-2">Products</p>
                        <h5>75</h5>
                    </div>
                    <div class="col-6">
                        <p class="text-muted mb-2">Wallet Balance</p>
                        <h5>$9,963</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ URL::asset('/assets/images/companies/img-4.png')}}" alt="" class="avatar-sm mt-2 mb-4">
                    <div class="media-body">
                        <h5 class="text-truncate"><a href="#" class="text-dark">Lafayette</a></h5>
                        <p class="text-muted">
                            <i class="mdi mdi-account mr-1"></i> Andrew Bivens
                        </p>
                    </div>
                </div>

                <hr class="my-4">

                <div class="row text-center">
                    <div class="col-6">
                        <p class="text-muted mb-2">Products</p>
                        <h5>65</h5>
                    </div>
                    <div class="col-6">
                        <p class="text-muted mb-2">Wallet Balance</p>
                        <h5>$14,568</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ URL::asset('/assets/images/companies/img-5.png')}}" alt="" class="avatar-sm mt-2 mb-4">
                    <div class="media-body">
                        <h5 class="text-truncate"><a href="#" class="text-dark">Packer</a></h5>
                        <p class="text-muted">
                            <i class="mdi mdi-account mr-1"></i> Mae Rankin
                        </p>
                    </div>
                </div>

                <hr class="my-4">

                <div class="row text-center">
                    <div class="col-6">
                        <p class="text-muted mb-2">Products</p>
                        <h5>82</h5>
                    </div>
                    <div class="col-6">
                        <p class="text-muted mb-2">Wallet Balance</p>
                        <h5>$16,445</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ URL::asset('/assets/images/companies/img-6.png')}}" alt="" class="avatar-sm mt-2 mb-4">
                    <div class="media-body">
                        <h5 class="text-truncate"><a href="#" class="text-dark">Micro Design</a></h5>
                        <p class="text-muted">
                            <i class="mdi mdi-account mr-1"></i> Brian Correa
                        </p>
                    </div>
                </div>

                <hr class="my-4">

                <div class="row text-center">
                    <div class="col-6">
                        <p class="text-muted mb-2">Products</p>
                        <h5>71</h5>
                    </div>
                    <div class="col-6">
                        <p class="text-muted mb-2">Wallet Balance</p>
                        <h5>$11,523</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ URL::asset('/assets/images/companies/img-7.png')}}" alt="" class="avatar-sm mt-2 mb-4">
                    <div class="media-body">
                        <h5 class="text-truncate"><a href="#" class="text-dark">Keeney's</a></h5>
                        <p class="text-muted">
                            <i class="mdi mdi-account mr-1"></i> Dean Odom
                        </p>
                    </div>
                </div>

                <hr class="my-4">

                <div class="row text-center">
                    <div class="col-6">
                        <p class="text-muted mb-2">Products</p>
                        <h5>66</h5>
                    </div>
                    <div class="col-6">
                        <p class="text-muted mb-2">Wallet Balance</p>
                        <h5>$13,478</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <img src="{{ URL::asset('/assets/images/companies/img-8.png')}}" alt="" class="avatar-sm mt-2 mb-4">
                    <div class="media-body">
                        <h5 class="text-truncate"><a href="#" class="text-dark">Tech Hifi</a></h5>
                        <p class="text-muted">
                            <i class="mdi mdi-account mr-1"></i> John McLeroy
                        </p>
                    </div>
                </div>

                <hr class="my-4">

                <div class="row text-center">
                    <div class="col-6">
                        <p class="text-muted mb-2">Products</p>
                        <h5>58</h5>
                    </div>
                    <div class="col-6">
                        <p class="text-muted mb-2">Wallet Balance</p>
                        <h5>$14,654</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- end row -->
<!-- Start row -->                            
<div class="row">
    <div class="col-xl-12">
        <div class="text-center my-3">
            <a href="javascript:void(0);" class="text-primary"><i class="mdi mdi-loading mdi-spin font-size-20 align-middle mr-2"></i> Load more </a>
        </div>
    </div>
</div>
<!-- end row -->
@endsection
@section('content')
                  
