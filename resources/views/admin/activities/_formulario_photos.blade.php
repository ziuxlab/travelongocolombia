<div class="col-sm-12">
    <div CLASS="block block-bordered block-rounded block-themed ">
        <div class="block-header bg-primary">
            <h3 class="h4">@lang('general.imagesf',['name'=>'Activiy'])</h3>
        </div>
        <div class="block-content block-content-full block-content-narrow">
            <div class="block-content table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>imagen</th>
                        <th>@lang('general.name')</th>
                        <th class="hidden-xs" style="width: 15%;">@lang('general.order')</th>
                        <th class="text-center" style="width: 100px;">@lang('general.actions')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($activity->photos as $item)
                        <tr id="{{$item->id}}">
                            <td style="width: 20%">
                                <img class="img-responsive" src="{{url($item->img)}}" alt=""></td>
                            <td>{{$item->img}}</td>
                            <td class="text-center" id="order_{{$item->id}}">
                                {{$item->order}}
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button class="js-swal-update btn btn-xs btn-default"
                                            type="button" data-id="{{ $item->id }}" data-toggle="tooltip" title=""
                                            data-original-title="Editar Ubicación imagen"><i class="fa fa-pencil"></i>
                                        {!! Form::open(['action'=> ['ActivityController@update_order_photo',$item->id],'method'=>'post','id'=>'update_'.$item->id]) !!}
                                        {!! Form::close() !!}
                                    </button>
                                    <button class="js-swal-confirm btn btn-xs btn-default"
                                            data-toggle="tooltip" data-id="{{ $item->id }}" title=""
                                            data-original-title="Eliminar imagen"><i class="fa fa-times"></i>
                                        {!! Form::open(['action'=> ['ActivityController@delete_photo',$item->id],'method'=>'delete','id'=>'item_'.$item->id]) !!}
                                        {!! Form::close() !!}
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>