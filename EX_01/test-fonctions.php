<title>Page1</title>
<meta charset="utf-8">

<?php

function afficher_titre($nom)
{
    echo "<h1>Fiche produit : $nom</h1>";
    return;
} 

function afficher_description($couleur, $prix)
{
    echo "<p>Couleur : $couleur, Prix : $prix </p>";
    return;
} 

function afficher_produit($nom, $couleur, $prix, $disponible)
{
    if ($disponible==true) {
    afficher_titre ($nom);
    afficher_description ($couleur, $prix);
    }

    elseif ($disponible==false)
    echo "<p>Le produit $nom n'est malheureusement plus disponible </p>";
    return;
} 
?>

<?php
    function update_dispo($quantité)
    {
        echo "<h1>Fiche produit : $nom</h1>";
        return(true/false);
    } 

    function restockage($quantité, $nbajout)
    {
        echo "<p>$nbajout produits ont été ajoutés au stock.</p>";
        return($quantité+$nbajout);
    } 

    function achat($quantité,$nbachat)
    {
        echo "<p>$nbachat produits ont été ajoutés acheté.</p>";
        return(true/false);
    } 

    


?>

<?php
$nom="T-shirt femme";
$couleur="rouge";
$prix=15.50;
$disponible=true;
$disponible=false;
$quantité=10;
$nbajout=;
$nbachat=;
?>

<?php
function

?>


