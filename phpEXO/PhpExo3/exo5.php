<?php
$age = readline ('entrez un nombre :');

if ($age >=12)
{
    echo "cadet";
}
elseif ($age >=10)
{
    echo "minime";
}
elseif ($age >=8)
{
    echo "pupille";
}
else
{
    echo "Poussin";
}

?>