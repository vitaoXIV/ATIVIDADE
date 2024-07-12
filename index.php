<?php 
//questao 1
   $nome = "Vitor";
   echo  $nome;
 echo "<br>";

//questao 2

$nome = "Luis";
$idade = 17;
$endereço = "Rua do Estanho";
$curso = "Programação Web";
echo "<br>";
echo "Olá eu sou $nome, tenho $idade anos, moro em $endereço e faço o $curso no SENAC";
echo "<br>";

//questaao 3
echo "<br>";
$n1 = 2;
$n2 = 3;

$soma =("$n1" + "$n2");
echo "a soma de $n1 + $n2 é igual a $soma";
echo "<br>";
$subtração = ("$n1" - "$n2");
echo "a subtração de $n1 - $n2 é igual a $subtração";
echo "<br>";
$multiplicar = ("$n1" * "$n2");
echo "a multiplicação de $n1 * $n2 é igual a $multiplicar";
echo "<br>";
$divisao = ("$n1" / "$n2");
echo "a divisão de $n1 / $n2 é igual a $divisao";
echo "<br>";

//questao 4
echo "<br>";

$num1 = 5;
$num2 = 5;

if($num1 < $num2) {
    echo "$num1 é menor que $num2";
} elseif($num1 == $num2) {
    echo "$num1 é igual a $num2";
} else {
    echo "$num1 é maior que $num2";
}

echo "<br>";

//questao 5
echo "<br>";
 $palavra = "vitor";
if (str_contains('vitor', 'a')) {
    echo "false";
} else {
    echo "true";
}
echo "<br>";
//questao 6

$p = "vitao";
function retorno($p) {
    return $p; 
    
}
echo retorno($p);

echo "<br>";

//questao 7
echo "<br>";
$senha = 12;
function verificação(){
     if(ctype_lower('minusucula')){
        
     }
}



//questao 8//

$idade = 1;  //ternario usa "?" e ":"

echo  $idade >= 18 ? 'Maior de Idade' : 'Menor de idade'; //operador ternario precisa de variavel, o item verdadeiro e o falso//

echo "<br>";

//questao 9//
echo "<br>";

$alunos = array(
    'Junior' => 9.5,
    'Maria' => 10,
    'Paulo' => 6,
    'Ana' => 8.5,
    'Pedro' => 5.5,
    'Júlia' => 6.5
);

foreach($alunos as $aprovados => $notas){
   
    echo "<br>";
    if($notas >= 7){
        echo "quem passou foi $aprovados com $notas";
    }
    
};

//questao 10//


 $raio = 5;
$calcraio =  pi() * ($raio ** 2);

function area() {
    pi() * $calcraio;
};
    echo "raio é $raio, area é $calcraio";
    echo "<br>";

//questao 11//
echo "<br>";

$par = [];
$numero = 14;
function parametro($par) {
    for($numero = 0; $numero <=13; $numero++){
        if($numero % 2 == 0){
            $par[] = $numero;
        }
        
    }
    foreach($par as $key => $pares ) {
        echo $pares;
    }
}
return parametro($par);
echo "<br>";
echo "entrada = $numero";


//questao 12//



//qeustao 13//

$string = "arara"

function palindromo() {
    
}
