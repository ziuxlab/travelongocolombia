<div class="content-boxed content">
    <div class="row steps">
        <div class="col-sm-12">
            @include('app.design._steps',['step'=>2])
        </div>
    </div>
    <div class="row">
        <!-- sider -->
        <div class="col-md-3 push ">
            @include('app.partials._filters', ['type'=> 2])
            @include('app.partials.needhelp')
        </div>
        <!-- end sider -->
        <div class="col-md-9">
            <div id="content"></div>
        </div>
    </div>
</div>

@section('scripts')
    {{$Config->scripts_footer}}
    @include('layouts.app.partials._list', ['type'=> 2])
@stop