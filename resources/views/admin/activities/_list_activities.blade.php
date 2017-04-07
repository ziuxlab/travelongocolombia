<table class="table table-bordered">
    <thead>
    <tr>
        <th>
            <a href="javascript:ajaxLoad('products/list/1?field=tittle&sort={{Session::get('product_sort')=='asc'?'desc':'asc'}}')">
                @lang('general.tittle')
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('product_field')=='tittle'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th class="hidden-xs">
            <a href="javascript:ajaxLoad('products/list/1?field=slug_url&sort={{Session::get('product_sort')=='asc'?'desc':'asc'}}')">
                Url
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('product_field')=='slug_url'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th class="" style="width: 15%;">
            <a href="javascript:ajaxLoad('products/list/1?field=status&sort={{Session::get('product_sort')=='asc'?'desc':'asc'}}')">
                @lang('general.status')
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('product_field')=='status'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>

        </th>
        <th class="">
            <a href="javascript:ajaxLoad('products/list/1?field=local&sort={{Session::get('product_sort')=='asc'?'desc':'asc'}}')">
                @lang('general.language')
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('product_field')=='local'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th class="hidden-xs">Days</th>
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
            <td>{{$activity->local}}</td>
            <td>{{$activity->days}}</td>
            <td class="text-center">
                <div class="btn-group">
                    <a href="{{url('admin/activities/'. $activity->id . '/edit')}}"
                       class="btn btn-xs btn-default"
                       type="button" data-toggle="tooltip" title=""
                       data-original-title="@lang('general.edit')"><i class="fa fa-pencil"></i></a>
                    <button class="js-swal-confirm btn btn-xs btn-default" type="button"
                            data-toggle="tooltip" data-id="{{ $activity->id }}" title=""
                            data-original-title="@lang('general.delete')"><i class="fa fa-times"></i>
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

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>