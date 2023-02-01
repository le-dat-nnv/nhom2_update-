<?php

function insert_slide($name_service, $name, $sdt) {
    $sql = " INSERT INTO `nhom2_duan1`.`slide_show`(`name`, `image`, `des`) VALUES ('$name_service','$name','$sdt')";
    get_db($sql);
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function list_slide() {
    $sql = "select * from `nhom2_duan1`.`slide_show` order by id";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function delete_slide($ma_code) {
    $sql = "delete from `nhom2_duan1`.`slide_show` where id=" . $ma_code;
    get_db($sql);
}

function get_slide($ma_hh) {
    $sql = "select * from `nhom2_duan1`.`slide_show` where `id`=" . $ma_hh;
    $sp = get_select_one($sql);
    return $sp;
}

function update_slide($name_service, $name, $sdt, $id) {
    $sql = "UPDATE `nhom2_duan1`.`slide_show` SET `name`='$name_service',`image`='$name',`des`='$sdt' WHERE id=" . $id;
    get_db($sql);
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

