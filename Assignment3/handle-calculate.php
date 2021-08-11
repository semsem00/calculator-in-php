<?php

// echo '<pre>';
$x = $_GET['number1'];
$y = $_GET['number2'];
$op = $_GET['operation'];



if ($x == null or $y == null){
    echo'please Enter The numbers';
}

 function calc (int|float $x, int|float $y, string $op) 
 {
    return $op($x , $y);
    
 } 

 function add (int|float $x, int|float $y) : int|float 
 {
   return $x + $y;
 }

 function sub (int|float $x, int|float $y) : int|float 
 {
   return $x - $y;
 }

 function mul (int|float $x, int|float $y) : int|float 
 {
   return $x * $y;
 }

 function div (int|float $x, int|float $y)  
 {
    if($y == 0){
        echo 'You can not divide by zero! ';
    }else if ( $x== 0 and $y==0){
        echo 'You can not divide zero by zero! ';
    }else{
          return  $x / $y;
    }
    
 }

echo '<div class=" container mt-5 w-50 p-5 shadow-lg">';
echo calc($x , $y , $op);
echo '</div>';
?>