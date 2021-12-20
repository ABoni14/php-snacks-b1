<?php 
/*
## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/
$paragraph = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit maxime earum eveniet reprehenderit iusto quo at culpa. Ad, quasi aperiam nemo accusantium accusamus nobis expedita maiores corrupti modi, reiciendis magni unde cum ipsum at voluptate recusandae deleniti doloribus autem pariatur doloremque est officia vel! Porro molestiae repellat, est earum reprehenderit id eos, quod magni, harum corporis dicta blanditiis ad quam accusamus temporibus alias voluptates obcaecati illum. Obcaecati esse aperiam, iure corporis repellat minima eius nesciunt odit enim quaerat itaque. Pariatur cumque quis sit architecto ad ex est quaerat dicta, libero rerum accusantium odit totam eveniet laborum porro quos error sequi? Consequuntur et atque iste eveniet repellendus libero porro cum ipsam, iusto, alias vero maiores. Laborum dolorum itaque rem a blanditiis asperiores labore recusandae consequuntur error quibusdam quam temporibus assumenda cupiditate excepturi nobis magni eligendi nesciunt quisquam at enim quo, atque minima? Cupiditate illum labore aliquam provident magni assumenda, libero pariatur, voluptas repellat laborum ducimus a id, vitae tenetur magnam eaque voluptatem fugiat. Dicta molestias, labore quam corporis nam laudantium eveniet debitis distinctio vitae, dignissimos quos reprehenderit, ipsa rem cumque maiores illo quaerat voluptatum provident earum nesciunt sed tempora explicabo. Soluta labore suscipit ullam fugiat tempore ea molestiae corrupti, cumque aliquam.";
$stringInParagraph = explode('.', $paragraph);
var_dump($stringInParagraph);

for ($i = 0; $i < count($stringInParagraph); $i++){
  echo $stringInParagraph[$i] . ".<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 5</title>
</head>
<body>
</body>
</html>