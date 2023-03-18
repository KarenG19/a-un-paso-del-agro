var funcion="insertar";
var id=0;

$(document).ready(function(){

	$("#usuario_existe").hide();

	$('#button-menu').click(function(){
		if($('#button-menu').attr('class') == 'fa fa-bars' ){

			$('.navegacion').css({'width':'100%', 'background':'rgba(0,0,0,.5)'}); 
			$('#button-menu').removeClass('fa fa-bars').addClass('fa fa-close'); 
			$('.navegacion .menu').css({'left':'0px'}); 

		} else{

			$('.navegacion').css({'width':'0%', 'background':'rgba(0,0,0,.0)'}); 
			$('#button-menu').removeClass('fa fa-close').addClass('fa fa-bars'); 
			$('.navegacion .menu').css({'left':'-320px'}); 

		}
	});

	$("#username").blur(function(){
		$.get("php/usuario_existe.php",{username:$(this).val()},function(data){
		   	if ($.trim(data)=="true") {	
			   $("#usuario_existe").show();
		   	}
	   	});
	});
   
  	$("#username").focus(function(){
		$("#usuario_existe").hide();
   	});
});