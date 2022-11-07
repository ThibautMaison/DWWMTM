<?php
$nombre = readline("entrez un nombre:");

echo "Les 5 nombres suivants sont:\n";
for($i=1;$i<=5;$i++){
    echo $nombre + $i . "\n";
}
echo "********************************\n";
echo "Les 5 nombres Precedents sont:\n";
for($i=1;$i<=5;$i++){
    echo $nombre - $i . "\n";
}
