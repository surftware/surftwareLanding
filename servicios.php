<?php
	 
	define('BASE_PATH','/var/www/surftwareLanding/');	 
	include (BASE_PATH."includes/head.php"); 	 
	include (BASE_PATH."includes/nav.php");
	  
?>

<div class="welcome">
	<div class="center">
		<div class="welcome__wrap  wow slideInLeft">
			<div class="text_1">
				Surftware
			</div>
			<div class="text_2">
				Lead Generation, AdWords, and PPC
			</div>
			<div class="text_3">
				As a one-stop digital marketing company, we will help you boost sales, bring new customers and optimize
				your advertising budget.
			</div>
			<div class="btn__wrap__left">
				<a href="#contacts" class="btn btn__large btn__orange">Contact us</a>
				<a href="#featured_product" class="btn btn__large btn__white_transparent">watch video</a>
			</div>
		</div>
	</div>
</div>

</div>
</header>

<div class="block services" id="services">
		<div class="center">
			<div class="block__title">
				<span>Digital marketing services for your businesses</span>
				Our Most Popular Services
			</div>

			<div class="item__list">
				<div class="item wow flipInY">
					<figure>
						<img src="images/services_icon_1.png" alt="">
					</figure>
					<div class="title">
						Pay Per Click Management
					</div>
					<p>
						Build a steady flow of leads or online sales with ROI based online advertising.
					</p>
				</div>
				<div class="item wow flipInY" data-wow-delay="0.1s">
					<figure>
						<img src="images/services_icon_2.png" alt="">
					</figure>
					<div class="title">
						Content marketing
					</div>
					<p>
						We work together with our clients to come up with effective content strategies.
					</p>
				</div>
				<div class="item wow flipInY" data-wow-delay="0.2s">
					<figure>
						<img src="images/services_icon_3.png" alt="">
					</figure>
					<div class="title">
						Adwords
					</div>
					<p>
						We diligently search for all keywords that are relevant to our client’s business.
					</p>
				</div>
				<div class="item wow flipInY" data-wow-delay="0.3s">
					<figure>
						<img src="images/services_icon_4.png" alt="">
					</figure>
					<div class="title">
						Social Media Marketing
					</div>
					<p>
						Grow the followers to increase brand awareness, sales and marketing potential.
					</p>
				</div>
				<div class="item wow flipInY" data-wow-delay="0.4s">
					<figure>
						<img src="images/services_icon_5.png" alt="">
					</figure>
					<div class="title">
						Lead Generation
					</div>
					<p>
						Attract more visitors and deliver the message you want clients to hear.
					</p>
				</div>
				<div class="item wow flipInY" data-wow-delay="0.5s">
					<figure>
						<img src="images/services_icon_6.png" alt="">
					</figure>
					<div class="title">
						Reporting & Analytics
					</div>
					<p>
						We carefully study Google analytics data and create comprehensive reports.
					</p>
				</div>
			</div>
		</div>
	</div>


<div class="block contacts" id="contacts">
	<div class="center">
		<div class="block__title  wow bounceInLeft">
			<span>Get in touch</span>
			Contact Us
			<p>Send us a message to contact you and give you more information about the <strong>Spanish
					School in
					Mexico City </strong></p>
		</div>

		<div class="contacts__block">
			<div class="left_side  wow bounceInLeft">
				<ul>
					<li> <a href="mailto:surftware@gmail.com"> <i class="fa fa-envelope"></i>surftware@gmail.com</a>
					</li>
					<li> <a href="tel: 55-11-89-46-21"><i class="fa fa-phone"> </i> 55-11-89-46-21 </a></li>
					<li><a href="https://goo.gl/maps/sShpShKmJD8nRzWJ6" target="_blank"><i class="fa fa-map-marker"></i>
							Oriente 85 #3406 Col. La Joya</a></li>
					<li><a href="skype:surftware@outlook.es?chat"><i class="fab fa-skype"></i>surftware@outlook.es</a>
					</li>
				</ul>
				<div class="soc">
					<div class="title">
						Social Networks
					</div>
					<div class="links">
						<a href="skype:surftware@outlook.es?chat"><i class="fab fa-skype"></i></a>
						<a href=""><i class="fab fa-facebook"></i></a>
						<a href="https://github.com/surftware"><i class="fab fa-github"></i></a> </div>
				</div>
			</div>
			<div class="right_side  wow bounceInRight">
				<form action="index.php" method="post">
					<div class="row">
						<input name="nombre" type="text" class="input" placeholder="Nombre completo*" required>
					</div>
					<div class="row">
						<input name="telefono" type="text" class="input" placeholder="Teléfono">
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
								value="enviar">
						</div>
					</div>
				</form>

			</div>
		</div>

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
<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="map">
					<p><iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3761.959767755553!2d-99.11320868567685!3d19.457301344933587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1f95d684f2c37%3A0x9e71c1b1e2cc2d52!2sOte.%2085%203406%2C%20Cuchilla%20de%20la%20Joya%2C%2007890%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1569870135360!5m2!1ses-419!2smx"
							width="800" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
				</div>
			</div>
		</div>
	</div>
</div>



<?php
	define('BASE_PATH','/var/www/surftwareLanding/');
	include (BASE_PATH."includes/footer.php");
	include (BASE_PATH."includes/js.php");
?>