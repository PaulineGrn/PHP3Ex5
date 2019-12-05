<?php
// On déclare un tableau avec array et une variable $department
$departments = array(
  // On met les côtes pour les nombres sinon le zéro de s'affiche pas
  '02'=> 'Aisne',
  '80' => 'Somme',
  '60' => 'Oise',
  '59' => 'Nord',
  '62' => 'Pas-de-Calais');
  ?>
  <!DOCTYPE html>
  <html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <title>PHP3Ex5</title>
  </head>
  <body>
    <?php
    // Le foreach (pour chaque éléments) on demande à afficher l'index donc les numéros et la valeur donc les départements
    foreach($departments as $index => $value){ ?>
      <!-- On met un paragraphe pour que ce soit en HTML -->
      <p><?php  echo $index . ' ' . $value; ?></p>
    <?php }; ?>
  </body>
  </html>
