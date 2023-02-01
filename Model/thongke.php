<?php
function insert_thongke($name_room, $ma_type, $name, $sdt, $email, $address, $adult, $children, $price, $check_in, $check_out) {
    $sql = "INSERT INTO `nhom2_duan1`.`book_room` (`ten_phong`, `code_room`, `name_kh`, `email`, `sdt`, `address`, `sl_adult`, `al_children`, `price`, `booking_date`, `check_out_date`) VALUES ('$name_room', '$ma_type', '$name', '$email', '$sdt', '$address', '$adult', '$children', '$price', '$check_in', '$check_out')";
    get_db($sql);
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function list_thongke() {
    $sql = "select * from `nhom2_duan1`.`book_room` order by ma_phong";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}
function delete_thongk($ma_code) {
    $sql = "delete from `nhom2_duan1`.`book_room` where ma_phong=" . $ma_code;
    get_db($sql);
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

