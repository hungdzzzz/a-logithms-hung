<?php
function maxByPrice($listProduct) {
  $maxProduct = null;

  foreach ($listProduct as $product) {
    if ($maxProduct === null || $product['price'] > $maxProduct['price']) {
      $maxProduct = $product;
    }
  }

  return $maxProduct;
}
$listProduct = array(
  array('name' => 'CPU', 'price' => 400, 'categoryId' => 1),
    array('name' => 'VGA', 'price' => 1600, 'categoryId' => 2),
    array('name' => 'RAM', 'price' => 200, 'categoryId' => 1),
    array('name' => 'Main', 'price' => 800, 'categoryId' => 3)
);

$result= maxByPrice($listProduct);

echo $result['name']; 
?>