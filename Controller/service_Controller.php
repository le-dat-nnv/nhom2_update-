<?php

// receive nơi nhận dự liệu người dùng và tương tác với database 
function service_add() {
    if (isset($_POST['guikqua']) && $_POST['guikqua']) {
        $name_service = $_POST['name_service'];
        $price = $_POST['price'];
        $dlld = $_POST['id_type_service'];
        $file_path = "../Uploads/";
        $target_file = $file_path . basename($_FILES['img']['name']);
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
            
        } else {
            
        }
        service_insert($name_service, $target_file, $price, $dlld);
        // thông minh trong cách dùng nhé vì nhiều khi lỗi ko phải ở nơi mà người khác chỉ 
    }
}

function service_ct_list() {
    $list = get_information_service();
    return $list;
}

function sua_ct_service() {
    if (isset($_GET['ma_serv']) && $_GET['ma_serv'] > 0) {
        $type_room = service_get_s($_GET['ma_serv']);
//        var_dump($type_room);
        return $type_room;
    }
}

function update_ct_service() {
    if (isset($_POST['capnhat']) && $_POST["capnhat"]) {
        $id = $_POST['id'];
        $name_service = $_POST['name_service'];
        $tieu_de = $_POST['tieu_de'];
        $mo_ta = $_POST['mo_ta'];
        $price = $_POST['price'];
        $id_service = $_POST['id_service'];
        service_update($name_service, $tieu_de, $mo_ta, $price, $id_service , $id);
    }
}

function delete_ct_service() {
    if (isset($_GET['ma_ser']) && $_GET['ma_ser']) {
        service_delete($_GET['ma_ser']);
    }
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

