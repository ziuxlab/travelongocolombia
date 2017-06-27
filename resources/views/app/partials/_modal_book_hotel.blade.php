<div class="modal" id="book-modal-{{$id}}">
    <div class="modal-dialog modal-dialog-popin">
        <div class="modal-content modal-rounded">
            <div class="block block-rounded block-themed block-transparent ">
                <div class="block-content block-content-full">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="text-center push-20">@lang('general.rooms')</h3>
                    <div class="row" id="rooms-{{$id}}">

                    </div>
                    <div class="text-center">
                        <button class="btn btn-minw btn-primary text-capitalize" type="submit"> @lang('general.next')
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    $( "#book-modal-{{$id}}" ).on('show.bs.modal', function(){
        var id = '{{$id}}';
        var quantity = $('#bed_'+id).val();
        var kinds_room = <?php echo json_encode($product->kindsHotel); ?>;
        agregar_rooms(quantity,id,kinds_room);
    });


</script>

