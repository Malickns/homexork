<?php 
$rayon = isset($_POST["number"]) ? $_POST["number"] : null;
var_dump($_POST);

if ($rayon !== null) {
    $diametre = $rayon * 2;
} else {
    $diametre = null; // ou une valeur par défaut si vous le souhaitez
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Taper le rayon : </label>
        <input type="text" name="number"><br>
        <button type="submit">CALCULER</button>
        <br>
    </form>
    <?php
    if ($diametre !== null) {
        echo "Le diamètre est $diametre";
    } else {
        echo "Veuillez saisir un rayon.";
    }
    ?>
</body>
</html>
