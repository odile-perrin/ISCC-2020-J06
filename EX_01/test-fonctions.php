<meta charset="utf-8">

<?php
$nom="T-shirt femme";
$couleur="rouge";
$prix=15.50;
$quantité=10;
$nbachat=5;
$nbajout=5;
$disponible=true;
?>


<?php include ("affichage.php"); ?>

<?php include ("gestion-produit.php"); ?>


<?php

afficher_produit($nom, $couleur, $prix, $disponible);
$quantité=achat($quantité, $nbachat);
$disponible=update_dispo($quantité);
afficher_produit($nom, $couleur, $prix, $disponible);
$quantité=achat($quantité, $nbachat);
$disponible=update_dispo($quantité);
afficher_produit($nom, $couleur, $prix, $disponible);
$quantité=restockage($quantité, $nbajout);
$disponible=update_dispo($quantité);
afficher_produit($nom, $couleur, $prix, $disponible);

?>


<?php
update_dispo($quantité);
restockage($quantité, $nbajout);
achat($quantité,$nbachat);
?>




