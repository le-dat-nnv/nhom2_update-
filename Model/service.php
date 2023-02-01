<?php

function service_insert($name_service, $name, $sdt , $email) {
    $sql = "INSERT INTO `nhom2_duan1`.`service` ( `ten_dv`, `img_service`, `price`, `id_type_service`) VALUES ('$name_service', '$name', '$sdt', '$email')";
//    var_dump($sql);
    get_db($sql);
    
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function service_select() {
    $sql = "select * from `nhom2_duan1`.`service` order by ids";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function service_get_s($ma_hh) {
    $sql = "select * from `nhom2_duan1`.`service` where `ids`=" . $ma_hh;
    $sp = get_select_one($sql);
//    var_dump($sp);
    return $sp;
}

function service_update($name_service, $name, $email, $address, $price, $status) {
    $sql = "UPDATE `nhom2_duan1`.`service` SET `ten_dv`='$name_service',`tieu_de`='$name',`mo_ta`='$email',`price`='$address',`id_service`='$price' WHERE ma_dv=".$status;
//    var_dump($sql);
    get_db($sql);
}

function service_delete($ma_code) {
    $sql = "delete from `nhom2_duan1`.`service` where ids=" . $ma_code;
    get_db($sql);
}
function get_information_service() {
    $sql = "SELECT * FROM nhom2_duan1.service";
   $get = get_select($sql);
   return $get;
}
function thongke_servive() {
    $sql = "SELECT `nhom2_duan1`.type_service.ten_dv, COUNT(`nhom2_duan1`.service.price) AS COUNTsp , MIN(`nhom2_duan1`.room.don_gia) as minprice , MAX(`nhom2_duan1`.service.price) as maxprice , AVG(`nhom2_duan1`.service.price) FROM `nhom2_duan1`.service LEFT JOIN `nhom2_duan1`.type_service ON `nhom2_duan1`.service.id_type_service = `nhom2_duan1`.type_service.ma_dv ";
    $trave_tk_dv = get_select($sql);
    return $trave_tk_dv;
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

