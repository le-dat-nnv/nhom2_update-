<?php
function insert_taikhoan($email, $so_dt, $ten_tk, $pass ) {
    $sql = "INSERT INTO `nhom2_duan1`.`dangky` (`email`, `sdt`, `username`, `pass`) VALUES ('$email','$so_dt', '$ten_tk', '$pass')";
    get_db($sql);
}
function check_account($user, $pass) {
    $sql = "select * from `nhom2_duan1`.`dangky` where username='" . $user . "' AND pass=" . $pass . "";
    $ckeck = get_select_one($sql);
    return $ckeck;
}
function checkemail($email) {
    $sql = "select * from `nhom2_duan1`.`dangky` where email='".$email."'";
    $sp = get_select_one($sql);
    return $sp;
}
function select_account() {
    $sql = "select * from `nhom2_duan1`.`dangky` order by id";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}
function update_account_p( $mo_ta , $don_gia , $sl,$add ,$ma_loai,$id) {
    $sql = "UPDATE `nhom2_duan1`.`dangky` SET `email`='$mo_ta',`sdt`='$don_gia',`username`='$sl',`pass`='$add',`role`='$ma_loai' WHERE id=".$id;
    get_db($sql);
}
function delete_account_p($ma_code) {
    $sql = "delete from `nhom2_duan1`.`dangky` where id=" . $ma_code;
    get_db($sql);
}
function get_account_one($ma_hh) {
    $sql = "select * from `nhom2_duan1`.`dangky` where `id`=" . $ma_hh;
    $sp = get_select_one($sql);
    return $sp;
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

