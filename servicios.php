<?php
	 
	define('BASE_PATH','/var/www/surftwareLanding/');	 
	include (BASE_PATH."includes/head.php"); 	 
	include (BASE_PATH."includes/nav.php");
	  
?>

<div class="block contacts" id="contacts">
	<div class="center">
		<div class="block__title  wow bounceInLeft">
			<span>Ponte en contacto</span>
			Contáctanos
			<p>Envíenos un mensaje para contactarlo y brindarle más información sobre nosotros

				<strong>Surftware </strong></p>
		</div>
		<div class="contacts__block">
			<div class="left_side  wow bounceInLeft">
				<ul>
					<li><a href="mailto:surftware@gmail.com"><i class="fa fa-envelope"></i>
							surftware@gmail.com</a></li>
					<li><a href="tel: 55-11-89-46-21"><i class="fa fa-phone"></i> 55-11-89-46-21</a></li>
					<li><a href="https://goo.gl/maps/sShpShKmJD8nRzWJ6" target="_blank"><i class="fa fa-map-marker"></i>
							Oriente 85 #3406 Col. La Joya</a></li>
					<li><a href="skype:surftware@outlook.es?chat"><i class="fab fa-skype"></i></i>
							surftware@outlook.es</a></li>
				</ul>
				<div class="soc">
					<div class="title">
						<div class="text-center">
							Redes Sociales
						</div>
						<div class="links mt-2 text-center">
							<a href="skype:surftware@outlook.es?chat"><i class="fab fa-skype"></i></a>
							<a href=""><i class="fab fa-facebook"></i></a>
							<a href="https://github.com/surftware"><i class="fab fa-github"></i></a>
						</div>
					</div>
				</div>

			</div>
			<div class="right_side  wow bounceInRight">
				<form action="index.php" method="post">
					<div class="row">
						<input name="nombre" type="text" class="input" placeholder="Nombre*" required>
					</div>
					<div class="row">
						<input name="teléfono" type="text" class="input" placeholder="Teléfono*">
					</div>
					<div class="row">
						<input name="correo" type="text" class="input" placeholder="Email*" required>
					</div>
					<div class="row">
						<textarea name="mensaje" placeholder="Mensaje" class="textarea" rows="5" required></textarea>
					</div>
					<div class="row">
						<div class="btn__wrap__right">
							<input id="bSend" type="submit" class="btn btn__orange btn__large font-weight-bold"
								value="Contáctame">
						</div>
					</div>
				</form>

			</div>
		</div>
		<?php
			$remitente = $_POST['correo'];
			$destinatario = 'surftware@gmail.com'; // en esta línea va el mail del destinatario.
			$asunto = 'Consulta desde Surftware'; // acá se puede modificar el asunto del mail
			if (!$_POST){}
			else{

				$cuerpo =  "Name: " . $_POST["nombre"] . "\r\n"; 
				$cuerpo .= "Phone: " . $_POST["telefono"] . "\r\n";
				$cuerpo .= "Email: " . $_POST["correo"] . "\r\n";
				$cuerpo .= "Message: " . $_POST["mensaje"] . "\r\n";
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
			?>



	</div>
</div>

<div class="map">
	<iframe
		src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.959767755553!2d-99.11320868567685!3d19.457301344933587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f95d684f2c37%3A0x9e71c1b1e2cc2d52!2sOte.%2085%203406%2C%20Cuchilla%20de%20la%20Joya%2C%2007890%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1569870135360!5m2!1ses-419!2smx"
		width="1024" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>

<?php
	define('BASE_PATH','/var/www/surftwareLanding/');
	include (BASE_PATH."includes/footer.php");
	include (BASE_PATH."includes/js.php");
?>