@extends('layouts.app.app')

@section('title')
    @if(Session::get('step') == null)
        {{$item->tittle}}
    @elseif(Session::get('step') == 1)
        @lang('general.enter information')
    @elseif(Session::get('step') == 2)
        @lang('general.search') @lang('general.hotels')
    @elseif(Session::get('step') == 3)
        @lang('general.search') @lang('general.activities')
    @elseif(Session::get('step') == 4)
        @lang('general.additional services')
    @else
        @lang('general.proceed checkout')
    @endif

@stop

@section('keywords')
    {{$item->keywords or $Config->keywords}}
@stop

@section('description')
    {{$item->meta_description or $Config->meta_description}}
@stop

@section('style')
    <link rel="stylesheet" href="{{url('js/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/sweetalert2/sweetalert2.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/slick/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('js/plugins/slick/slick-theme.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.min.css">
    
    {{$Config->css}}
@stop

@section('scripts_header')
    {{$Config->scripts_header}}
@stop

@section('breadcrumb')
@stop

@section('contenido')
    @if(Session::get('step') == null)
        @include('app.design._step_1')
    @else
        @include('app.design._step_'.Session::get('step'))
    @endif
@stop

@section('scripts')
    {{$Config->scripts_footer}}
    <script src="{{url('js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script>
        $(function () {
            App.initHelper('datepicker');
        });
    </script>
    <script>
        function agregar_rooms(value,id,kinds_room) {
            console.log(value);
            for (i = 1; i < (parseInt(value) + 1); i++) {
                html = '<div id="room_'+ i +'"><div class="col-sm-4" ><div class="form-group">'+
                    '<label class="control-label">@lang('general.rooms') ' + i +':</label>' +
                    '<select class="form-control" name="rooms[' + i + '][id]">';
                $.each(kinds_room, function (i, elem) {
                    // do your stuff
                    html = html +  '<option value="'+ elem.id+'">'+ elem.kind_room +'</option>'

                });
                html = html + '</select></div></div>' +
                    '<div class="col-sm-4" ><div class="form-group">' +
                    '<label class="control-label">@lang('general.Adults'):</label>'+
                    '<div class="input-group"><span class="input-group-btn">' +
                    '<button type="button" class="btn btn-xs btn-default value-control" data-action="minus" data-target="adults_' + i + '">' +
                    '<span class="glyphicon glyphicon-minus"></span> </button> </span>'+
                    '<input class="text-center form-control"  id="adults_'+ i +'" min="0" max="10" name="rooms['+ i +'][adults]" type="text" value="1">' +
                    '<span class="input-group-btn">' +
                    '<button type="button" class="btn btn-xs  btn-default value-control"  data-action="plus" data-target="adults_' + i + '">'+
                    '<span class="glyphicon glyphicon-plus"></span></button></span></div></div></div>'+
                    '<div class="col-sm-4" ><div class="form-group">' +
                    '<label class="control-label">@lang('general.children'):</label>'+
                    '<div class="input-group"><span class="input-group-btn">' +
                    '<button type="button" class="btn btn-xs btn-default value-control" data-action="minus" data-target="children_' + i+ '">' +
                    '<span class="glyphicon glyphicon-minus"></span> </button> </span>'+
                    '<input class="text-center form-control"  id="children_'+ i +'" min="0" max="10" name="rooms['+ i +'][children]" type="text" value="0">' +
                    '<span class="input-group-btn">' +
                    '<button type="button" class="btn btn-xs  btn-default value-control"  data-action="plus" data-target="children_' + i + '">'+
                    '<span class="glyphicon glyphicon-plus"></span></button></span></div></div></div>'+
                    '</div>';

                $('#rooms-'+id).append(html)
            }



        }
    </script>
    
@stop