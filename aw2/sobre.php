<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles.css"/>
  <?php require_once("js/connect.php") 
  ?>
</head>
<body background="./images/fondo.jpg">
   <table>
   <tr>
    <td><img src="images/logoborj.png"
       width= "80px" height= "80px"></td>
  <td class="logo"> Alejandro Vives Martorell <img src="images/mailico.png"
      width= "25px" height= "25px"></td>
  </tr>
 </table>
 <ul>
  <li><a href="index.html">Home</a></li>
  <li><a href="noticias.html">News</a></li>
  <li><a href="contacto.html">Contact</a></li>
  <li><a href="sobre.php">About</a></li>
</ul>
    <form name="seleccion" action="consultas.php" method="post">
  
      <?php
      $cons="Select * from smx2a";
      $res=$conexion -> query($cons);
      ?>
        <select name="smx2a"> 
          <option option value="0">Alumnos</option>
          <?php while ($row = $res->fetch_assoc()){ ?>
          <option value="<?php echo $row['ID']; ?>"><?php echo $row['Nombre']." ". $row['Apellido1']." ". $row['Apellido2']."<br>";
          ?>
          <?php } ?>
        </select>
        <input type="submit" value="Enviar" >
        <?php
      $cons="Select * from smx2a";
      $res=$conexion -> query($cons);
      ?>
        <table style="text-align: center;">
          <tr>
        <td><strong>ID</strong></td>  
        <td><strong>Nombre</strong></td>
        <td><strong>Apellido1</strong></td>
        <td><strong>Apellido2</strong></td>
        </tr>
        
        <?php while ($row = $res->fetch_assoc()){ ?>
        <tr>
        <td><?php echo $row['ID']?> </td>          
        <td><?php echo $row['Nombre']?> </td>
        <td><?php echo $row['Apellido1']?> </td>
        <td><?php echo $row['Apellido2']?> </td>
        </tr>
        <?php } ?>
          </table>
      </form>
         


      </option>
      </select>
      

    <br>
        </form>
        <a class="volver" href="index.html" Title="volver">
    <img src="images/volver.jpg"
     width= "110px" height= "40px"></a>
         <footer class="pie">


 <div>
  <p>Copyright &copy; by Alejandro Vives &reg;</p>
  <a href="http://www.twitter.com"><img class="RSimg" src="./images/twitter.png"></a>

  <a href="http://www.facebook.com"><img class="RSimg" src="./images/facebook.png"></a>

  <a href="http://www.rss.com"><img class="RSimg" src="./images/rss.png"></a>

  <a href="http://www.youtube.com"><img class="RSimg" src="./images/youtube.png" alt="Youtube"></a>

  <a href="http://www.googleplus.com"><img class="RSimg" src="./images/googleplus.png" alt="Twitter"></a>

  <a href="http://www.twitch.com"><img class="RSimg" src="./images/twitch.png" alt="Twitter"></a>

  <a href="http://www.myspace.com"><img class="RSimg" src="./images/myspace.png" alt="Twitter"></a>

  <a href="http://www.openstack.com"><img class="RSimg" src="./images/openstack.png" alt="Twitter"></a>

  <a href="http://www.linkdin.com"><img class="RSimg" src="./images/linkdin.png" alt="Twitter"></a>

  <a href="http://www.hangout.com"><img class="RSimg" src="./images/hangout.png" alt="Twitter"></a>

  <a href="http://www.coderwall.com"><img class="RSimg" src="./images/coderwall.png" alt="Twitter"></a>
</div>
</footer>
</body>
</html>