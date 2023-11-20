
<?php
if($_POST) {

  $nombre = $_POST['nombre'];

  $estPremier = true;

  for($i=2; $i<=$nombre/2; $i++) {
    if($nombre % $i == 0) {
      $estPremier = false;
      break;
    }
  }

  if($estPremier) {
    echo "$nombre est un nombre premier";
  }
  else {
    echo "$nombre n'est pas un nombre premier"; 
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form method="post">
    Entrer un nombre : <input type="number" name="nombre"> 
    <input type="submit">
  </form>
</body>
</html>



