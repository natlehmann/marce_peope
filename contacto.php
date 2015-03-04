


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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es-es">
    <head>
        <link rel="stylesheet" type="text/css" href="style/style.css" /> 

    <title>peope</title>
    </head>
<body>
         <div id="contenedor">
                   <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><img src="images/01.jpg" alt="" width="298" height="128" usemap="#Map" /></td>
      <td><img src="images/02.jpg" alt="" width="324" height="128" /></td>
      <td><img src="images/03.jpg" alt="" width="274" height="128" /></td>
    </tr>
    <tr>
      <td height="400" colspan="3">
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

      
      </td>
      </tr>
    <tr>
      <td colspan="2"><img src="images/10.jpg" alt="" width="622" height="83" usemap="#Map2" /></td>
      <td><img src="images/11.jpg" alt="" width="274" height="83" /></td>
    </tr>
  </table>
                   

                  


</div>

    <map name="Map" id="Map">
      <area shape="rect" coords="18,11,260,117" href="home.htm" target="_self" alt="" />
    </map>
</body>
</html>
















