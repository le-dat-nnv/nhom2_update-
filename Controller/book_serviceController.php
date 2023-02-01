<?php
// receive nơi nhận dự liệu người dùng và tương tác với database 
function add_book_service() {
    if (isset($_POST['guikqua']) && $_POST['guikqua']) {
        $name_service = $_POST['name_room'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $address = $_POST['address'];
        $total_price = $_POST['price'];
        $status = $_POST['status'];
        // thông minh trong cách dùng nhé vì nhiều khi lỗi ko phải ở nơi mà người khác chỉ 
        insert_book_service($name_service, $name, $sdt, $email, $address, $total_price, $status);
    }
}
function list_service() {
    $list = list_book_service();
    return $list;
}
function sua_book_service() {
    if (isset($_GET['ma_ser']) && $_GET['ma_ser'] > 0) {
        $type_room = get_book_service($_GET['ma_ser']);
//        var_dump($type_room);
        return $type_room;
    }
}
function update_book_service() {
    if (isset($_POST['capnhat']) && $_POST["capnhat"]) {
        $id = $_POST['id'];
        $name_service = $_POST['name_room'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $address = $_POST['address'];
        $total_price = $_POST['price'];
        $status = $_POST['status'];
        update_bs_ser( $name_service, $name, $sdt, $email, $address, $total_price, $status ,$id);
    }
}
function delete_book_service() {
    if (isset($_GET['ma_ser']) && $_GET['ma_ser']) {
        delete_bs_sers($_GET['ma_ser']);
    }
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

