<?php
require_once __DIR__ . '/./Product.php';

// Creo Istanza della Classe Product
$prod1 = new Products('crocchette', 25.40);
$prod1->setDesc('Crocchete vegetali con poche calorie e alto nutrimento proteico.');
// var_dump($prod1);
// var_dump($prod1->getName());
// var_dump($prod1->getDesc());
// var_dump($prod1->getPrice());
// var_dump($prod1->calcFinalPrice(10));

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <title>PHP OOP 2</title>
</head>

<body>

  <div class="container text-center py-4">
    <h1>PetWorld</h1>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>