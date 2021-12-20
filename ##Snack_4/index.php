<?php 
/*
## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/
var_dump(randomNumberArray(1,100,15));

function randomNumberArray($min, $max, $nItems){

  $newArray = [];
  
  if(($max - $min) < $nItems){
    $nItems = $max - $min;
  };
  
  while(count($newArray) <  $nItems){
    $number = rand($min,$max);
    if(!in_array($number,$newArray)){
      $newArray[] = $number;
    }
  
  };
  
  return $newArray;
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>Snack 4</title>
</head>
<body>
  
</body>
</html>