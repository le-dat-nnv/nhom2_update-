<?php

// receive nơi nhận dự liệu người dùng và tương tác với database 
function add_booking() {
    if (isset($_POST['guikqua']) && $_POST['guikqua']) {
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
        foreach ($_SESSION['detail_room_admin'] as $item) {
            $room = $item['5'];
            $price = $item['3'];
            insert_room_detail($row, $room, $price);
        }
        // phải insert tách 2 bảng ra thôi chứ không thể sử dụng phường thức này được nữa rồi 
    }
//            session_unset();
    $_SESSION['detail_room_admin'] = [];
}

function update_book_room() {
    if (isset($_POST['guikqua']) && $_POST['guikqua']) {
        $name = $_POST['name'];
        $id = $_POST['id'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $address = $_POST['address'];
        $adults = $_POST['adults'];
        $price = $_POST['price'];
        $childrens = $_POST['childrens'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
        $status = $_POST['status'];
        update_rooms($name, $email, $sdt, $address, $adults, $childrens, $price, $check_in, $check_out,$status, $id);
    }
}

function add_booking_user() {
//    if (isset($_POST['money']) && $_POST['money']) {
////        $tong_tien = tongdonhang();
////        $ledas = $_SESSION['detail_room'];
////        $count = count($ledas);
//        $name = $_POST['name'];
//        $email = $_POST['email'];
//        $sdt = $_POST['sdt'];
//        $address = $_POST['address'];
//        $adults = $_POST['adults'];
//        $price = $_POST['price'];
//        $childrens = $_POST['childrens'];
//        $check_in = $_POST['check_in'];
//        $check_out = $_POST['check_out'];
//        $row = insert_rooms_user($name, $email, $sdt, $address, $adults, $childrens, $price, $check_in, $check_out);
//        foreach ($_SESSION['detail_room'] as $item) {
//            $room = $item['6'];
//            $price = $item['3'];
//            insert_room_detail($row, $room, $price);
//        }
//        // phải insert tách 2 bảng ra thôi chứ không thể sử dụng phường thức này được nữa rồi 
//    }
//    $tt = cart_room($row);
//    $_SESSION['detail_room'] = [];
}

function list_phong() {
    $list = list_room1();
    return $list;
}

function list_vochur() {
    $list = vochur_list();
    return $list;
}

function booking() {
    if (isset($_POST["book"]) && $_POST["book"]) {
        
    }
}

function delete_room_b() {
    if (isset($_GET['ma_b']) && $_GET['ma_b']) {
        delete_room($_GET['ma_b']);
    }
}


function delete_room_book_room() {
    if (isset($_GET['ma_b']) && $_GET['ma_b']) {
        delete_room_detail($_GET['ma_b']);
    }
}
//function cancel() {
//    if ($_POST['idcart']) {
//        // tiến hành hủy đơn hàng
//        // lý do thì để sau huy trước đã 
//        // tức là hình sẽ tiến hành thay đổi trang thái của nó để hủy nó đi dúng ko 
//        // = với số 3 tức là huy đơn hàng 
//        // mình sẽ phải cập nhật lại tình trạng status của đơn hàng và hình truyền cho nó tham so bằng 3 
////                thông bóa hủy đeon hàng luôn
//        // lấy id thông quan bill nhé 
//        $id_book_room = $_POST[''];
//        $status = 3;
//    }
//}

/*
     * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
     * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
     */

    