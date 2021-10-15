<?php

    $acceso = "";   
    $mensaje ="";

    $alertnombre;
    $alertTelefono;
    $alertCorreo;
    $alertTexto;
    $tipoAlerta="";

  //Enviar a correo electronico
  $captcha="pruebaModoLocal";
  if (!empty($_POST)) {
    $nombre             = $_POST["nombre"];
    $telefono           = $_POST["telefono"];
    $direccion          = $_POST["direccion"];
    $texto              = $_POST["mensaje"];
    $correo             = $_POST["correo"];
    $archivo;
        if (!empty($captcha)) {
            if ($nombre == "" || $telefono== "" || $correo == "" || $texto == "" || strlen($telefono) != 10 || is_valid_email($correo) != true ) 
            {
                $acceso= "Error!";
                $tipoAlerta="warning";
                $mensaje = "<b>Faltan o llene correctamente los datos indicados</b></br>";
                $mensaje .= "<b>Estas son las causas que impiden el correcto llenado del formulario:</b></br>";
                if ($nombre == "") 
                {
                    $mensaje .="-Falta llenar <b>Nombre</b>.</br>";
                    $alertnombre="Falta llenar Nombre.";
                }
                if ($telefono == "" || strlen($telefono) != 10) 
                {
                    if (strlen($telefono) != 10) 
                    {
                        $mensaje .="-Ponga 10 d&iacute;gitos como m&iacute;nimo en <b>Tel&eacute;fono</b>.</br>";
                        $alertTelefono="Ingreso un Telefono válido!.";
                    }
                    if ($telefono == "") 
                    {
                        $mensaje .="-Falta llenar <b>Tel&eacute;fono</b>.</br>";
                        $alertTelefono="Falta llenar Telefono.";
                    }
                }
                if ($correo == "" || is_valid_email($correo) != true) 
                {
                    if (is_valid_email($correo) != true) 
                    {
                        $mensaje .="-Ingreso un <b>Correo</b> v&aacute;lido!.</br>";
                        $alertCorreo="Ingreso un Correo válido!.";
                    }
                    if ($correo == "") 
                    {
                        $mensaje .="-Falta llenar <b>Correo</b>.</br>";
                        $alertCorreo="Falta llenar Correo.";
                    }
                }
                if ($texto == "" || $texto == null) 
                {
                    $mensaje .="-Falta llenar <b>Mensaje</b>.</br>";
                    $alertTexto="Falta llenar Mensaje.";
                }
            }
            else
            {
                enviarMail($archivo,$nombre,$telefono,$correo,$direccion,$texto);    
                $acceso= "Pronto nos pondremos en contacto!";
                $mensaje = "Mensaje enviado exitosamente";
                $tipoAlerta="success";
            }     
            $mensaje = "Llene correctamente los datos."; 
        }
        else
        {
            $acceso= "Error!";
            $mensaje = "Llene el recaptcha";
            $tipoAlerta="warning";
        }
}
else
{
    $acceso= "Error!";
    $mensaje = "Llene los datos";
    $tipoAlerta="warning";
}

$return_arr = array(
                    "acceso" => $acceso,
                    "mensaje" => $mensaje,
                    
                    "alertnombre" => $alertnombre,
                    "alertTelefono" => $alertTelefono,
                    "alertCorreo" => $alertCorreo,
                    "alertTexto" => $alertTexto,

                    "tipoAlerta" => $tipoAlerta
                );
echo json_encode($return_arr);

function enviarMail($archivo,$nombre,$telefono,$correo,$direccion,$texto){
    $remitente = $correo;
	$destinatario = 'contacto@surftware.com.mx'; // en esta línea va el mail del destinatario.
	$asunto = 'Consulta para Surftware'; // acá se puede modificar el asunto del mail
		if (!$_POST){}
		else{
			$cuerpo =  "Name: " . $nombre . "\r\n"; 
			$cuerpo .= "Phone: " . $telefono . "\r\n";
			$cuerpo .= "Email: " . $correo . "\r\n";
			$cuerpo .= "Message: " . $texto . "\r\n";
				//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
				// Si se agrega un campo al formulario, hay que agregarlo acá.

			$headers  = "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/plain; charset=utf-8\n";
			$headers .= "X-Priority: 3\n";
			$headers .= "X-MSMail-Priority: Normal\n";
			$headers .= "X-Mailer: php\n";
			$headers .= "From: \"".$_POST['nombre']."\" <".$remitente.">\n";
			mail($destinatario, $asunto, $cuerpo, $headers);
		}
}
function is_valid_email($str)
{
  return (false !== strpos($str, "@") && false !== strpos($str, "."));
}

//Recapcha
  //Si la variable esta definida y no es nula
  if (isset($_POST['submit'])) 
  {
    //Se guarda dentro de una variable nuestra llave secreta
    $secret = "6LfwDCQcAAAAAGnsq0pbWe-dI3jl4C58DPcbn6Lh";

    $response = $_POST['g-recaptcha-response'];
    //Validacion de la ip de usuario
    $remoteip = $_SERVER['REMOTE_ADDR'];
    //Validacion
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip";
    $data = file_get_contents($url);
    $row = json_decode($data, true);
    if ($row['success'] == "true") 
    {
      echo "<script>alert('Se han enviado el mensaje exitosamente'); </script>";
    } else 
    {
      echo "<script>alert('Error!! Resolver el Recaptcha');</script>";
    }
  }


?>