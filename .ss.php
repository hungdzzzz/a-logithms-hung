<?php



$mang = array(750, 120, 120, 60, 25, 9,400,70,50); // mảng theo đề bài
  
$sophantu  = count($mang); // hoặc dùng hàm $sophantu = count($mang);
  
// Sắp xếp mảng
for ($i = 0; $i < ($sophantu - 1); $i++)
{
    for ($j = $i + 1; $j < $sophantu; $j++) // lặp các phần tử phía sau
    {
        if ($mang[$i] > $mang[$j]) // nếu phần tử $i bé hơn phần tử phía sau
        {
            // hoán vị
            $tmp = $mang[$j];
            $mang[$j] = $mang[$i];
            $mang[$i] = $tmp;
        }
    }
}
  
// Hiển thị các phần tử của mảng đã sắp xếp
for ($i = 0; $i < $sophantu; $i++){
    echo $mang[$i] . ' ';
}
?>