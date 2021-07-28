<!-- custom script -->
<script src="js/main.js"></script>

<!-- jquery -->
<script src="js/jquery.min.js"></script>

<!-- bootstrap js-->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- fontawesome js-->
<script src="fontawesome/js/all.min.js"></script>

<!-- custom script -->
<script src="js/myscript.js"></script>

<!-- owl carousel -->
<script src="js/owl.carousel.min.js"></script>

<!-- wow -->
<script src="js/wow.min.js"></script>

<script src="js/sweetalert2.js"></script>

<script>
	function myFunction() {
		var elmnt = document.getElementById("myDIV");
		var x = elmnt.scrollLeft;
		var y = elmnt.scrollTop;
		document.getElementById("demo").innerHTML = "Horizontally: " + x + "px<br>Vertically: " + y + "px";
	}
</script>

<!--ReCapcha V3 
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
</script>
-->

<!-- Recaptcha V2-->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- Script para el funcionamiento del navbar -->
<script type="text/javascript">  
	const currentLocation = location.href;
	const menuItem = document.querySelectorAll('a');
	const menuLength = menuItem.length
	for(let i = 0; i<menuLength; i++)
	{
		if(menuItem[i].href ===currentLocation){
			menuItem[i].className ='active'
		}
	} 
</script>
