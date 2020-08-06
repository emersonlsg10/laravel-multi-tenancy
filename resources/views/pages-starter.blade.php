@extends('layouts.master')

@section('title') Starter page @endsection

@section('content')
@component('components.breadcrumb')
        @slot('title') Starter Page @endslot
        @slot('li_1') Utility @endslot
        @slot('li_2') Starter Page @endslot
    @endcomponent         

@endsection
