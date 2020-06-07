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

## Variáveis

Variáveis são indentificadores utilizados para representar valores mutáveis de dados, que ficam alocados na memória, no PHP uma variável pode conter diversos tipos de dados, strings, inteiros, números ponto flutuante, objetos, etc. No PHP as variáveis são sempre precedido pelo caractere cifrão ($), exemplo:
```
$variável
```

Sendo importante nunca utilizar números para iniciar uma nomeclatura de variáveis, nunca utilizar espaços em branco no meio do identificador, nunca utilizar caracteres especiais, evitar variáveis com mais de 15 caracteres, sempre criar variáveis com nomeclatura significativa e utilizar preferencialmente  palavras em minúculo e sperados pelo caractere "_".

Em alguns casos precisamos de nomes de variáveis que precisam mudar de acordo com desterminadas situações, no PHP possui o conceito de **variáveis variantes (variable variables)**, sendo essas representadas por dois sinais de cifrão ($), assim o PHP irá referenciar a variável representada pelo conteúdo da primeira. exemplo:
```
<?php
//define o nome da variável
$variavel = 'nome';

//cria a variável indeificada pelo conteúdo de $variavel
$$variavel = 'maria';
?>
```

Sempre é criada uma nova área de armazenamento na memória quando uma variável é atribuída a outra.

### Tipos de Variáveis

**booleano**

Expressa um valor lógicoque pode ser verdadeiro ou falso. Utiliza-se as palavras-chave *TRUE* ou *FALSE* para especificar um valor booleano, exmeplo:
```
<?php
//declara a variável com valor TRUE
$exibir_nome = TRUE;

//testa se $exibir_nome é TRUE
if ($exibir_nome){
    echo 'Havyner';
}
?>
Resultado: Havyner
```

**numérico**

Números podem ser especificados em notação decimal, hexadecimal ou octal.

**string**

É uma cadeia de caracteres alfanuméricos , utilizando aspas simples '' ou duplas "" para declará-las.
```
<?php
    $variavel = 'aspas simples';
    $variavel = "aspas duplas";
?>
```

**array**

É uma lista de valores armazenados na memória, podem ser de diferentes tipos e ser acessados a qualquer momento, pois cada valor é relacionado a uma chave e podendo crescer dinamicamento com adição de novos itens, exemplo:
```
<?php
    $carros = array('Ferrari', 'Porche', 'Camaro');
    echo $carros[1]; // resultado = Porche
?>
```

**objeto**

É uma entidade com um determinado comportamento definido por seus métodos e propriedades, para criar um objeto utiliza-se o operador *new*, exemplo:
```
<?php
class computador{
    var $cpu;
    function ligar(){
        echo "Ligando computador a {$this->cpu}...";
    }
}

$obj = new computador;
$obj->cpu = "500Mhz";
$obj->ligar();
?>

Resultado: Ligando computador a 500Mhz...
```

**recursor**

É uma variável especial que mantém um referência de recurso externo, são criados e utilizados por funções especiais, como conexão ao banco de dados, exemplo:
```
resource musql_connect(...)
```

**misto**

Representa múltiplos tipos de dados em um mesmo parâmetro. Um parâmetro do tipo *mixed* indica que a função aceita diversos tipos de dados. exemplo:
```
string gettype (mixed var)
```

**callback**

Algumas funções como call_user_func() aceitam um parâmetro que significa uma função a ser executada, este tipo de dado é chamado de callback.

**NULL**

Significa que a variável não possui valor. NULL é o único valor possível do tipo NULL.




[VOLTAR](https://github.com/Havyner/php-estudos/blob/master/README.md)