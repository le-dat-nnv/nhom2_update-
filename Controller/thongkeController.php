<?php

// receive nơi nhận dự liệu người dùng và tương tác với database 
function add_thongke() {
    if (isset($_POST['kqua']) && $_POST['kqua']) {
        $name = $_POST['name_room'];
        $price = $_POST['price'];
        $des = $_POST['des'];
        $person = $_POST['person'];
        $file_path = "../Uploads/";
        $target_file = $file_path . basename($_FILES['img']['name']);
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
            
        } else {
            
        }
        insert_room_p($name, $des, $price, $person, $target_file);
    }
}

function show_thongke() {
    $get_data = get_information();
    return $get_data;
}
function sua_thongke() {
    if (isset($_GET['ma_p']) && $_GET['ma_p'] > 0) {
        $type_room = get_type_room_p($_GET['ma_p']);
        return $type_room;
    }
}
function update_thongkes() {
    if (isset($_POST['capnhat']) && $_POST["capnhat"]) {
        $ma_loai = $_POST['id'];
        $ten_loai = $_POST['name_room'];
        $mo_ta = $_POST['name'];
        $don_gia = $_POST['email'];
        $sl_person = $_POST['sdt'];
        update_type_room_p( $ten_loai, $mo_ta, $don_gia, $sl_person,$ma_loai);
    }
}
function delete_thongke() {
    if (isset($_GET['ma_p']) && $_GET['ma_p']) {
        delete_type_room_p($_GET['ma_p']);
    }
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

