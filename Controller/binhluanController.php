<?php

function add_binhluan() {
    if (isset($_POST['kqua']) && $_POST['kqua']) {
        $noidung = $_POST['noidung'];
        $ma_hh = $_POST['ma_hh'];
        $ngay_bl = date('h:i:sa d/m/Y');
        insert_binhluan($ma_hh, $noidung, $ngay_bl);
    }
}

function list_binhluan() {
    $get_data = select_binhluan();
    return $get_data;
}
function list_binhluan_user() {
    $get_data = select_binhluan_user();
    return $get_data;
}

function binhluan_sua() {
    if (isset($_GET['ma_p']) && $_GET['ma_p'] > 0) {
        $type_room = get_binhluan_one($_GET['ma_p']);
        return $type_room;
    }
}

function binhluan_update() {
    if (isset($_POST['capnhat']) && $_POST["capnhat"]) {
        $ma_loai = $_POST['id'];
        $ten_loai = $_POST['name_room'];
        $mo_ta = $_POST['name'];
        $don_gia = $_POST['email'];
        $sl_person = $_POST['sdt'];
        update_binhluan($ten_loai, $mo_ta, $don_gia, $sl_person, $ma_loai);
    }
}

function binhluan_delete() {
    if (isset($_GET['ma_p']) && $_GET['ma_p']) {
        delete_binhluan($_GET['ma_p']);
    }
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

