<?php
function sortByName($listProduct) {
    $n = count($listProduct);
    for ($i = 1; $i < $n; $i++) {
        $temp = $listProduct[$i];
        $j = $i - 1;
        while ($j >= 0 && strlen($listProduct[$j]['name']) < strlen($temp['name'])) {
            $listProduct[$j+1] = $listProduct[$j];
            $j--;
        }
        $listProduct[$j+1] = $temp;
    }
    return $listProduct;
}
$listProduct = array(
    array('name' => 'CPU', 'price' => 400, 'categoryId' => 1),
    array('name' => 'VGA', 'price' => 600, 'categoryId' => 2),
    array('name' => 'RAM', 'price' => 200, 'categoryId' => 1),
    array('name' => 'Main', 'price' => 800, 'categoryId' => 3)
);

$sortedProducts = sortByName($listProduct);


    foreach ($sortedProducts as $product) {
        echo "<li> " . $product['name'] .  "</li>";
    }
