<?php
$a = 10;
$b = '10';
$umA = $a===$b;
$umB = $a<=>$b;
$umC = $a*$b;

function doisA($a, $b, $c)
{
    $a += $b + $c;
    if ($a>=7) {
        return '"aprovado" com média maior ou igual a 7';
    }
    if ($a>=4 || $a<7) {
        return '"prova final" com média maior ou igual a 4 e menor que 7';
    }
    if ($a<4) {
        return '"reprovado" com média menor que 4';
    }
}

function tres($a, $b)
{
    if ($a ==='M') {
        return ((72.7 * $b) - 58);
    }
    if ($a ==='F') {
        return ((62.1 * $b) - 44.7 );
    }
}
function quatro($a, $b, $c)
{
    switch ($b) {
        case '+':
            return $a + $c;
         break;
        case '-':
            return $a - $c;
         break;
        case '*':
            return $a * $c;
         break;
        case '/':
            return $a / $c;
         break;
        default:
            return 'operador incorreto';
         break;
    }
}
function cinco($a, $b, $c)
{
    if ($a > $b && $a > $c) {
        return $a;
    }
    if ($b > $a && $b > $c) {
        return $b;
    }
    if ($c > $a && $c > $b) {
        return $c;
    }
}
function seis($a)
{
    $x = 1;
    $i = 1;
    for ($i = 1; $i < $a; $i++) {
        $x = $x + $x;
    };
    return $x;
}

function sete(){
   $q = 0;
   $n = 2;
   $x;
   $z;
	while ($q != 25){
      $z = 0;
      for($x = $n; $x > 0; $x--){
         if ( $n % $x == 0)				  
         ++$z;		  
      }
      if ( $z == 2){	
      echo("<br> primo:". $n);
      ++$q;
      }
      ++$n;
   }
}
function oito($a, $b){
   if($a > $b){
      echo ($b .' '. $a);
   }
   if($b > $a){
      echo ($a.' '. $b);
   }
}
function nove($a){
   if (gmp_prob_prime($a)) {
      echo $a.' É primo';
   } else {
      echo $a.' Não é primo';
   }
}
function dez($a, $b){
   $a++;
   for($a; $a<$b; $a++){
      echo '<br>'.$a;
   }
}
function onze($a,$b){
if($a == $b){
   echo ('iGUAL');
}else{
   echo ('DIFERENTE');
}
function doze($a){
   echo $a;
}
function treze($a){
   if($a=='a'){
      return 'http://www.utfpr.edu.br/';
   }else{
      return 'UTFPR';
   }
}
function quatorze($a,$b,$c){
   if ($b == 'F' && $c < 25){
      echo ( $a . ' Aceita'); 
   }else{
      echo ($a . ' NÃO ACEITA');
   }
}

}
include_once("index.view.php");

?>
