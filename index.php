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

$senha = 
function verificação(){
     if(ctype_lower('minusucula')){
        
     }
}