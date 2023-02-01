<?php

function add_slide() {
    if (isset($_POST['kqua']) && $_POST['kqua']) {
        $name = $_POST['name'];
        $des = $_POST['des'];
        $file_path = "../Uploads/";
        $target_file = $file_path . basename($_FILES['img']['name']);
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
            
        } else {
            
        }
        insert_slide($name, $target_file, $des);
    }
}

function show_slide_sl() {
    $get_data = list_slide();
    return $get_data;
}

function sua_slide_sl() {
    if (isset($_GET['ma_p']) && $_GET['ma_p'] > 0) {
        $type_room = get_slide($_GET['ma_p']);
//        var_dump($type_room);
        return $type_room;
    }
}

function update_slide_sl() {
    if (isset($_POST['capnhat']) && $_POST['capnhat']) {
        $ma_loai = $_POST['id'];
        $ten_loai = $_POST['name_room'];
        $mo_ta = $_POST['des'];
        $file_path = "../Uploads/";
        $target_file = $file_path . basename($_FILES['img']['name']);
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
            
        } else {
            
        }
        update_slide($ten_loai, $target_file, $mo_ta, $ma_loai);
    }
}

function delete_slide_sl() {
    if (isset($_GET['ma_p']) && $_GET['ma_p']) {
        delete_slide($_GET['ma_p']);
    }
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

