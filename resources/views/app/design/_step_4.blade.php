<div class="content-boxed ">
    <div class="row steps">
        <div class="col-sm-12">
            @include('app.design._steps',['step'=>4])
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="block block-bordered block-rounded remove-margin">
                <div class="block-content block-content-narrow block-content-full h5 text-center">
                    Lessons and Other services you can get in Armenia (with additional cost) according with your
                    necessities,
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content-boxed content">
    <div class="row">
        <div class="col-sm-12">
            <div id="content" class="flex"></div>
        </div>
    </div>
</div>
@section('scripts')
    @include('layouts.app.partials._list', ['type'=> 4])
    <script>
        function enviar_formulario_book(choice, id) {
            console.log(choice);
            //choice es la opcion 0 o 1 si es 0 va al checkout y si escoge 1 va a buscar vuelos
            if (choice == 0) {
                var formulario = $('#formulario_book_' + id);
                formulario.submit();
            } else {
                var formulario = $('#formulario_book_' + id);
                $('#agregate_' + id).val(1);
                formulario.submit();
            }
        }
    </script>
@stop
    