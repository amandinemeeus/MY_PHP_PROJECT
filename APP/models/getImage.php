<?php

$reponse = $database->query('SELECT * FROM basket');


//On affiche chaque entrée une à une
// while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC))
//   {
//     echo $donnees['basket_image']. '<br />' ;
//   }
//
// $reponse->closeCursor(); // Termine le traitement de la requête
?>
