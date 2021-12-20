<?php 
/*
## Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/
$db = [
  'teachers' => [
    [
      'name' => 'Michele',
      'lastname' => 'Papagni'
    ],
    [
      'name' => 'Fabio',
      'lastname' => 'Forghieri'
    ]
  ],
  'pm' => [
    [
      'name' => 'Roberto',
      'lastname' => 'Marazzini'
    ],
    [
      'name' => 'Federico',
      'lastname' => 'Pellegrini'
    ]
  ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 6</title>
</head>
<body>

<div 
style="
  background-color: grey; 
  width:150px;
  padding:5px;">
  <?php
  for($i=0; $i< count($db["teachers"]); $i++){
    echo $db["teachers"][$i]["name"];
    echo " ";
    echo $db["teachers"][$i]["lastname"];
    echo "<br>";
  }
  ?>
</div>

<div 
style="
  background-color:green; 
  width:150px;
  padding:5px;">
  <?php
  for($i=0; $i< count($db["pm"]); $i++){
    echo $db["pm"][$i]["name"];
    echo " ";
    echo $db["pm"][$i]["lastname"];
    echo "<br>";
  }
?>
</div>

</body>
</html>