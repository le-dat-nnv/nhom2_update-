<?php
function insert_event($ten_event, $name, $email, $sdt, $address, $total_price, $ma_dv, $check_in, $check_out) {
    $sql = "INSERT INTO `nhom2_duan1`.`book_event` (`ten_event`, `name`, `email`, `sdt`, `address`, `total_price`, `ma_dv`, `booking_date`, `check_out_date`) VALUES ('$ten_event', '$name', '$email', '$sdt', '$address', '$total_price', '$ma_dv', '$check_in', '$check_out')";
    get_db($sql);
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function select_event() {
    $sql = "select * from `nhom2_duan1`.`book_event` order by ma_event";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

