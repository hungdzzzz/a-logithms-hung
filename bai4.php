<?php

function findProduct($listProduct, $nameProduct) {
  foreach ($listProduct as $product) {
      if ($product['name'] == $nameProduct) {
          return $product;
      }
  }
  return null;
}
$listProduct = array(
  array('name' => 'CPU', 'price' => 400, 'categoryId' => 1),
    array('name' => 'VGA', 'price' => 600, 'categoryId' => 2),
    array('name' => 'RAM', 'price' => 200, 'categoryId' => 1),
    array('name' => 'Main', 'price' => 800, 'categoryId' => 3)
);

$productss = findProduct($listProduct, 'CPU');


  echo $productss['name']; 

 


 
 ?>;

