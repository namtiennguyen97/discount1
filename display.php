<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $product = $_POST['product'];
    $list = $_POST['list'];
    $percent = $_POST['percent'];
    $discountCalculate = $product*($list * $percent *0.1);
    echo 'So luong san pham la: '.$product."<br>";
    echo 'Danh sach: '.$list."<br>";
    echo 'So phan tram gim gia la: '.$percent."<br>";
    echo 'Tong gia tien: '.$discountCalculate;

}