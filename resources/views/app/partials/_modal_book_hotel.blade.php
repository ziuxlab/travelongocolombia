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
                    <div class="row push-20">


                    </div>
                    <div class="text-center">
                        <button class="btn btn-minw btn-primary" type="submit"
                                data-dismiss="modal"> @lang('general.pay')
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
console.log(id);
    });
</script>

