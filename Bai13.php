<?php



function sortByCategoryName($listProduct, $listCategory) {
    $n = count($listCategory);
    $sortedProducts = array();
    for ($i = 0; $i < $n; $i++) {
        $categoryProducts = array();
        $categoryId = $listCategory[$i]['id'];
        foreach ($listProduct as $product) {
            if ($product['categoryId'] == $categoryId) {
                $categoryProducts[] = $product;
            }
        }
        $m = count($categoryProducts);
        for ($j = 1; $j < $m; $j++) {
            $key = $categoryProducts[$j];
            $k = $j - 1;
            while ($k >= 0 && $categoryProducts[$k]['name'] > $key['name']) {
                $categoryProducts[$k+1] = $categoryProducts[$k];
                $k = $k - 1;
            }
            $categoryProducts[$k+1] = $key;
        }
        $sortedProducts = array_merge($sortedProducts, $categoryProducts);
    }
    return $sortedProducts;
}
$listCategory = array(
    array('id' => 1, 'name' => 'Computer', ),
    array('id' => 2, 'name' => 'Card', ),
    array('id' => 3, 'name' => 'Memory', )
);

$listProduct = array(
    array('name' => 'CPU', 'price' => 400,'categoryId' => 1),
    array('name' => '', 'price' => 200, 'categoryId' => 2),
    array('name' => 'Product C', 'price' => 300,'categoryId' => 1),
    array('name' => 'Product D', 'price' => 100,'categoryId' => 3),
    array('name' => 'Product E', 'price' => 500, 'categoryId' => 2),
    array('name' => 'Product F', 'price' => 250,  'categoryId' => 1)
);

$sortedProducts = sortByCategoryName($listProduct, $listCategory);

foreach ($sortedProducts as $product) {
    echo $product['name'] . ' - ' . $product['price'] . ' - ' .   ' - ' . $product['categoryId'] . '<br>';
}
?>