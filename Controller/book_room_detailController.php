<?php

// receive nơi nhận dự liệu người dùng và tương tác với database 
function add_servicesss() {
    if ($_POST['kqua'] && $_POST['kqua']) {
        $ma_lphong = $_POST['ma_room'];
        $ma_phong = $_POST['ma_phòng'];
        $price = $_POST['price'];
        $adults = $_POST['adult'];
        $childrens = $_POST['children'];
        insert_detail($ma_lphong, $ma_phong, $price, $adult, $children);
    }
}

function list_detail() {
    $trave = select_detail();
    return $trave;
}

function list_detail_book() {
    $trave = select_detail_book();
    return $trave;
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

