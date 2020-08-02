@extends('layouts.master')
@section('title') Remix Icons @endsection
@section('content')
@component('components.breadcrumb')
    @slot('title') Remix Icons @endslot
    @slot('li_1') Icons @endslot
    @slot('li_2') Remix Icons @endslot
@endcomponent

<div class="row">
    <div class="col-12" id="icons">
        
    </div> <!-- end col-->
</div> <!-- end row-->
@endsection
@section('script') 

    <!-- Remix icon js-->
    <script src="{{ URL::asset('/assets/js/pages/remix-icons-list.js')}}"></script>

@endsection