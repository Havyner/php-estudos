7 - As Organizações Tabajara resolveram dar um aumento de salário aos seus colaboradores e lhe contraram para desenvolver o programa que calculará os reajustes.
Faça um programa que recebe o salário de um colaborador e o reajuste segundo o seguinte critério, baseado no salário atual:
- salários até R$ 280,00 (incluindo) : aumento de 20%
- salários entre R$ 280,00 e R$ 700,00 : aumento de 15%
- salários entre R$ 700,00 e R$ 1500,00 : aumento de 10%
- salários de R$ 1500,00 em diante : aumento de 5% Após o aumento ser realizado, informe na tela:
- o salário antes do reajuste;
- o percentual de aumento aplicado;
- o valor do aumento;
- o novo salário, após o aumento.

</br></br></br>

<?php

$salario = 1600.00;
$novo_salario;
$aumento;

echo "Seu salário atual é de: R$ $salario </br>";

if($salario <= 280.00){
    $aumento = (($salario * 20) / 100);
    $novo_salario = $aumento + $salario;
    echo "Você teve um porcentual de: 20%</br>";
    echo "Valor aumentado: R$ $aumento </br>";
    echo "Novo Salário com reajuste é de: R$ $novo_salario";
}elseif(($salario > 280.00) && ($salario <= 700.00)){
    $aumento = (($salario * 15) / 100);
    $novo_salario = $aumento + $salario;
    echo "Você teve um porcentual de: 15%</br>";
    echo "Valor aumentado: R$ $aumento </br>";
    echo "Novo Salário com reajuste é de: R$ $novo_salario";
}elseif(($salario > 700.00) && ($salario <= 1500.00)){
    $aumento = (($salario * 10) / 100);
    $novo_salario = $aumento + $salario;
    echo "Você teve um porcentual de: 10%</br>";
    echo "Valor aumentado: R$ $aumento </br>";
    echo "Novo Salário com reajuste é de: R$ $novo_salario";
}elseif($salario > 1500.00){
    $aumento = (($salario * 5) / 100);
    $novo_salario = $aumento + $salario;
    echo "Você teve um porcentual de: 5%</br>";
    echo "Valor aumentado: R$ $aumento </br>";
    echo "Novo Salário com reajuste é de: R$ $novo_salario";
}