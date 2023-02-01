<?php

function add_room() {
    if (isset($_POST['kqua']) && $_POST['kqua']) {
        $name = $_POST['ma_phong'];
        $price = $_POST['don_gia'];
        $des = $_POST['id_type_room'];
        $file_path = "./Uploads/";
        $target_file = $file_path . basename($_FILES['img']['name']);
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
            
        } else {
            
        }
        insert_room_p($name, $price, $target_file, $des);
    }
}

function show_room_p() {
    $get_data = get_information();
    return $get_data;
}

function show_room_user() {
    $get_data = get_information_user();
    return $get_data;
}

function sua_type_room_p() {
    if (isset($_GET['ma_p']) && $_GET['ma_p'] > 0) {
        $type_room = get_type_room_p($_GET['ma_p']);
        return $type_room;
    }
}

function update_p() {
    if (isset($_POST['capnhat']) && $_POST["capnhat"]) {
        $ma_loai = $_POST['id'];
        $name = $_POST['ma_phong'];
        $price = $_POST['don_gia'];
        $des = $_POST['id_type_room'];
        update_type_room_p($name, $price, $des, $ma_loai);
    }
}

function delete_p() {
    if (isset($_GET['ma_p']) && $_GET['ma_p']) {
        delete_type_room_p($_GET['ma_p']);
    }
}

//function get_session() {
//    $id = $_POST['id'];
//    $name_room = $_POST['name_room'];
//    $mo_ta = $_POST['mo_ta'];
//    $ma_room = $_POST['ma_p'];
//    $price = $_POST['don_gia'];
//    $image = $_POST['img'];
//    $icon = $_POST['icon'];
//    $soluong = 1;
//    $ttien = $soluong * $price;
//    $check= $_POST['check_in'];
//    $room_add = [$name_room, $mo_ta, $ma_room, $price, $image, $icon, $id, $soluong, $ttien, $check];
//    if (!isset($_SESSION['detail_room'])) {
//        $_SESSION['detail_room'] = [];
//    }
//    if (isset($_SESSION['detail_room'])) {
//        array_push($_SESSION['detail_room'], $room_add);
//        header("location:index.php?url=add_room");
//    }
//}


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

