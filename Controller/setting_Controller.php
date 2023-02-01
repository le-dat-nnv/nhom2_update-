<?php

// receive nơi nhận dự liệu người dùng và tương tác với database 
//function add_setting() {
//    if (isset($_POST['enroll']) && $_POST['enroll']) {
//        $email = $_POST['email'];
//        $name = $_POST['name'];
//        $sdt = $_POST['sdt'];
//        $pass = $_POST['pass'];
//        insert_taikhoan($email, $sdt, $name, $pass);
////        $thongbao = "đã đăng ký thành công tài khoản";
//        // thực hiên gọi hàm ở phần account trong model
//    }
//}

function setting_ct_list() {
    $list = select_setting();
    return $list;
}
function sua_csetting() {
    if (isset($_GET['ma_ser']) && $_GET['ma_ser'] > 0) {
        $type_room = setting_get_s($_GET['ma_ser']);
//        var_dump($type_room);
        return $type_room;
    }
}
function update_setting() {
    if (isset($_POST['capnhat']) && $_POST["capnhat"]) {
        $id = $_POST['id'];
        $url = $_POST['url_website'];
        $email = $_POST['email'];
        $tel = $_POST['sdt'];
        $address = $_POST['address'];
        setting_update($url, $email,$tel, $address, $id, $status);
    }
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

