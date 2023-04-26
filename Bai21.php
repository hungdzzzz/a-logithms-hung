<?php
//ko su dung de quy
function calSalary($salary, $n) {
    for ($i = 0; $i < $n; $i++) {
        $salary *= 1.1;
    }
    return $salary;
};
$salaryOfN = calSalary(1000, 5);
echo "Lương của năm thứ 5 là: " . $salaryOfN;

// //su dung de quy
 function calSalarys($salary, $n) {
     if ($n == 1) {
        return $salary;
    } else {
        return calSalary($salary*1.1, $n-1);
    }
};
$salaryOsfN = calSalary(1000, 5);
echo "Lương của năm thứ 5 là: " . $salaryOsfN;
// 
