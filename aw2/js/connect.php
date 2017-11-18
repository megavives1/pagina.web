<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumnos";

 //Create connection
 $conexion = mysqli_connect($servername, $username,$password, $dbname);

 //Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
else echo "Conexión establecida con la bd";
?>
