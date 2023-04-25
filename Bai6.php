<?php
   function findProductByPrice($listProduct, $price) {
    $result = array();
    foreach ($listProduct as $product) {
        if ($product['price'] <= $price) {
            $result[] = $product['name'];
        }
    }
    return $result;
}
$listProduct = array(
   
array('name' => 'CPU', 'price' => 400, 'categoryId' => 1),
array('name' => 'VGA', 'price' => 600, 'categoryId' => 2),
array('name' => 'RAM', 'price' => 200, 'categoryId' => 1),
array('name' => 'Main', 'price' => 800, 'categoryId' => 3));

$products = findProductByPrice($listProduct,1000);

echo "" . implode(", ", $products);
?>