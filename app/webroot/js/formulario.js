/*Formulario Resultado */
/*<script language="javascript">*/

/*
	$(document).ready(function() {
	    $().ajaxStart(function() {
	        $('#loading').show();
	        $('#result').hide();
	    }).ajaxStop(function() {
	        $('#loading').hide();
	        $('#result').fadeIn('slow');
	    });

	    $('#form, #fat, #fo3').submit(function() {
	        $.ajax({
	            type: 'POST',
	            url: $(this).attr('action'),
	            data: $(this).serialize(),
	            success: function(data) {
	                $('#result').html(data);
	                $('#result').css('display','inline-block');
	            }
	        })
	       // return false;
	    }); 
	})  

*/
/*
	function limpiar() {
	setTimeout('document.fo3.reset()',2000);
	return false;
	}*/
/*</script>*/
/*Formulario Resultado fin*/
/*ver El form*/
/*<script type="text/javascript">*/
	var box_actions = {
    open: function(){
    	$('.input01').css('display','inline-block');

    	$('#Mensaje_form').slideDown('slow');
   
    	}
	}
/*</script>*/
/*FIN ver El form*/