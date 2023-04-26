<?php
function minByPrice($listProduct)
{
  //gan gia tri bang null
  $minProduct = array('name' => '', 'price' => "");
  $minPrice = array('price' => "");
  //day gia tri
  foreach ($listProduct as $product) {
    if ($product['price'] < $minPrice) {
      $minProduct = $product;
      $minPrice = $product['price'];
    }
  }
  return $minProduct;
}
$listProduct = array(
  array('name' => 'CPU', 'price' => 400, 'categoryId' => 1),
  array('name' => 'VGA', 'price' => 1600, 'categoryId' => 2),
  array('name' => 'RAM', 'price' => 200, 'categoryId' => 1),
  array('name' => 'Main', 'price' => 80, 'categoryId' => 3)
);
$result = minByPrice($listProduct);
echo $result['name'];
