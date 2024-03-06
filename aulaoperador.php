<?php

$v1 = 21;
$v2 = 34;
$total = $v1+$v2;
echo "Soma: $total<br>";
$total = $v1-$v2;
echo "subtração: $total<br>";
$total = $v1*$v2;
echo "multiplicação;$total<br>";
$total = $v1/$v2;
echo "divisão: $total<br>";
$total = $v1%$v2;
echo "resto da divisao: $total<br>";
$total = -$v2;
echo "a negacao da variavel 34 e: $total<br>";
$b = 10;
$c = 100;
echo "$b é igual a $c? " . ($b == $c ? "sim" : "nao") . "<br>";
echo "$b nao e igual" . ($b != $c ? "sim" : "nao") . "<br>";
echo "$b e diferente " . ($b <> $c ? "sim" : "nao") . "<br>";
echo "$b e nao identico a 100?" . ($b !== $c ? "sim" : "nao") . "<br>";
echo "$b e menor que 100? " . ($b < $c ? "sim" : "nao") . "<br>";
echo "$b e maior que 100? " . ($b < $c ? "sim" : "nao") . "<br>";
echo "e menor igual a 100?" . ($b > $c ? "sim" : "nao"). "<br>";
echo "e maior igual a 100?" . ($b > $c ? "sim" : "nao") . "<br>";



?>