<?php

// receive nơi nhận dự liệu người dùng và tương tác với database 
function add_type_room() {
    if (isset($_POST['kqua']) && $_POST['kqua']) {
        $name = $_POST['name_type_room'];
        $des = $_POST['des'];
//        for($i = 0; $i<2; $i++) {
           insert_room($name, $des);
//        }
//        return $i;
    }
}

function show_room() {
    $get_data = select_room();
    return $get_data;
}

function detail_type_room() {
    if (isset($_POST['list_p']) && $_POST['list_p']) {
        $ma_room = $_POST['ma_room'];
        $one_type_room = list_room_detail($ma_room);
//        var_dump($one_type_room);
        return $one_type_room;
    }
}

function ghang() {
    if (isset($_POST['vnd']) && $_POST['vnd']) {
        $price = $_POST['price'];
        $sl_room = $_POST['sl_room'];
        $ttien = $sl_room * $price;
        var_dump($ttien);
        return $ttien;
    }
}

function sua_type_room() {
    if (isset($_GET['ma_r']) && $_GET['ma_r'] > 0) {
        $type_room = get_type_room($_GET['ma_r']);
//        var_dump($type_room);
        return $type_room;
    }
}

function update() {
    if (isset($_POST['capnhat']) && $_POST["capnhat"]) {
        $ma_loai = $_POST['code_room'];
        $ten_loai = $_POST['name_room'];
        $mo_ta = $_POST['des'];
        update_type_room($ma_loai, $ten_loai, $mo_ta);
    }
}

function delete() {
    if (isset($_GET['ma_r']) && $_GET['ma_r']) {
        delete_type_room($_GET['ma_r']);
    }
}

//function kiem_tra() {
//    if (isset($_GET['id']) && $_GET['id']) {
//        $branchecked = [];
//        $branchecked = $_GET['id'];
//        foreach ($branchecked as $rowbrand) {
//            $products_run = select_room_all($rowbrand);
//            foreach ($products_run as $proditems) :
                

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

