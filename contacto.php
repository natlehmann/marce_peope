<!DOCTYPE HTML>

<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'ventas@peope.com.ar';
$titulo = 'ASUNTO DEL MENSAJE';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
?>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es-es">

<head>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
	<link rel="stylesheet" type="text/css" href="style/jquery-slides.css" />
	<link rel="stylesheet" type="text/css" href="style/font-awesome.min.css" />
	<link rel="stylesheet" href="style/mobile.css" type="text/css" media="only screen and (max-width : 568px)" />
	<link rel="stylesheet" href="style/mobile.css" type="text/css" media="only screen and (max-width : 792px) and (orientation : portrait)" />

	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title>peope</title>
	
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery.slides.min.js"></script>
	<script src="js/master.js"></script>
	<script src="js/sliderHome.js"></script>
	
</head>


<body class="peope">
	<div id="contenedor">

		<div id="logoInt">
			<a href="index.htm">
				<img id="logo-desktop" src="images/logo.jpg" alt="" width="301" height="135" />
				<img id="logo-mobile" src="images/logoSinLinea.jpg" alt="" width="301" height="135" />
			</a>
		</div>

		<div id="menu">
			<ul class="mi-menu">
				<li><a href="empresa.htm" onmouseout="MM_swapImgRestore()"
					onmouseover="MM_swapImage('empresa','','images/botEmpresaOn.jpg',1)"><img
						src="images/botEmpresa.jpg" width="137" height="84" border="0"
						id="empresa" /></a></li>
				<li><a href="#" onmouseout="MM_swapImgRestore()"
					onmouseover="MM_swapImage('produccion','','images/botProduccionOn.jpg',1)"><img
						src="images/botProduccion.jpg" width="115" height="84" border="0"
						id="produccion" /></a>
					<ul>
						<li><a href="produccion_metalurgica.htm">Metal�rgica</a></li>
						<li><a href="produccion_pintura.htm">Pintura</a></li>
						<li><a href="produccion_madera.htm">Madera</a></li>
						<li><a href="produccion_plastico.htm">Pl�stico</a></li>
						<li><a href="produccion_impresion.htm">Impresi�n</a></li>
						<li><a href="produccion_corte.htm">Corte</a></li>
					</ul></li>
				<li><a href="#" onmouseout="MM_swapImgRestore()"
					onmouseover="MM_swapImage('productos','','images/botProductosOn.jpg',1)"><img
						src="images/botProductos.jpg" width="109" height="84" border="0"
						id="productos" /></a>
					<ul>
						<li><a href="productos_on_premise.htm">On premise</a></li>
						<li><a href="productos_off_premise.htm">Off premise</a></li>
						<li><a href="productos_gifts.htm">Gifts &amp; Parts</a></li>


					</ul></li>
				<li><a href="#" onmouseout="MM_swapImgRestore()"
					onmouseover="MM_swapImage('servicios','','images/botServiciosOn.jpg',0)"><img
						src="images/botServicios.jpg" width="96" height="84" border="0"
						id="servicios" /></a>
					<ul>
						<li><a href="servicios_disenio.htm">Dise�o y desarrollo </a></li>
						<li><a href="servicios_fazon.htm">Fabricaci�n prod. a
								fazon</a></li>
						<li><a href="servicios_armado.htm">Armado y Copackers</a></li>
						<li><a href="servicios_logistica.htm">Log�stica</a></li>
						<li><a href="servicios_pdv.htm">Inst. y Mant. en PDV</a></li>

					</ul></li>
				<li><a href="contacto.htm" onmouseout="MM_swapImgRestore()"
					onmouseover="MM_swapImage('contacto','','images/botContactoOn.jpg',1)"><img
						src="images/botContacto.jpg" width="150" height="84" border="0"
						id="contacto" /></a></li>
			</ul>
		</div>

		<div class="mensaje-mail" style="padding-bottom: 291px; padding-top: 200px; padding-left: 59px;">

<?php
	if (mail($para, $titulo, $msjCorreo, $header)) {
?>
		SU MENSAJE FUE ENVIADO EXITOSAMENTE. GRACIAS!
<?php
	} else {
?>
		SU MENSAJE no FUE ENVIADO. GRACIAS!
<?php
        }
?>
		</div>


		<!-- COMIENZA CONTENIDOS COMUNES -->

		<div id="pieHome">
			<div class="pieIzq">
				<strong style="color: #b02e34">Peope SRL</strong> Saladillo 3351
				(1439) CABA Agentina <font color="#b02e34" size="+1"> . </font>
				tel/fax 54 11 46 87 74 00 <font color="#b02e34" size="+1"> <strong>.</strong></font>
				mail <a href="mailto:ventas@peope.com.ar" target="_blank">ventas@peope.com.ar</a><br />Copyright
				2014 Espacio4arq. All rights reserved.
			</div>
			<div class="pieDer">
				<a href="#" onmouseout="MM_swapImgRestore()"
					onmouseover="MM_swapImage('linkedin','','images/linkedinOn.jpg',1)"><img
					src="images/linkedin.jpg" width="45" height="43" border="0"
					id="linkedin" /></a><a href="#" onmouseout="MM_swapImgRestore()"
					onmouseover="MM_swapImage('facebook','','images/facebookOn.jpg',1)"><img
					src="images/facebook.jpg" width="45" height="43" border="0"
					id="facebook" /></a>
			</div>
		</div>


	</div>
</body>
</html>