<?php
function insert_service($name_service ) {
    $sql = "INSERT INTO `nhom2_duan1`.`type_service` (`ten_dv`) VALUES ('$name_service')";
    get_db($sql);
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function select_service() {
    $sql = "select * from `nhom2_duan1`.`type_service` order by ma_dv";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}
function get_service_s($ma_hh) {
    $sql = "select * from `nhom2_duan1`.`type_service` where `ma_dv`=" . $ma_hh;
    $sp = get_select_one($sql);
    return $sp;
}
function update_service($ma_loai, $ten_loai , $des ) {
    $sql = 'UPDATE `nhom2_duan1`.`type_service` SET ten_dv=" ' . $ten_loai . '" , mo_ta=" ' . $des . '"  WHERE ma_dv=' . $ma_loai;
    get_db($sql);
}
function delete_service($ma_code) {
    $sql = "delete from `nhom2_duan1`.`type_service` where ma_dv=" . $ma_code;
    get_db($sql);
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

