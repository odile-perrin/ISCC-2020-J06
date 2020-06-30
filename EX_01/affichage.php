
<title>Page1</title>

<?php
function afficher_titre($nom)
{
    echo "<h1>Fiche produit : $nom</h1>";
} afficher_titre('T-shirt femme');

function afficher_description($couleur, $prix)
{
    echo "<p>Couleur : $couleur , Prix : $prix </p>";
} afficher_description ('Rouge', '15.50');

function afficher_produit($nom, $couleur, $prix, $disponible)
{
    echo "<p> Nom : $nom, Couleur : $couleur, Prix : $prix";

}
?>

<?php
$nom="T-shirt femme";
$couleur="rouge";
$prix="15.50";
$disponible="true";
$disponible="false";
$quantité="10";
$rien="0";

echo "<h1>Fiche produit : $nom</h1>";
echo "...";
echo "...";
?>

Valeur de retour : Rien


<?php
function afficher_description($couleur, $prix)
{
afficher_description ;
}
?>



paramètres: couleur, prix
Valeur de retour : Rien
Action: Affiche “Couleur: X, Prix: Y” dans une balise <p>. X étant la couleur passée en paramètre, Y
étant le prix passé en paramètre.
