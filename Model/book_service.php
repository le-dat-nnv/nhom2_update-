<?php
function insert_book_service($name_service, $name, $sdt, $email, $address, $price, $status) {
    $sql = "INSERT INTO `nhom2_duan1`.`book_service` (`name_service`, `name_kh`, `email`, `sdt`, `address`, `price`, `status`) VALUES ('$name_service', '$name', '$email', '$sdt', '$address', '$price', '$status')";
    get_db($sql);
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function list_book_service() {
    $sql = "select * from `nhom2_duan1`.`book_service` order by id";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}
function delete_bs_sers($ma_code) {
    $sql = "delete from `nhom2_duan1`.`book_service` where id=" . $ma_code;
    get_db($sql);
}
function get_book_service($ma_hh) {
    $sql = "select * from `nhom2_duan1`.`book_service` where `id`=" . $ma_hh;
    $sp = get_select_one($sql);
    return $sp;
}
function update_bs_ser($name_service, $name, $sdt, $email, $address, $price, $status , $id) {
    $sql="UPDATE `nhom2_duan1`.`book_service` SET `name_service` = '" .$name_service ."', `name_kh` = '".$name."', `email` = '".$email."', `sdt` = '".$sdt."', `address` = '".$address."', `price` = '".$price."', `status` = '".$status."' WHERE id=" .$id;
//    var_dump($sql);
     get_db($sql);
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

