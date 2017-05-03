<div class="block block-rounded">
        <ul class="list-group">
            @foreach($productos as $item)
                <?php $type_search = $item->type == 0 ? trans('general.packages'):
                        ($item->type == 1 ? trans('general.activities') :  ($item->type == 2 ? trans('general.hotels') : 'no aplica')) ?>
                <a href="{{url($type_search.'/'.$item->slug_url)}}" class="list-group-item">
                        <div class="h5 font-w600 text-capitalize text-left">{{$item->tittle}}
                            <span class="font-s12 text-muted"> -
                            {{$type_search}} - </span>
                        </div>
                        <div class="font-s12 text-muted text-left">{{str_limit($item->description,100,'...') }}</div>
                </a>
            @endforeach
        </ul>
</div>
