<?php
include ('functions.php');
$a = array (1,2,3,4,5,6,7,8,9,10);
echo 'Maior:'.maiorNumero($a).'<br>';
echo 'Menor:'.menorValor($a).'<br>';
echo 'Numero de Valores:'.numeroValores($a).'<br>';
echo 'Media:'.media($a).'<br>';
echo 'Ordenacao:'.ordenacao($a).'<br>';
echo 'Busca:'.busca($a, 1).'<br>';
$adao = checaResultado([0, 0, 0, 0, 0, 1], 1);
echo "Adão ganhou ${adao} vezes";
$st = stark("Stark#Bran, Arya, Tony#Wolf");
$m = explode(',', $st[1]);
$mat = matrix();
$mat2 = matrix2();
$matPar = matrizPar();
// $loja = ([vendedor1:])
include ('index.view.php');
