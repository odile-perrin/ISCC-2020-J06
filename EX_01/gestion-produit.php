<?php include ("test-fonctions.php"); ?>

<?php
$disponible=true;
$quantité=10;
$nbajout=;
$nbachat=;

update_dispo($quantité);
restockage($quantité, $nbajout);
achat($quantité,$nbachat);

?>

