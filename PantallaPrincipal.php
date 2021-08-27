<?php include('config/db.php'); 
$sql="select * from peliculas order by id_pelicula desc";
$res = mysqli_query($mysqli,$sql);?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/pantallaprincipal.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="img/star.png" />
  <title>MovieStar</title>
  
  <nav class="navegador">

    <ul>
      <img src="img/Star11.png" >
      <span>MovieStar</span>
      <a  href="PantallaPrincipal.php" class="btn btn-link ">Home</a>
      <a href="index.html" class="btn btn-link">Login</a>
      <a href="Registrate.html" class="btn btn-link">Regístrate</a>

    </ul>
  </nav>
 

</head>
<body>

 
  <h1 style="text-align: center; margin-top: 90px;"> PELICULAS</h1>
  
 
  <div class="row">
  <?php

while($data = mysqli_fetch_array($res)){
?>

<div >
  
 <div class="col-md-12">
  <div>
    <div class="card" style="width: 18rem; 
    margin-top: 20px; margin-left:10px;">
      <img class="trailer-card-img" src="<?php echo''.$data['link_pelicula'].'';?>"
      <div class="card-body">
      <h5 class="card-title"><?php echo''.$data['nombre'].''?></h5>
      <p class="card-text"><?php echo''.$data['descripcion'].''?></p>
    <a href="<?=$data['trailer']?>" target = "_blanck" class="btn btn-primary"  >Ver Trailer</a>
      </div>
    </div>
  </div>
</div>
<br>




 



 
<?php
}


?>
</div>
 </div>
  

   


  


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>