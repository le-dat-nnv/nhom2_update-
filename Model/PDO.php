<?php

function get_connect() {
    $host = "localhost";// MẶC ĐỊNH 
    $db_name = "nhom2.duan1"; // TÊN DATABASE CỦA WEB
    $username = "root"; // ROOT MẶC ĐỊNH 
    $pass = ""; // MẬT KHẨU TRỐNG 
    $connect = new PDO("mysql:host;db_name=$db_name", $username, $pass); // PHƯƠNG THỨC KẾT NỐI in pdo
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// chế độ báo lỗi
    return $connect;
}

// thực hiện chức năng thêm , update , xóa
function get_db($sql) {
    $query = array();
    $connect = get_connect();
    $tv = $connect->prepare($sql);
    $tv->execute($query);
}

function get_db_last_return($sql) {
    $query = array();
    $connect = get_connect();
    $tv = $connect->prepare($sql);
    $tv->execute($query);
    return $connect->lastInsertId();
}

function get_select($sql) {
    $query = array();
    $connect = get_connect();
    $tv = $connect->prepare($sql);
    $tv->execute($query);
    $row = $tv->fetchAll();
    return $row;
}

function get_select_one($sql) {
    $query = array();
    $connect = get_connect();
    $tv = $connect->prepare($sql);
    $tv->execute($query);
    $row = $tv->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function get_db_delete($sql) {
    $query = array();
    $connect = get_connect();
    $tv = $connect->prepare($sql);
    $tv->execute($query);
    return $tv;
}
// thực hiện chức năng thêm , update , xóa
// thực hiện chức năng thêm , update , xóa

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

