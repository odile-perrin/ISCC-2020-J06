<meta charset="utf-8">

<?php
function compter($maximum)
{
    $i=1;
    while($i <= $maximum)
    {
        echo $i;
        $i=$i + 1;
        echo "<br>";
    }
    return;
}
compter(10);

function compter_for($maximum)
{
    for($i=1; $i <= 10;)
    {
        echo $i;
        $i=$i + 1;
        echo "<br>";
    }
    return;
}
compter_for(10);
?>