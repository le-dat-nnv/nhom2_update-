<?php
// receive nơi nhận dự liệu người dùng và tương tác với database 
function add_event() {
    if ($_POST['kqua'] && $_POST['kqua']) {
        $ma_event = $_POST['name_room'];
        $ten_event = $_POST['ma_type'];
        $name_kh = $_POST['name'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $address = $_POST['address'];
        $total_price = $_POST['adults'];
        $ma_dv = $_POST['childrens'];
        $check_in = $_POST['check_in'];
        $check_out = $_POST['check_out'];
        insert_event($ten_event, $name_kh, $email, $sdt, $address, $total_price, $ma_dv, $check_in, $check_out);
    }
}
function list_event() {
    $trave = select_event();
    return $trave;
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

