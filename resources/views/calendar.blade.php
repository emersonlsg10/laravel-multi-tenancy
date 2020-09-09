@extends('layouts-original.master')
@section('title') Calendario @endsection
@section('css')
<!-- Plugin css -->
<link href="{{ URL::asset('/assets/libs/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
@component('components.breadcrumb')
@slot('title') Calendario @endslot
@slot('li_1') @endslot
@endcomponent

<input type="hidden" id="totalCompras" value="{{sizeof($shoppings)}}" />

@for ($i = 0; $i < sizeof($shoppings); $i++)
    <input type="hidden" id="calendarValue-{{$i}}" value="{{$shoppings[$i]->created_at}}" />
@endfor


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div id='calendar'></div>

                <div style='clear:both'></div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
<!-- plugin js -->
<script src="{{ URL::asset('/assets/libs/moment/moment.min.js')}}"></script>
<script src="{{ URL::asset('/assets/libs/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{ URL::asset('/assets/js/pages/pt-br.js')}}"></script>

<!-- Calendar init -->
<script src="{{ URL::asset('/assets/js/pages/calendar.init.js')}}"></script>
@endsection