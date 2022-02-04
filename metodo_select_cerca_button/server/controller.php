<?php
//anche controller non serve in questo metodo
//valore di default preso ciclando db
//andado a cercare valore troveremo un controller sulla nuova pagina
include __DIR__ . '/db.php';
header('Content-type: application/json');

if (isset($_GET['tipologia']) !== false) {
    $tipologia = $_GET['tipologia'];
    if ($tipologia === 'all') {
      $productsFiltered = $products;
    } else {
      $productsFiltered = [];
      foreach ($products as $product) {
        if ($product['tipologia'] === $tipologia) {
            $productsFiltered [] = $product;
        }
      }
    }
    echo json_encode([
      'results' =>  $productsFiltered,
    ]);
  } else {
    echo json_encode([
      'error' =>  'prodotto non selezionato'
    ]);
  }
?>