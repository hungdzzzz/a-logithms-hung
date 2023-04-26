<?php
function maxByPrice($listProduct)
{
  //gan gia tri bang null
  $maxProduct = array('name' => '', 'price' => "");
  $maxPrice = "";
  //day gia tri
  foreach ($listProduct as $product) {
    if ($product['price'] > $maxPrice) {
      $maxProduct = $product;
      $maxPrice = $product['price'];
    }
  }
  return $maxProduct;
}
$listProduct = array(
  array('name' => 'CPU', 'price' => 324400, 'categoryId' => 1),
  array('name' => 'VGA', 'price' => 1600, 'categoryId' => 2),
  array('name' => 'RAM', 'price' => 200, 'categoryId' => 1),
  array('name' => 'Main', 'price' => 800, 'categoryId' => 3)
);
$result = maxByPrice($listProduct);
echo $result['name'];
