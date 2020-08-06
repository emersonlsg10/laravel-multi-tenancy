@extends('layouts.master')
@section('title') Add Product @endsection
@section('css')
    <!-- twitter-bootstrap-wizard css -->
    <link href="{{ URL::asset('/assets/libs/twitter-bootstrap-wizard/twitter-bootstrap-wizard.min.css')}}" rel="stylesheet" >

    <!-- select2 css -->
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')                
    @slot('title') Add Product @endslot
    @slot('li_1') Ecommerce @endslot
    @slot('li_2') Add Product @endslot
@endcomponent
<!-- Start row --> 
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                
                <div id="addproduct-nav-pills-wizard" class="twitter-bs-wizard">
                    <ul class="twitter-bs-wizard-nav">
                        <li class="nav-item">
                            <a href="#basic-info" class="nav-link" data-toggle="tab">
                                <span class="step-number">01</span>
                                <span class="step-title">Basic Info</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#product-img" class="nav-link" data-toggle="tab">
                                <span class="step-number">02</span>
                                <span class="step-title">Product Img</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#metadata" class="nav-link" data-toggle="tab">
                                <span class="step-number">03</span>
                                <span class="step-title">Meta Data</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content twitter-bs-wizard-tab-content">
                        <div class="tab-pane" id="basic-info">
                            <h4 class="card-title">Basic Information</h4>
                            <p class="card-title-desc">Fill all information below</p>

                            <form>
                                <div class="form-group">
                                    <label for="productname">Product Name</label>
                                    <input id="productname" name="productname" type="text" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        
                                        <div class="form-group">
                                            <label for="manufacturername">Manufacturer Name</label>
                                            <input id="manufacturername" name="manufacturername" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        
                                        <div class="form-group">
                                            <label for="manufacturerbrand">Manufacturer Brand</label>
                                            <input id="manufacturerbrand" name="manufacturerbrand" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input id="price" name="price" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Category</label>
                                            <select class="form-control select2">
                                                <option>Select</option>
                                                <option value="EL">Electronic</option>
                                                <option value="FA">Fashion</option>
                                                <option value="FI">Fitness</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Features</label>

                                            <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                <option value="TO">Touchscreen</option>
                                                <option value="CF">Call Function</option>
                                                <option value="NO" selected>Notifications</option>
                                                <option value="FI" selected>Fitness</option>
                                                <option value="OU">Outdoor</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="productdesc">Product Description</label>
                                    <textarea class="form-control" id="productdesc" rows="5"></textarea>
                                </div>
                            </form>

                        </div>
                        <div class="tab-pane" id="product-img">
                            <h4 class="card-title">Product Images</h4>
                            <p class="card-title-desc">Upload product image</p>
                            <form action="/" method="post" class="dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>

                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted ri-upload-cloud-2-line"></i>
                                    </div>
                                    
                                    <h4>Drop files here or click to upload.</h4>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="metadata">
                            <h4 class="card-title">Meta Data</h4>
                            <p class="card-title-desc">Fill all information below</p>

                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="metatitle">Meta title</label>
                                            <input id="metatitle" name="metatitle" type="text" class="form-control">
                                        </div>
                                        
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="metakeywords">Meta Keywords</label>
                                            <input id="metakeywords" name="metakeywords" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="metadescription">Meta Description</label>
                                    <textarea class="form-control" id="metadescription" rows="5"></textarea>
                                </div>
                            </form>

                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary mr-2 waves-effect waves-light">Save Changes</button>
                                <button type="submit" class="btn btn-light waves-effect">Cancel</button>
                            </div>
                        </div>
                    </div>
                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                        <li class="previous"><a href="#">Previous</a></li>
                        <li class="next"><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
@endsection
@section('script')
    <!-- twitter-bootstrap-wizard js -->
    <script src="{{ URL::asset('/assets/libs/twitter-bootstrap-wizard/twitter-bootstrap-wizard.min.js')}}"></script>

    <!-- select 2 plugin -->
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js')}}"></script>

    <!-- dropzone plugin -->
    <script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js')}}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/ecommerce-add-product.init.js')}}"></script>
@endsection

