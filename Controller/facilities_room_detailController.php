<?php

// receive nơi nhận dự liệu người dùng và tương tác với database 
function add_facilities() {
    if (isset($_POST['kquap']) && $_POST['kquap']) {
        $mo_ta = $_POST['mota'];
        $tieu_de = $_POST['tieude'];
        $file_path = "../Uploads/";
        $target_file = $file_path . basename($_FILES['img']['name']);
        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
            
        } else {
            
        }
        insert_facilities($target_file, $tieu_de, $mo_ta);
    }
}

function list_facilities() {
    $trave = select_facilities();
    return $trave;
}

function delete_f() {
    if (isset($_GET['ma_f']) && $_GET['ma_f']) {
        delete_facilities($_GET['ma_f']);
    }
}

function sua_facilities() {
    if (isset($_GET['ma_f']) && $_GET['ma_f'] > 0) {
        $type_room = get_facilities($_GET['ma_f']);
//        var_dump($type_room);
        return $type_room;
    }
}

function update_f() {
    if (isset($_POST['capnhat']) && $_POST["capnhat"]) {
        $mo_ta = $_POST['mota'];
        $tieu_de = $_POST['tieude'];
        $id_type_room = $_POST['id_room'];
        $idss = $_POST['id_facilities'];
        update_facilities($tieu_de, $mo_ta, $id_type_room, $idss);
    }
}

function pay() {
    if (isset($_POST['money']) && $_POST['money']) {
//        $tong_tien = tongdonhang();
//        $ledas = $_SESSION['detail_room'];
//        $count = count($ledas);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $address = $_POST['address'];
        $adults = $_POST['adults'];
        $price = $_POST['price'];
        $childrens = $_POST['childrens'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
        $row = insert_rooms_user($name, $email, $sdt, $address, $adults, $childrens, $price, $check_in, $check_out);
        foreach ($_SESSION['detail_room'] as $item) {
            $room = $item['6'];
            $price = $item['3'];
            insert_room_detail($row, $room, $price);
        }
//        $_SESSION['detail_room']=[];
//                 $check_room= 
        // phải insert tách 2 bảng ra thôi chứ không thể sử dụng phường thức này được nữa rồi 
    }
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

