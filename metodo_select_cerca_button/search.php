<?php
//ricerca in base al valore della select (get) e form
//andremo a creare un array filtrato che verrà stamapato
include __DIR__ . '/server/db.php';
$productsFiltered = $products;

if (isset($_GET['tipologia']) !== false) {
  $tipologia = $_GET['tipologia'];
  if ($tipologia === 'all') {
    $productsFiltered = $products;
  } else {
    $productsFiltered = [];
    foreach ($products as $product) {
      if ($product['tipologia'] === $tipologia) {
        $productsFiltered[] = $product;
      }
    }
  }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <title>SNACK</title>
</head>

<body>

  <!-- main -->
  <main id="app">
  <form action="search.php">
      <select name="tipologia" id="tipologia" method="GET">
        <option value="all">all</option>
        <option value="elettrodomestico">elettrodomestico</option>
        <option value="elettronica">elettronica</option>
      </select>
      <button>Cerca</button>
    </form>

    <div class="row mt-5">
        <?php
            foreach ($productsFiltered as $product) {
                include __DIR__ . '/partials/product.php';
            }
        ?>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>