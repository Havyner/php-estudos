# CAPITULO I

## Um Pograma PHP

### Extenções:

```
.php             --------> Arquivo do Programa PHP.
.class.php       --------> Arquivo contendo uma classe.
.inc.php         --------> Arquivo a ser incluido.
```

### Delimitadores:

O código deve estar sempre contido nos seguinte delimitadores:

```
<?php
// codigo;
// codigo;
?>
```

**TODO COMANDO É DELIMITADO POR PONTO-E-VÍRGULA (;).**

### Comentário no código:

O código pode ser comentado uma única linha ou várias de uma vez.
```
// única linha
/*
 várias linhas
*/
```

### Comandos de saída (Output)

São comandos utilizados para ter uma saída de tela, ou seja, para imprimir algo na tela.

**Comando echo**

Utilizado para imprimir uma ou mais variáveis no console. Exemplo:
```
echo 'a', 'b', 'c';

Resultado: abc
```

**Comando print**

Utilizado para imprimir uma string no console. Exemplo:
```
print('abc');

Resultado: abc
```

**Comando var_dump**

Utilizado para imprimir o conteúdo de uma variável de forma explanativa. Exemplo:
```
$vetor = array('Ferrari', 'Porche', 'Camaro');
var_dump($vetor);

Resultado:
array(3) {
    [0]=>
    string(7) "Ferrari"
    [1]=>
    string(6) "Porche"
    [2]=>
    string(6) "Camaro"
}
```

**Comando print_r**

Assim como o var_dump, imprime o conteúdo de uma varável de forma explanativa, mas em formato mais legível para o programador. Exemplo:
```
$vetor = array('Ferrari', 'Porche', 'Camaro');
print_r($vetor);

Resultado:
array (
    [0] => Ferrari
    [1] => Porche
    [2] => Camaro
)
```


[VOLTAR](https://github.com/Havyner/php-estudos/blob/master/README.md)