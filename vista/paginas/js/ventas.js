
/*
var btnAbrirPopup = document.getElementById("reset"),
		overlay = document.getElementById("overlay"),
		popup = document.getElementById("popup"),
		btnCerrarPopup = document.getElementById("btn-cerra-popup");
		btnAbrirPopup.addEventListener('click',function(){
			overlay.classList.add('mostrar');
		});
		btnCerrarPopup.addEventListener('click',function(){
			overlay.classList.remove('mostrar');
		});
*/
var element = document.getElementById("item");
element.onkeyup = function(e){
	if (e.keyCode==13) 
	{
		overlay = document.getElementById("overlay");
		overlay.classList.add('mostrar');
		btnCerrarPopup = document.getElementById("btn-cerra-popup");	
		btnCerrarPopup.addEventListener('click',function(){
			overlay.classList.remove('mostrar');
		});	
	}
}

jQuery(document).ready(function() 
{	
	$('.tabs li a:first').addClass('activo');
	$('.secciones article').hide();
	$('.secciones article:first').show();
	$('.tabs li a').click(function(){
		$('.tabs li a').removeClass('activo');
		$(this).addClass('activo');
		$('.secciones article').hide();
		var tabActivo = $(this).attr('href');
		$(tabActivo).show();
		return false;
	});
});