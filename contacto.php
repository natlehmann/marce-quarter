<!DOCTYPE HTML>

<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'marcelo@mingrone.net';
$titulo = 'ASUNTO DEL MENSAJE';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" type="text/css" href="style/style1.css" />
<link rel="stylesheet" href="style/mobile.css" type="text/css"
	media="only screen and (max-width : 568px)" />
<link rel="stylesheet" href="style/mobile.css" type="text/css"
	media="only screen and (max-width : 792px) and (orientation : portrait)" />
<script src="js/general.js"></script>
</head>



<body>

<div id="content">
<div id="textoInterno">
								<div class="textoNosotros">
					<?php
if (mail($para, $titulo, $msjCorreo, $header)) {
?>
					Su mensaje fue enviado exitosamente. 
					<?php
} else {
    ?>
					Su mensaje no fue enviado.
					<?php
        }
?>
				</div>
			</div>
		<div id="menu">
		  <ul>
	    <li><a href="usuarios.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image23','','image/01clientesOn.jpg',1)"><img src="image/01clientes.jpg" name="Image23" width="43" height="43" border="0"></a></li>
				<li><a href="#" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image24','','image/02usuariosOn.jpg',1)"><img src="image/02usuarios.jpg" name="Image24" width="43" height="43" border="0" style="margin-left:25px"></a></li>
				<li><a href="https://www.facebook.com/quarterain?skip_nax_wizard=true&ref_type" target="_blank" onMouseOver="MM_swapImage('Image25','','image/03FBOn.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="image/03FB.jpg" name="Image25" width="43" height="43" border="0" style="margin-left:40px"></a></li>
				<li><a href="https://www.linkedin.com/pub/marcelo-mingrone/13/4b8/372" onMouseOut="MM_swapImgRestore()" target="_blank" onMouseOver="MM_swapImage('Image26','','image/04LinkedinOn.jpg',1)"><img src="image/04Linkedin.jpg" name="Image26" width="43" height="43" border="0" style="margin-left:45px"></a></li>
                <li><a href="https://twitter.com/MingroneTrk" onMouseOut="MM_swapImgRestore()" target="_blank" onMouseOver="MM_swapImage('Image27','','image/05TOn.jpg',1)"><img src="image/05T.jpg" name="Image27" width="43" height="43" border="0" style="margin-left:45px"></a></li>
                <li><a href="https://plus.google.com/u/0/108393543468971946061/posts/p/pub" onMouseOut="MM_swapImgRestore()" target="_blank" onMouseOver="MM_swapImage('Image28','','image/06GoogleOn.jpg',1)"><img src="image/06Google.jpg" name="Image28" width="43" height="43" border="0" style="margin-left:40px"></a></li>
                <li><a href="https://www.youtube.com/channel/UC_MNdOFuXJD7CgY1-8lniLA" onMouseOut="MM_swapImgRestore()" target="_blank" onMouseOver="MM_swapImage('Image29','','image/07YoutubeOn.jpg',1)"><img src="image/07Youtube.jpg" name="Image29" width="43" height="43" border="0" style="margin-left:25px"></a></li>
                <li><a href="contact.html" onMouseOut="MM_swapImgRestore()" target="_self" onMouseOver="MM_swapImage('Image30','','image/08CorreoOn.jpg',1)"><img src="image/08Correo.jpg" name="Image30" width="43" height="43" border="0" ></a></li>
			</ul>
</div>
		<div id="pieInterna">Copyright © 2014  QUARTERAIN. All rights reserved</div>
</div>

</body>
</html>
