<?php
$correo="correo-destino";
$remitente=$_POST["Email"];
$pregunta=$_POST["Pregunta"];
$nombre=$_POST["Nombre"];
mail($correo,$remitente,$pregunta);
echo "gracias ".$nombre." por usar nuestro servicio :)";




?>
