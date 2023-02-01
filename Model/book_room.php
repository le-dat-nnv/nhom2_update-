<?php

function insert_rooms($name_room, $ma_type, $name, $sdt, $email, $address, $adult, $children, $check_in, $check_out, $price) {
    $sql = "INSERT INTO `nhom2_duan1`.`book_room`(`ma_phong`, `name_kh`, `email`, `sdt`, `address`, `sl_adult`, `al_children`, `price`, `booking_date`, `check_out_date`, `lk_with_room`) VALUES ('$name_room','$ma_type','$name','$sdt','$email','$address','$adult','$children','$check_in','$check_out','$price')";
    get_db($sql);
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function insert__detail_room($name_room, $name_room1) {
    $sql = "INSERT INTO `nhom2_duan1`.`detail_booking_room`(`id_room`, `id_booking`) VALUES ('$name_room','$name_room1')";
    get_db($sql);
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function insert_rooms_user($name_room, $ma_type, $name, $address, $adult, $children, $check_in, $check_out, $price) {
    $sql = "INSERT INTO `nhom2_duan1`.`book_room`(`name_kh`, `email`, `sdt`, `address`, `sl_adult`, `al_children`, `price`, `booking_date`, `check_out_date`) VALUES ('$name_room', '$ma_type', '$name','$address', '$adult', '$children', '$check_in', '$check_out', '$price')";
    $tk = get_db_last_return($sql);
    return $tk;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function insert_room_detail($name_room, $ma_type, $name) {
    $sql = "INSERT INTO `nhom2_duan1`.`detail_room`(`id_booking`, `id_room`, `price`) VALUES ('$name_room','$ma_type','$name')";
    get_db($sql);
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function cart_room() {
    $sql = "select * from `nhom2_duan1`.`book_room` INNER JOIN `nhom2_duan1`.detail_room ON `nhom2_duan1`.detail_room.id_booking=`nhom2_duan1`.book_room.ma_phong ORDER BY id_booking DESC LIMIT 0,1";
    $get = get_select_one($sql);
    return $get;
}

function check_date($id, $check_in, $check_out) {
    $sql = "SELECT *  FROM `nhom2_duan1`.book_room INNER JOIN `nhom2_duan1`.detail_room ON `nhom2_duan1`.detail_room.id_booking= `nhom2_duan1`.book_room.ma_phong WHERE `nhom2_duan1`.detail_room.id_room NOT IN ( SELECT `nhom2_duan1`.detail_room.id_room FROM `nhom2_duan1`.detail_room WHERE booking_date<='$check_in' AND check_out_date >='$check_out') AND nhom2_duan1.detail_room.id_room=" . $id;
    $get_in = get_select_one($sql);
    var_dump($get_in);
    return $get_in;
}

function list_room($id) {
    $sql = "select * from `nhom2_duan1`.`detail_room` INNER JOIN `nhom2_duan1`.room ON `nhom2_duan1`.detail_room.id_room=`nhom2_duan1`.room.id_room INNER JOIN `nhom2_duan1`.book_room ON `nhom2_duan1`.detail_room.id_booking=`nhom2_duan1`.book_room.ma_phong where id_booking=" . $id;
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function list_room1() {
    $sql = "select * from `nhom2_duan1`.`book_room`";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}


function vochur_list() {
    $sql = "select * from `nhom2_duan1`.`coupon`";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}
function list_room2() {
    $sql = "select * from `nhom2_duan1`.`detail_room` INNER JOIN `nhom2_duan1`.room ON `nhom2_duan1`.detail_room.id_room=`nhom2_duan1`.room.id_room INNER JOIN `nhom2_duan1`.book_room ON `nhom2_duan1`.detail_room.id_booking=`nhom2_duan1`.book_room.ma_phong";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function list_room_one($id) {
    $sql = "select * from `nhom2_duan1`.`book_room` where ma_phong=" . $id;
    $get = get_select_one($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function delete_room($ma_code) {
    $sql = "delete from `nhom2_duan1`.`book_room` where ma_phong=" . $ma_code;
    get_db($sql);
}

function check($id) {
    $sql = "SELECT *  FROM `nhom2_duan1`.book_room INNER JOIN `nhom2_duan1`.detail_room ON `nhom2_duan1`.detail_room.id_booking= `nhom2_duan1`.book_room.ma_phong WHERE detail_room.id_room=" . $id;
//                    $sql = "SELECT * FROM `nhom2_duan1`.detail_room INNER JOIN `nhom2_duan1`.book_room ON `nhom2_duan1`.detail_room.id_booking= `nhom2_duan1`.book_room.ma_phong INNER JOIN `nhom2_duan1`.room ON `nhom2_duan1`.detail_room.id_room= `nhom2_duan1`.room.id_room WHERE `nhom2_duan1`.room.id_room NOT IN ( SELECT DISTINCT `nhom2_duan1`.room.id_room FROM `nhom2_duan1`.detail_room WHERE booking_date<='$check_in' AND check_out_date >='$check_out') AND room.id_room=" . $id;
    $get_in = get_select($sql);
    return $get_in;
}

function informatin_cart_new($id) {
    $sql = "select * from `nhom2_duan1`.`detail_room` INNER JOIN `nhom2_duan1`.room ON `nhom2_duan1`.detail_room.id_room=`nhom2_duan1`.room.id_room INNER JOIN `nhom2_duan1`.book_room ON `nhom2_duan1`.detail_room.id_booking=`nhom2_duan1`.book_room.ma_phong WHERE detail_room.id_booking=" . $id;
    $get = get_select($sql);
    return $get;
}

function delete_room_booked($id) {
    $sql = "DELETE FROM `nhom2_duan1`.`detail_room` WHERE detail_room.id_booking=" . $id;
    get_db($sql);
}

function huy_room( $status , $id_booking) {
    $sql = "UPDATE `nhom2_duan1`.`book_room` SET `status`='$status' WHERE ma_phong=".$id_booking;
    get_db($sql);
}

function infor($id) {
    $sql = "SELECT * FROM nhom2_duan1.room INNER JOIN nhom2_duan1.type_room ON nhom2_duan1.room.id_type_rooms=nhom2_duan1.type_room.id_type_rooms where room.id_type_rooms=" . $id;
    $tv = get_select_one($sql);
    return $tv;
}

function facilities_room($id) {
    $sql = "SELECT * FROM nhom2_duan1.lk_facilities_room INNER JOIN nhom2_duan1.room ON nhom2_duan1.room.id_room = nhom2_duan1.lk_facilities_room.id_room INNER JOIN nhom2_duan1.facilities ON nhom2_duan1.facilities.id = nhom2_duan1.lk_facilities_room.d_facilities WHERE nhom2_duan1.room.id_room=" . $id;
    $tv = get_select($sql);
    return $tv;
}

function get_detail_room($id) {
    $sql = "SELECT * FROM nhom2_duan1.detail_room INNER JOIN nhom2_duan1.book_room ON nhom2_duan1.book_room.ma_phong=nhom2_duan1.detail_room.id_booking INNER JOIN nhom2_duan1.room ON nhom2_duan1.detail_room.id_room=nhom2_duan1.room.id_room WHERE nhom2_duan1.detail_room.id_booking=" . $id;
    $tv = get_select_one($sql);
    return $tv;
}

function get_room($id) {
    $sql = "SELECT * FROM nhom2_duan1.room INNER JOIN nhom2_duan1.type_room ON nhom2_duan1.room.id_type_rooms=nhom2_duan1.type_room.id_type_rooms INNER JOIN nhom2_duan1.detail_room ON nhom2_duan1.room.id_room=nhom2_duan1.detail_room.id_room WHERE detail_room.id_booking= " . $id;
    $tv = get_select($sql);
    return $tv;
}

function get_book_s($ma_phong) {
    $sql = "select * from `nhom2_duan1`.`book_room` where `ma_phong`=" . $ma_phong;
    $sp = get_select_one($sql);
    return $sp;
}

function update_rooms($name_room, $ma_type, $name, $sdt, $email, $address, $adult, $children, $check_in,$statue, $id) {
    $sql = "UPDATE `nhom2_duan1`.`book_room` SET `name_kh`='$name_room',`email`='$ma_type',`sdt`='$name',`address`='$sdt',`sl_adult`='$email',`al_children`='$address',`price`='$adult',`booking_date`='$children',`check_out_date`='$check_in' ,`status`='$statue' WHERE ma_phong=".$id;
    get_db($sql);
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function check_room_booked() {
    $sql = "SELECT * FROM `nhom2_duan1`.`detail_room` INNER JOIN nhom2_duan1.book_room ON nhom2_duan1.book_room.ma_phong = nhom2_duan1.detail_room.id_booking";
    $kjsd = get_select($sql);
//    var_dump($kjsd);
    return $kjsd;
}

function check_trung_room($id) {
    $location =-1;
    for($i=0 ; $i< sizeof($_SESSION['detail_room']) ; $i++) {
        if($_SESSION['detail_room'][$i]['6']==$id){
//            $location+=$i;
            echo "le huy dat";
//            unset($_SESSION['detail_room']['6']);
        }
    }
    return $location;
}

function insert_coupon($yk1 , $tk2) {
    $sql = "INSERT INTO `nhom2_duan1`.`coupon`(`coupon_code`, `discount`) VALUES ('$yk1','$tk2')";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}
function delete_room_detail($ma_code) {
    $sql = "delete from `nhom2_duan1`.`detail_room` where id_booking=" . $ma_code;
    get_db($sql);
}
//}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

