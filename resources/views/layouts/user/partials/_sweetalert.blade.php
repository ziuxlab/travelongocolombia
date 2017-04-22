<script src="{{ asset('js/plugins/sweetalert2/es6-promise.auto.min.js') }}"></script>
<script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script type="text/javascript">
var page_actual;
  $(document).ready(function () {
    jQuery(".js-swal-confirm").on("click", function (e,content) {
      e.preventDefault();
      id   = $(this).attr("data-id");
      data = $('#item_' + id).serialize();
      @if($type=='bookings')
      url  = 'list-bookings/'+id+'?page='+page_actual;
      @elseif($type=='payments')
      url  = 'list-payments/'+id
      @endif
      content = typeof content !== 'undefined' ? content : 'content';
      $.ajax({
        contentType: false,
        url: url,
        type: 'GET',
        success: function (data) {
              // es necesario recargar la lista de bookings para que Session::get('booking_id') se actualice 
              $("#" + content).html(data);  
              @if($type=='bookings')
              showDetailsBooking();    
              @elseif($type=='payments')
              showDetailsPayment();    
              @endif
            }
          });

    })
  });

    $('.pagination a').on('click', function (event) {
        event.preventDefault();
        page_actual = $(this).attr('href').split('page=')[1];
        ajaxLoad($(this).attr('href'));
    });

  function showDetailsBooking(){
   @php 
   $id = Session::get('booking_id');
   $booking_actual = App\booking::find($id);
   @endphp
   @if($booking_actual!=null)
   swal({ 
     title: '<div class="headmodal"><h4 class="titlepl text-left">@lang('dashboard_user.booking_details')</h4></div>',
     html:
     '<div class="table-responsive"><table class="table table-bordered">' +
     '<thead><th class="thtb">@lang('dashboard_user.type')</th><th class="thtb">@lang('dashboard_user.title')</th></thead><tbody>'+
     @foreach($booking_actual->details as $detail)
     '<tr><td>{{$detail->product->typeName()}}</td><td>{{$detail->product->tittle}}</td></tr>'+
     @endforeach
     '</tbody></table></div>',
     showCloseButton: true,
     showCancelButton: false,
     showConfirmButton: false,

   }) 
   @endif
 }

// en caso de querer mostrar mas detalles del pago
 function showDetailsPayment(){
}
</script>