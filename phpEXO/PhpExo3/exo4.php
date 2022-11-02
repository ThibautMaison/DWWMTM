<?php
$n1 = readline ("entrez un nombre :");
$n2 = readline ("entrez un nombre :");

if($n1==0 or $n2==0)
{
    echo "null";
}
elseif (($n1>0 && $n2>0) or ($n1<0 && $n2<0))
{
    echo "positif";
}
else
{
    echo "negatif";
}
?>