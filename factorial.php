<?php

function num ($numero) {
    $num = 1;
    $con = 1;
    while ($con <= $numero) {
        $num*=$con;
        $con++;
    }
    return $num;
}

for ($indice = 1; $indice <= 10; $indice++){
    echo "Factorial de " . $indice . " es: " . num($indice) . "<br/>";
}
?>