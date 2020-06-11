5 - Faça um Programa que peça dois números e imprima o maior deles. Exibir os valores informados.

<?php

$numero1 = 55;
$numero2 = 24;

echo "</br></br>O maior número é: ";

if($numero1 == $numero2){
    echo "Números iguais!!";
}else if($numero1 > $numero2){
    echo "$numero1";
}else{
    echo "$numero2";
}