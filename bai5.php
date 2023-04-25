<?php
 function findProductByCategory($listProduct, $categoryId) {
    $result = array();
    foreach ($listProduct as $product) {
        if ($product['categoryId'] === $categoryId) {
            $result[] = $product;
        }
    }
    return $result;
}
$listProduct = array(
    array('name' => 'CPU', 'price' => 400, 'categoryId' => 1),
    array('name' => 'VGA', 'price' => 600, 'categoryId' => 2),
    array('name' => 'RAM', 'price' => 200, 'categoryId' => 1),
    array('name' => 'Main', 'price' => 800, 'categoryId' => 3)
);

$products = findProductByCategory($listProduct,3 );


    foreach ($products as $product) {
        echo   $product['name'] ;
    }