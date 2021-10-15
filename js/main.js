

// *******************funciones jquery*************************
$( "#post" ).click(function() {

    var form = $('form')[0]; // You need to use standard javascript object here
    var formData = new FormData(form);
    //formData.append('captcha',grecaptcha.getResponse());
    $.ajax({
        url: "php/captcha.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (alerta) {
            alerta = $.parseJSON(alerta);
            console.log(alerta);
            Swal.fire(
            alerta['acceso'],
            alerta['mensaje'],
            alerta['tipoAlerta']
            )
            if (alerta['tipoAlerta'] === "success") {
                //limpia formulario y alertas
                document.getElementById("myForm").reset();  
                $("#alertNombre").text("");
                $("#alertTelefono").text("");
                $("#alertCorreo").text("");
                $("#alertTexto").text("");  
            }
            if (alerta['tipoAlerta'] !== "success") {
                if (alerta['alertnombre'] !== null || alerta['alertnombre'] !== "") {
                    $("#alertNombre").removeClass("text-success");
                    $("#alertNombre").removeClass("text-danger");
                    $("#alertNombre").addClass("text-danger");

                    $("#alertNombre").text(alerta['alertnombre']);   
                }
                if (alerta['alertnombre'] === null || alerta['alertnombre'] === "") {
                    $("#alertNombre").removeClass("text-success");
                    $("#alertNombre").removeClass("text-danger");
                    $("#alertNombre").addClass("text-success");

                    $("#alertNombre").text("Nombre llenado con exito.");                    
                }
                if (alerta['alertTelefono'] !== null || alerta['alertTelefono'] !== "") {
                    $("#alertTelefono").removeClass("text-success");
                    $("#alertTelefono").removeClass("text-danger");
                    $("#alertTelefono").addClass("text-danger");

                    $("#alertTelefono").text(alerta['alertTelefono']);                    
                }
                if (alerta['alertTelefono'] === null || alerta['alertTelefono'] === "") {
                    $("#alertTelefono").removeClass("text-success");
                    $("#alertTelefono").removeClass("text-danger");
                    $("#alertTelefono").addClass("text-success");

                    $("#alertTelefono").text("Telefono llenado con exito.");     
                }
                if (alerta['alertCorreo'] !== null || alerta['alertCorreo'] !== "") {
                    $("#alertCorreo").removeClass("text-success");
                    $("#alertCorreo").removeClass("text-danger");
                    $("#alertCorreo").addClass("text-danger");

                    $("#alertCorreo").text(alerta['alertCorreo']);                    
                }
                if (alerta['alertCorreo'] === null || alerta['alertCorreo'] === "") {
                    $("#alertCorreo").removeClass("text-success");
                    $("#alertCorreo").removeClass("text-danger");
                    $("#alertCorreo").addClass("text-success");

                    $("#alertCorreo").text("Correo llenado con exito.");     
                }
                if (alerta['alertTexto'] !== null || alerta['alertTexto'] !== "") {
                    $("#alertTexto").removeClass("text-success");
                    $("#alertTexto").removeClass("text-danger");
                    $("#alertTexto").addClass("text-danger");

                    $("#alertTexto").text(alerta['alertTexto']);                    
                }
                if (alerta['alertTexto'] === null || alerta['alertTexto'] === "") {
                    $("#alertTexto").removeClass("text-success");
                    $("#alertTexto").removeClass("text-danger");
                    $("#alertTexto").addClass("text-success");

                    $("#alertTexto").text("Mensaje llenado con exito.");  
                }
            }
            $submitButton = document.getElementById("post").value;
        }
    });
});
// *******************funciones javascript*************************


function validarArchivo(obj){
    var uploadFile = obj.files[0];
    var inputImage;
    
      if (!window.FileReader) {
          Swal.fire(
                  'Archivo Incorrecto!',
                  'El navegador no soporta la lectura de archivos',
                  'warning'
          ); 
          inputImage.value = '';
          return;
          inputImage = document.getElementById("adjunto");
      }
      if (!(/\.(jpg|jpeg|png|pdf|docx|doc|xlsx|xls)$/i).test(uploadFile.name)) {
          var alertMensaje='El archivo a adjuntar no es una imagen o archivo <br>'+
          'Los formatos apropiados son:<br/>'+
          '-jpg\n'+
          '-jpeg\n'+
          '-png\n'+
          '-pdf\n'+
          '-docx\n'+
          '-doc\n'+
          '-xlsx\n'+
          '-xls'
          ;
          Swal.fire(
                  'Archivo Incorrecto!',
                  alertMensaje,
                  'warning'
          );  
          inputImage = document.getElementById("adjunto");
          inputImage.value = '';
      }
      else 
      {
          var img = new Image();
          img.onload = function () {
              if (uploadFile.size > 1536000)
              {   
                  Swal.fire(
                  'Archivo Incorrecto!',
                  'El peso del archivo no puede exceder los 15360kb o 15mb',
                  'warning'
                  );  
                  inputImage = document.getElementById("adjunto");
                  inputImage.value = '';
              }
              else {
                  Swal.fire(
                  'Archivo Correcto!',
                  'El archivo es valido para enviarse',
                  'success'
                  );             
              }
          };
          img.src = URL.createObjectURL(uploadFile);
      }                 
}
/*---------------------------------------
  Scrollup
-----------------------------------------*/
//  Surftware (colaboradores): 

//  -José Armando Moreno Tolentino.
//  -Juan Miguel Díaz Teran.
function initScrollTop() {
    $(window).on("scroll", function () {
  
      if ($(this).scrollTop() > 100) {
  
        $('.scroll').fadeIn();
  
      } else {
        alert(document.getElementById('demo').innerHTML = Date());
  
        $('.scroll').fadeOut();
  
      }
  
    });
  
    $('.scroll').on('click', function () {
  
      $('html, body').animate({ scroll: 0 }, 800);
  
      return false;
  
    });
  
  } // initScrollTop



  function initScrollTop() {
    window.onscroll = function() {
        var y = window.scrollY;
        document.getElementsByClassName("scroll");
        document.getElementById('y').innerText = y;
      };
  } // initScrollTop



function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
        return true;
    }
    return false;        
}