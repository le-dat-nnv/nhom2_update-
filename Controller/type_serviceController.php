<?php
// receive nơi nhận dự liệu người dùng và tương tác với database 
function add_service() {
    if(isset($_POST['kqua']) && $_POST['kqua']) {
        $service_name = $_POST['service_name'];
        insert_service($service_name);
    }
}
function get_service() {
    $trave = select_service();
    return $trave;
}
function sua_service() {
    if (isset($_GET['ma_s']) && $_GET['ma_s'] > 0) {
        $service = get_service_s($_GET['ma_s']);
//        var_dump($type_room);
        return $service;
    }
}

function update_s() {
    if (isset($_POST['capnhat']) && $_POST["capnhat"]) {
        $ma_loai = $_POST['ma_dv'];
        $ten_loai = $_POST['ten_dv'];
        $mo_ta = $_POST['mo_ta'];
        update_service($ma_loai, $ten_loai,$mo_ta);
    }
}

function delete_s() {
    if (isset($_GET['ma_s']) && $_GET['ma_s']) {
        delete_service($_GET['ma_s']);
    }
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

