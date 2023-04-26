<?php
//sd de quy
function calMonth($money, $rate, $months = 0)
{
    // Nếu tiền gốc + lãi tăng gấp đôi, trả về số tháng cần thiết
    if ($money * 2 <= $money * pow(1 + $rate / 100, $months)) {
        return $months;
    }
    // Nếu tiền gốc + lãi chưa đủ tăng gấp đôi, đệ qui gọi lại hàm với số tháng tăng lên 1
    return calMonth($money, $rate, $months + 1);
}

// Sử dụng hàm calMonth để tính số tháng cần gửi tiết kiệm
$months = calMonth(1000, 5);
echo "Số tháng cần gửi tiết kiệm để tiền gốc + lãi tăng gấp đôi là: " . $months;

//ko sd de quy

function calMonths($money, $rate)
{
    $months = 0;
    $totalMoney = $money;
    // Tính số tháng cần thiết để tiền gốc + lãi tăng gấp đôi
    while ($totalMoney < $money * 2) {
        $totalMoney += $totalMoney * $rate / 100;
        $months++;
    }
    return $months;
}

// Sử dụng hàm calMonth để tính số tháng cần gửi tiết kiệm
$months = calMonth(1000, 5);
echo "Số tháng cần gửi tiết kiệm để tiền gốc + lãi tăng gấp đôi là: " . $months;
