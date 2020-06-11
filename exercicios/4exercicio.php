4 - Faça um programa para uma loja de tintas. 
O programa deverá pedir o tamanho em metros quadrados da área a ser pintada.
Considere que a cobertura da tinta é de 1 litro para cada 3 metros quadrados e que
 a tinta é vendida em latas de 18 litros, que custam R$ 80,00.
Informe ao usuário a quantidades de latas de tinta a serem compradas e o preço total.

<?php

$tamanho_area_pintada = 120;
$litros = $tamanho_area_pintada / 3;
$quantidade_latas = $litros / 18;
$valor_pago = floor($quantidade_latas + 1) * 80;


echo "</br></br>Tamanho da área: $tamanho_area_pintada m²</br>";
echo "Quantidade de tinta necessária: $litros L</br>";
echo 'Quantidade de latas: ';
echo ceil($quantidade_latas);
echo "</br>Total a ser pago: R$ ";
echo round($valor_pago);