<!--pendiente, genera excepcion con el ckeditor -->
<script type="text/javascript">
    var nuevoalias = jQuery.noConflict();
    nuevoalias(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
              $(wrapper).append('<div>{!! Form::text('itinerary', null, ['class' => 'form-control','name'=>'itinerary[]']) !!}<a href="#" class="remove_field"><i class="fa fa-times text-danger"></i></a></div>'); //add input box
          }
      });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>