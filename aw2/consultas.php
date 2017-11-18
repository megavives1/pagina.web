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
##else echo "Conexión establecida con la bd";
?>
<?php
$alumno = $_POST["smx2a"];
## echo $alumno;
?>
<?php
$alum = "Select * from smx2a where ID = $alumno";
$res=$conexion -> query($alum);
?>
<html>
	<head>
		<link rel="stylesheet" href="css/styles.css"/>
		<meta charset="utf-8" />
	
	<td><img src="images/logoborj.png"
       width= "80px" height= "80px"></td>
  <td style="text-aling:right"> Alejandro Vives Martorell <img src="images/mailico.png"
  width= "25px" height= "25px"></td>
</tr>

  
</head>	



<body>
	<ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="noticias.html">News</a></li>
  <li><a href="contacto.html">Contact</a></li>
  <li><a href="sobre.php">About</a></li>
</ul>
<?php while ($row = $res->fetch_assoc()){ ?>
<?php
 echo "El alumno:"." ". $row['Nombre']." ".$row['Apellido1']." ". $row['Apellido2'].", "." cumple años el:"." ". $row['Fechanac'];
?>
<?php }
?>

</body>

</html>