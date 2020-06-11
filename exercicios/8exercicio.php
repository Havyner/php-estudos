8 - Faça um Programa que peça um número correspondente a um determinado ano 
e em seguida informe se este ano é ou não bissexto.</br></br>

<?php

$ano = 2020;

if($ano%400 == 0 || ($ano%4 == 0 && $ano%100 != 0)){
    echo "$ano é Bisexto!";
}else {
    echo "$ano Não é Bisexto!";
}