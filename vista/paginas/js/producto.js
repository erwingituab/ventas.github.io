function ValidarProducto()
{
    var alertaP = document.getElementById("alert");
    var mensajeP = document.getElementById("mensaje");
    var strong = document.getElementById("strong");
    var codigo = document.getElementById("codigo");
    var descripcion = document.getElementById("descripcion");
    var precio = document.getElementById("preciounitario");
    var existencia = document.getElementById("existencia");
    var proveedor = document.getElementById("idproveedor").selectedIndex;
    var categoria = document.getElementById("idcategoria").selectedIndex;
    var foto = document.getElementById("foto");
    if(codigo.value=="")
    {
        document.frmProducto.codigo.focus();
        alertaP.style.display = "block";
        strong.innerHTML='Error!';
        mensajeP.innerHTML = "Ingrese Codigo de producto."
        return false;
    }
    if (descripcion.value=="") 
    {
        document.frmProducto.descripcion.focus();
        alertaP.style.display = "block";
        strong.innerHTML='Error!';
        mensajeP.innerHTML = "Ingrese descripcion."
        return false;
    }
    if (precio.value=="") 
    {
        document.frmProducto.preciounitario.focus();
        alertaP.style.display = "block";
        strong.innerHTML='Error!';
        mensajeP.innerHTML = "Ingrese precio unitario."
        return false;
    }
    if (existencia.value=="") 
    {
        document.frmProducto.existencia.focus();
        alertaP.style.display = "block";
        strong.innerHTML='Error!';
        mensajeP.innerHTML = "Ingrese cantidad mayor a cero."
        return false;
    }
    if (proveedor==null||proveedor==0) 
    {
        document.frmProducto.idproveedor.focus();
        alertaP.style.display = "block";
        strong.innerHTML='Error!';
        mensajeP.innerHTML = "Elija proveedor."
        return false;
    }
    if (categoria==null||categoria==0) 
    {
        document.frmProducto.idcategoria.focus();
        alertaP.style.display = "block";
        strong.innerHTML='Error!';
        mensajeP.innerHTML = "Elija categoria."
        return false;
    }
    alertaP.style.backgroundColor = "#41955D";
    alertaP.style.display = "block";
    strong.innerHTML='Éxito!';
    mensajeP.innerHTML = "Producto registrado";
    return true;
}
$(document).ready(function(){

    //--------------------- SELECCIONAR FOTO PRODUCTO ---------------------
    $("#foto").on("change",function(){
    	var uploadFoto = document.getElementById("foto").value;
        var foto       = document.getElementById("foto").files;
        var nav = window.URL || window.webkitURL;
        var contactAlert = document.getElementById('form_alert');
        
            if(uploadFoto !='')
            {
                var type = foto[0].type;
                var name = foto[0].name;
                if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png')
                {
                    contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';                        
                    $("#img").remove();
                    $(".delPhoto").addClass('notBlock');
                    $('#foto').val('');
                    return false;
                }else{  
                        contactAlert.innerHTML='';
                        $("#img").remove();
                        $(".delPhoto").removeClass('notBlock');
                        var objeto_url = nav.createObjectURL(this.files[0]);
                        $(".prevPhoto").append("<img id='img' src="+objeto_url+">");
                        $(".upimg label").remove();
                        
                    }
              }else{
              	alert("No selecciono foto");
                $("#img").remove();
              }              
    });

    $('.delPhoto').click(function(){
    	$('#foto').val('');
    	$(".delPhoto").addClass('notBlock');
    	$("#img").remove();
    });

});
