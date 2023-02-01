<?php

function insert_facilities($icon , $tieu_de, $mo_ta) {
    $sql = "INSERT INTO `nhom2_duan1`.`facilities` ( `icon`,`tieu_de`, `mo_ta`) VALUES ('$icon',' $tieu_de', '$mo_ta')";
    get_db($sql);
//    var_dump($sql);
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function select_facilities() {
    $sql = "select * from `nhom2_duan1`.`facilities` order by id";
    $get = get_select($sql);
//    var_dump($get);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}
//
function delete_facilities($ma_code) {
    $sql = "delete from `nhom2_duan1`.`facilities` where id=" . $ma_code;
    get_db($sql);
}
function get_facilities($ma_hh) {
    $sql = "select * from `nhom2_duan1`.`facilities` where `id`=" . $ma_hh;
    $sp = get_select_one($sql);
    return $sp;
}
function update_facilities($ten_loai , $mo_ta , $ma_loai, $id ) {
    $sql = 'UPDATE `nhom2_duan1`.`facilities` SET tieu_de=" ' . $ten_loai . '" , mo_ta=" ' . $mo_ta . '" , id_room=" ' . $ma_loai . '" WHERE id=' . $id;
//    var_dump($sql);
    get_db($sql);
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

