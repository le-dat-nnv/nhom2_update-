<?php
function insert_binhluan($name_room,$ma_room, $ma_type) {
    $sql ="INSERT INTO `nhom2_duan1`.`binh_luan`(`noi_dung`,`ma_room`, `ngay_bl`) VALUES ('$name_room','$ma_room','$ma_type')";
    get_db($sql);
}

function select_binhluan() {
    $sql = "select * from `nhom2_duan1`.`binh_luan` order by id";
    $get = get_select($sql);
    return $get;
}
function select_binhluan_user() {
    $sql = "select * from `nhom2_duan1`.`binh_luan` limit 0,3";
    $get = get_select($sql);
    return $get;
}
function loadall_binhluan($ma_hh) {
    $sql = "select * from `nhom2_duan1`.`binh_luan` where ma_room='".$ma_hh."' order by id desc";
    $listbl = get_select($sql);
    return $listbl;
}
function update_binhluan( $mo_ta , $don_gia , $sl,$add ,$ma_loai) {
    $sql = "UPDATE `nhom2_duan1`.`binh_luan` SET `ma_rooms`='$mo_ta',`don_gia`='$don_gia',`service_id`='$sl',`id_type_rooms`='$add' WHERE id_room=" . $ma_loai;
    get_db($sql);
}
function delete_binhluan($ma_code) {
    $sql = "delete from `nhom2_duan1`.`binh_luan` where id=" . $ma_code;
    get_db($sql);
}
function get_binhluan_one($ma_hh) {
    $sql = "select * from `nhom2_duan1`.`binh_luan` where `id`=" . $ma_hh;
    $sp = get_select_one($sql);
    return $sp;
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

