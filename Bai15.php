<?php 
function minByPrice($listProduct) {
  if (count($listProduct) === 0) {
    return null;
  }

  $minPrice = min(array_column($listProduct, 'price'));

  foreach ($listProduct as $product) {
    if ($product['price'] === $minPrice) {
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
  


$result= minByPrice($listProduct);

echo $result['name']; 
?>