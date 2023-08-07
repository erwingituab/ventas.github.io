function ValidarEmpresa()
{
    var alertaE = document.getElementById("alert");
    var mensajeE = document.getElementById("mensajeE");
    var strong = document.getElementById("strong");
    var nit = document.getElementById("nit");
    var nombre = document.getElementById("nombre");
    var telefono = document.getElementById("telefono");
    var direccion = document.getElementById("direccion");
    var iva = document.getElementById("iva");
    if (nit.value=="") 
    {
        nit.focus();
        alertaE.style.backgroundColor = "#f44336";
        alertaE.style.display = "block";
        strong.innerHTML = "Error!";
        mensajeE.innerHTML = "Ingrese nit.";
        return false;
    }
    if (nombre.value=="") 
    {
        nombre.focus();
        alertaE.style.backgroundColor = "#f44336";
        alertaE.style.display = "block";
        strong.innerHTML = "Error!";
        mensajeE.innerHTML = "Ingrese nombre.";
        return false;
    }
    if (telefono.value=="") 
    {
        telefono.focus();
        alertaE.style.backgroundColor = "#f44336";
        alertaE.style.display = "block";
        strong.innerHTML = "Error!";
        mensajeE.innerHTML = "Ingrese número de teléfono.";
        return false;
    }
    if (direccion.value=="") 
    {
        direccion.focus();
        alertaE.style.backgroundColor = "#f44336";
        alertaE.style.display = "block";
        strong.innerHTML = "Error!";
        mensajeE.innerHTML = "Ingrese dirección.";
        return false;
    }
    if (iva.value=="") 
    {
        iva.focus();
        alertaE.style.backgroundColor = "#f44336";
        alertaE.style.display = "block";
        strong.innerHTML = "Error!";
        mensajeE.innerHTML = "Ingrese impuesto IVA.";
        return false;
    }
    alertaE.style.backgroundColor = "#41955D";
    strong.innerHTML = "Éxito!";
    mensajeE.innerHTML = "Registro correcto.";
    return true;
}
function ValidarClaves()
{
    var alertaclv = document.getElementById("alert2");    
    var strong = document.getElementById("strong");
    var msjclave = document.getElementById("msjClave");
    var clave = document.getElementById("clave");
    var newclave = document.getElementById("newclave");
    var confirmclave = document.getElementById("confirmclave");
    if (clave.value=="") 
    {
        clave.focus();
        alertaclv.style.backgroundColor="#f44336";
        alertaclv.style.display="block";
        strong.innerHTML = "Error!";
        msjclave.innerHTML = "Ingrese password."
        return false;
    }
    if (newclave.value=="") 
    {
        newclave.focus();
        alertaclv.style.backgroundColor="#f44336";
        alertaclv.style.display="block";
        strong.innerHTML = "Error!";
        msjclave.innerHTML = "Ingrese nuevo password."
        return false;
    }    
    if (confirmclave.value==newclave.value) 
    {
        alertaclv.style.backgroundColor="#41955D";
        alertaclv.style.display="block";
        strong.innerHTML = "Éxito!";
        msjclave.innerHTML = "Las claves son iguales.";
    }
    else
    {
        confirmclave.focus();
        alertaclv.style.backgroundColor="#f44336";
        alertaclv.style.display="block";
        strong.innerHTML = "Error!";
        msjclave.innerHTML = "Las claves no coinsiden."
        return false;
    }    
}
$(document).ready(function()
{
    $("#frmConfiguracion").submit(function(event) 
    {
        
    });    
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