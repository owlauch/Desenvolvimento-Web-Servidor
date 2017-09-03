<?php
function maiorNumero($a)
{
    foreach ($a as $key => $value) {
          $maior=0;
        if ($value> $maior) {
            $maior = $value;
        }
    }
    return $maior;
}
function menorValor($a)
{
    foreach ($a as $key => $value) {
        $menor=1;
        if ($value < $menor) {
            $menor = $value;
        }
    }
    return $menor;
}
function numeroValores($a)
{
    $i=0;
    foreach ($a as $key => $value) {
        $i++;
    }
    return $i;
}
function media($a)
{
    $media=0;
    $i=0;
    foreach ($a as $key => $value) {
        $media += $value;
        $i++;
    }
    return $media/$i;
}
function ordenacao($a)
{
    return rsort($a);
}
function busca($a, $b)
{
    foreach ($a as $key => $value) {
        if ($value == $b) {
            return true;
        }
    }
    return false;
}
function checaResultado($a, $b)
{
    $cont=0;
    foreach ($a as $key => $value) {
        if ($value == $b) {
            $cont++;
        }
    }
    return $cont;
}
function stark($a)
{
      $pices = explode('#', $a) ;
    return $pices;
}
function matrix()
{
    $a  = array([]);
    for ($i =1; $i <11; $i++) {
        $a[$i]= $i;
    }
    return $a;
}
function matrix2()
{
    $a  = array([]);
    $aux=9;
    for ($i = 1; $i <10; $i++) {
        $a[$aux]= $i;
        $aux--;
    }
    return $a;
}
function matrizPar() {
   $a = matrix();
   $j = count($a);
   for ($i=0; $i < $j  ; $i++) { 
      if(!($a[$i] % 2 === 0)){
         $a[$i] = '*';
      }
   }
   return $a;
}
