6 - Faça um Programa onde é informado um horario de 24 horas e imprima a mensagem,
"Bom Dia!" (6:00 ate 12:00), "Boa Tarde!" (13:00 ate 18) ou "Boa Noite!" (18:00 ate 5:59) ou "Valor Inválido!"
(caso o seja invalido), conforme o valor informado.</br></br></br>
 obs.: O exercicio possui um erro entre 12:00 até as 13:00!</br></br></br>


 <?php

 $hora = 17.34;

 if($hora == 0){
     echo "Valor Inválido!";
 }elseif(($hora >= 6.00) && ($hora <= 12.00)){
    echo "Bom Dia!";
 }elseif(($hora >= 13.00) && ($hora <= 18.00)){
    echo "Boa Tarde!";
 }elseif(($hora > 18.00) && ($hora <= 5.59)){
    echo "Boa Noite!";
 }