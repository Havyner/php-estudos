2 - Faça um Programa que peça as 4 notas bimestrais e mostre a média <br><br>

<?php

$notas = [60, 62];
$media = array_sum($notas) / count($notas);

foreach($notas as $index => $nota){
    $index = $index + 1;
    echo "Nota $index: $nota <br>";
}
echo "Media do Aluno: $media";