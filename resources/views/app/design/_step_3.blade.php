<div class="content-boxed ">
    <div class="row steps">
        <div class="col-sm-12">
                @include('app.design._steps',['step'=>3])
        </div>
    </div>
</div>
<div class="content-boxed content remove-padding-t">
    <div class="row">
        <!-- sider -->
        <div class="col-md-3 push ">
            @include('app.partials._filters', ['type'=> 1])
            @include('app.partials.needhelp')
        </div>
        <!-- end sider -->
        <div class="col-md-9">
            <div id="content"></div>
        </div>
    </div>
</div>
@section('scripts')
    @include('layouts.app.partials._list', ['type'=> 1])
    <script>
        function enviar_formulario_book(choice, id) {
            console.log(choice);
            //choice es la opcion 0 o 1 si es 0 va al checkout y si escoge 1 va a buscar vuelos
            if(choice == 0){
                var formulario = $('#formulario_book_'+id);
                console.log(formulario);
                formulario.submit();
            }else{
                var formulario = $('#formulario_book_'+id);
                $('#agregate_'+id).val(1);
                formulario.submit();
            }
        }
    </script>
@stop