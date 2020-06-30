<?php include ("test-fonctions.php"); ?>

<?php
$nom="T-shirt femme";
$couleur="rouge";
$prix=15.50;
$disponible=true;
$disponible=false;
$quantité=10;

afficher_titre($nom);
afficher_description ($couleur, $prix);
afficher_produit($nom, $couleur, $prix, $disponible);
?>

