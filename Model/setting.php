<?php

//function insert_service($name_service, $icon, $ma_phong) {
//    $sql = "INSERT INTO `nhom2_duan1`.`service` (`ten_dv`, `icon`, `ma_phong`) VALUES ('$name_service', '$icon', '$ma_phong')";
//    get_db($sql);
//    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
//}

function select_setting() {
    $sql = "select * from `nhom2_duan1`.`setting` order by id";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function setting_get_s($ma_hh) {
    $sql = "select * from `nhom2_duan1`.`setting` where `id`=" . $ma_hh;
    $sp = get_select_one($sql);
//    var_dump($sp);
    return $sp;
}

function setting_update($name_service, $name, $email, $address, $price, $status) {
    $sql = "UPDATE `setting` SET `url_website`='$name_service',`email`='$name',`address`='$email',`sdt`='$address',`icon`='$price' WHERE id=" . $status;
//    var_dump($sql);
    get_db($sql);
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

