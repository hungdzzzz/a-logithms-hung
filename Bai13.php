<?php
$listCategory = array(
  array('id' => 1, 'name' => 'Computer',),
  array('id' => 2, 'name' => 'Card',),
  array('id' => 3, 'name' => 'Memory',),
  array('id' => 4, 'name' => 'Acsesory',)
);
$listProduct = array(
  array('name' => 'CPU', 'price' => 400, 'categoryId' => 4),
  array('name' => 'RAM', 'price' => 200, 'categoryId' => 2),
  array('name' => 'HDD', 'price' => 800, 'categoryId' => 2),
  array('name' => 'Main', 'price' => 800, 'categoryId' => 4),
  array('name' => 'Keyboard', 'price' => 400, 'categoryId' => 4),
  array('name' => 'Mouse', 'price' => 600, 'categoryId' => 3),
  array('name' => 'VGA', 'price' => 600, 'categoryId' => 2),
  array('name' => 'Monitor', 'price' => 200, 'categoryId' => 1),
  array('name' => 'Case', 'price' => 800, 'categoryId' => 4)
);

function sortByCategoryName($listProduct, $listCategory)
{
  $categoryMap = array();
  // Tạo bảng ánh xạ từ tên danh mục sang danh mục tương ứng
  foreach ($listCategory as $category) {
    $categoryMap[$category['id']] = $category['name'];
  }
  // Sắp xếp danh sách sản phẩm theo tên danh mục bằng thuật toán sắp xếp chèn
  for ($i = 1; $i < count($listProduct); $i++) {
    $j = $i;
    while ($j > 0 && strcmp(strtolower($categoryMap[$listProduct[$j]['categoryId']]), strtolower($categoryMap[$listProduct[$j - 1]['categoryId']])) < 0) {
      // Hoán đổi vị trí của hai phần tử
      $temp = $listProduct[$j];
      $listProduct[$j] = $listProduct[$j - 1];
      $listProduct[$j - 1] = $temp;
      $j--;
    }
  }
  // Thêm tên danh mục vào mỗi phần tử của danh sách sản phẩm
  foreach ($listProduct as &$product) {
    $categoryId = $product['categoryId'];
    $categoryName = $categoryMap[$categoryId];
    $product['categoryName'] = $categoryName;
  }
  return $listProduct;
}

// Sử dụng hàm sortByCategoryName() để sắp xếp danh sách sản phẩm và in kết quả
$sortedListProduct = sortByCategoryName($listProduct, $listCategory);
foreach ($sortedListProduct as $product) {
  echo '<div>';
  echo '<h3>' . $product['name'] . ': ' . $product['categoryName'] . '</h3>';
  echo '</div>';
}
