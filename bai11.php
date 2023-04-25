<?php
 function sortByPrice($listProduct) {
  $n = count($listProduct);
  for ($i = 0; $i < $n - 1; $i++) {
      for ($j = 0; $j < $n - $i - 1; $j++) {
          if ($listProduct[$j]['price'] > $listProduct[$j+1]['price']) {
              $temp = $listProduct[$j];
              $listProduct[$j] = $listProduct[$j+1];
              $listProduct[$j+1] = $temp;
          }
      }
  }
  return $listProduct;
}
$listProduct = array(
  array('name' => 'CPU', 'price' => 400, 'categoryId' => 1),
    array('name' => 'VGA', 'price' => 600, 'categoryId' => 2),
    array('name' => 'RAM', 'price' => 200, 'categoryId' => 1),
    array('name' => 'Main', 'price' => 800, 'categoryId' => 3)
);

$sortedProducts = sortByPrice($listProduct);


  foreach ($sortedProducts as $product) {
      echo   $product['name'] ;
  }
  echo "</ul>";


 
 ?>;