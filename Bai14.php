<?php

function mapProductByCategory($listProduct, $listCategory) {
  //Tao mang rong
  $categoryMap = array();
    // Tạo một mảng để lưu trữ tên của các danh mục theo id
    foreach ($listCategory as $category) {
      $categoryMap[$category['id']] = $category['name'];
    }
    //Tao mang rong
    $result = array();
    // Thêm sản phẩm vào mảng kết quả theo tên danh mục tương ứng
    foreach ($listProduct as $product) {
      $categoryId = $product['categoryId'];
      $categoryName = $categoryMap[$categoryId];
      $result[$categoryName][] = $product;
    }
    return $result;
  }
    $listCategory = array(
        array('id' => 1, 'name' => 'Computer', ),
        array('id' => 2, 'name' => 'Card', ),
        array('id' => 3, 'name' => 'Memory', ),
        array('id' => 4, 'name' => 'Acsesory', )
    );
    
    $listProduct = array(
      array('name' => 'CPU', 'price' => 400, 'categoryId' => 1),
      array('name' => 'RAM', 'price' => 200, 'categoryId' => 2),
      array('name' => 'HDD', 'price' => 800, 'categoryId' => 2),
      array('name' => 'Main', 'price' => 800, 'categoryId' => 4),
      array('name' => 'Keyboard', 'price' => 400, 'categoryId' => 4),
      array('name' => 'Mouse', 'price' => 600, 'categoryId' => 3),
      array('name' => 'VGA', 'price' => 600, 'categoryId' => 2),
      array('name' => 'Monitor', 'price' => 200, 'categoryId' => 1),
      array('name' => 'Case', 'price' => 800, 'categoryId' => 4)
    );
    $result = mapProductByCategory($listProduct, $listCategory);
 // Duyệt qua mảng kết quả và hiển thị thông tin sản phẩm
    foreach ($result as $categoryName => $products) {
      echo "<h2>$categoryName</h2>";
      echo "<ul>";
      foreach ($products as $product) {
        echo "<li>{$product['name']} ";
      }
      echo "</ul>";
    }

?>