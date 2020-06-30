<meta charset="utf-8">

<?php
$str1="La maîtrise des fondamentaux du code et de la programmation
dans les domaines du business, du marketing et de la communication est un avantage sérieux
et utile.";

$caractères_str1=strlen($str1);
echo "<p>La chaine str1 contient $caractères_str1 caractères.</p>";

$nb_mots=str_word_count($str1);
echo "<p>La chaine str1 contient $nb_mots mots.</p>";

$minuscule=strtolower($str1);
echo "<p>$minuscule</p>";

$majuscule=strtoupper($str1);
echo "<p>$majuscule</p>";

$melange=str_shuffle($str1);
echo "<p>$melange</p>";

$LA=str_replace("la","LA",$str1);
echo "<p>$LA</p>";

$supp=substr($str1, 0, 129);
echo "<p>$supp</p>";
?>