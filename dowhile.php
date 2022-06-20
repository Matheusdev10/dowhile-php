<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<div>

<?php

$valor = isset($_GET["val"]) ? $_GET["val"]: 1;

$n = $valor;
$fat = 1;
do {
  $fat = $fat * $n;
  $n--;

} while ($n >=1);
echo "$valor ! = $fat";
?>


</div>
  
</body>
</html>