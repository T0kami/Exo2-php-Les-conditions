<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Exos php - Conditions</h1>
    <h2>Exo 1</h2>
    <?php
    $age = 9;
    if ($age >= 18) {
      echo "vous etes majeur";
    }else echo "vous etes mineur";
    ?>

    <h2>Exo 2</h2>
    <?php
    $age = 15;
    $genre = "Femme";

    if ($age >= 18){
      echo ($genre == 'Homme') ? 'Vous etes un homme majeur' : 'Vous etes une femme majeur';
    }else{
      echo ($genre == 'Homme') ? 'Vous etes un homme mineur' : 'Vous etes une femme mineur';
    }
     ?>

    <h2>Exo 3</h2>
    <?php
    $maVariable = "Homme";

    if ($maVariable != "Homme"){
      echo "C'est une développeuse !!!";
    }else{
      echo "C'est un développeur !!!";
    }
     ?>
     <h2>Exo 4</h2>
     <?php
     $monAge = 18;

     if ($monAge >= 18){
       echo "T'es majeur";
     }else{
       echo "T'es mineur";
     }
      ?>

    <h2>Exo 5</h2>
    <?php
    $maVariable = false;
    if($maVariable == false){
      echo "pas bon";
    }else{
      echo "ok";
    }
     ?>

     <h2>Exo 6</h2>
     <?php
     $maVariable = true;
     if($maVariable){
       echo "ok";
     }else{
       echo "pas bon";
     }
      ?>
  </body>
</html>
