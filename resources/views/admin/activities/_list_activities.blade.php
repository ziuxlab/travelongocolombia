<!-- options -->
<div class="row">
 <div class="col-lg-6">
    <a href="{{url('admin/activities/create')}}" class="btn btn-primary push"> + Crear Actividades</a>
 </div>
<div class="col-lg-6 push-20">
    <div class="input-group">  
      <span class="input-group-addon" id="basic-addon2">
          <i class="glyphicon glyphicon-search"></i></span>
      <input type="text" class="form-control" placeholder="Buscar por Nombre" value="{{ Session::get('product_search')}}" onkeydown="if (event.keyCode == 13) ajaxLoad('products/list/1?ok=1&search='+this.value)">
    </div>
</div>
</div>
<!-- end options -->
@if(Session::get('product_search') == '' and count($products) == 0)
<p>@lang('general.notproductsf',['name'=>'activities'])</p>
@elseif(Session::get('product_search') != '' and count($products) == 0)
<p>@lang('general.notresults')</p>
@else
<!-- list activities -->
<div class="table-responsive">
<table class="table table-bordered">
    <thead>
    <tr>
        <th>
            <a href="javascript:ajaxLoad('products/list/1?field=tittle&sort={{Session::get('product_sort')=='asc'?'desc':'asc'}}')">
                TÍtulo
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
        <th class="" >
            <a href="javascript:ajaxLoad('products/list/1?field=status&sort={{Session::get('product_sort')=='asc'?'desc':'asc'}}')">
                Estado
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('product_field')=='status'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>

        </th>
        <th class="" >
            <a href="javascript:ajaxLoad('products/list/1?field=local&sort={{Session::get('product_sort')=='asc'?'desc':'asc'}}')">
                Lenguaje
            </a>
            <i style="font-size: 12px"
               class="glyphicon  {{ Session::get('product_field')=='local'?(Session::get('product_sort')=='asc'?'glyphicon-sort-by-alphabet':'glyphicon-sort-by-alphabet-alt'):'' }}">
            </i>
        </th>
        <th class="text-center" style="width: 100px;">Control</th>
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
            <td class="text-center">
                <div class="btn-group">
                    <a href="{{url('admin/activities/'. $activity->id . '/edit')}}"
                       class="btn btn-xs btn-default"
                       type="button" data-toggle="tooltip" title=""
                       data-original-title="Editar"><i class="fa fa-pencil"></i></a>
                    <button class="js-swal-confirm btn btn-xs btn-default" type="button"
                            data-toggle="tooltip" data-id="{{ $activity->id }}" title=""
                            data-original-title="Eliminar"><i class="fa fa-times"></i>
                        {!! Form::open(['action'=> ['ActivityController@destroy',$activity->id],'method'=>'delete','id'=>'item_'.$activity->id]) !!}
                        {!! Form::close() !!}
                    </button>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="text-center">{!! str_replace('/?','?',$products->render()) !!}</div>
</div>
<!-- end list activities -->
@endif

@include('layouts.admin.partials._sweetalert', ['name'=>'La actividad'])
@include('layouts.app.partials._tooltip')
 <script>
    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        ajaxLoad($(this).attr('href'));
    });
</script>


