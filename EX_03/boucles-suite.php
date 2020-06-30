<meta charset="utf-8">

<?php
function compter_dizaine($maximum)
{
    $i=0;
    while($i <= $maximum)
    {
        $i=$i +1;
        echo "<p>Compteur : $i</p>";

    if (!($i%100))
    {
        echo 'Ceci est une centaine.';
    }

    elseif (!($i%10))
    {
        echo 'Ceci est une dizaine.';
    }
    }
    return;
}
compter_dizaine(99);
?>