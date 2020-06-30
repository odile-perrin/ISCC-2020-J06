<meta charset="utf-8">

<?php
    function update_dispo($quantité)
    {
        if ($quantité > 0)
        {
        return(true);
        }
        
        else
        {
        return(false);
        }
    } 

    function restockage($quantité, $nbajout)
    {
    echo "<p>$nbajout produits ont été ajoutés au stock.</p>";
    return($quantité+$nbajout);
    } 

    function achat($quantité,$nbachat)
    {
    echo "<p>$nbachat produits ont été achetés.</p>";
    return($quantité-$nbachat);
    } 
?>

<?php
$nom="T-shirt femme";
$couleur="rouge";
$prix=15.50;
$disponible=true;
$disponible=false;
$quantité=10;
?>