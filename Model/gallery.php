<?php
function insert_gallery( $ma_room) {
    $sql = "INSERT INTO `nhom2_duan1`.`gallery_room` (`id_rooms`) VALUES ( '$ma_room')";
    get_db($sql);
}

function select_gallery() {
    $sql = "SELECT * FROM nhom2_duan1.room";
    $get = get_select($sql);
//    var_dump($get);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}
function select_gallery1() {
    $sql = "SELECT * FROM nhom2_duan1.gallery_room INNER JOIN nhom2_duan1.room ON nhom2_duan1.gallery_room.id_rooms=nhom2_duan1.room.id_room";
    $get = get_select($sql);
//    var_dump($get);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}
function get_gallery($ma_hh) {
    $sql = "select * from `nhom2_duan1`.`gallery_room` where `id`=" . $ma_hh;
    $sp = get_select_one($sql);
    return $sp;
}
function update_gallery( $mo_ta , $ma_loai) {
    $sql = 'UPDATE `nhom2_duan1`.`gallery_room` SET id_rooms=" ' . $mo_ta . '" WHERE id=' . $ma_loai;
    get_db($sql);
}
function delete_gallery($ma_code) {
    $sql = "Delete from `nhom2_duan1`.`gallery_room` where id=" . $ma_code;
    get_db($sql);
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

