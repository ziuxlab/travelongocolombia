  <table class="table table-bordered">
    <thead>
        <tr>
            <th>@lang('general.tittle')</th>
            <th class="hidden-xs">Url</th>
            <th class="" style="width: 15%;">@lang('general.status')</th>
            <th class="hidden-xs">Days</th>
            <th class="">@lang('general.language')</th>
            <th class="text-center" style="width: 100px;">@lang('general.actions')</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $activity)
        <tr id="{{$activity->id}}">
            <td class="text-capitalize">{{$activity->tittle}}</td>
            <td class="hidden-xs">{{$activity->slug_url}}</td>
            <td class="">
                @if($activity->status == false)
                <span class="label label-danger">Deshabilitado</span>
                @else
                <span class="label label-success">Habilitado</span>
                @endif
            </td>
            <td>{{$activity->days}}</td>
            <td>{{$activity->local}}</td>
            <td class="text-center">
                <div class="btn-group">
                    <a href="{{url('admin/activities/'. $activity->id . '/edit')}}"
                       class="btn btn-xs btn-default"
                       type="button" data-toggle="tooltip" title=""
                       data-original-title="Editar Actividad"><i class="fa fa-pencil"></i></a>
                       <button class="js-swal-confirm btn btn-xs btn-default" type="button"
                       data-toggle="tooltip" data-id="{{ $activity->id }}" title=""
                       data-original-title="Eliminar Actividad"><i class="fa fa-times"></i>
                       {!! Form::open(['action'=> ['ActivityController@destroy',$activity->id],'method'=>'delete','id'=>'item_'.$activity->id]) !!}
                       {!! Form::close() !!}
                   </button>
               </div>
           </td>
       </tr>
       @endforeach
   </tbody>
</table>
<div>{!! str_replace('/?','?',$products->render()) !!}</div>
<script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>