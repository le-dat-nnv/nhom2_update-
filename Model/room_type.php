<?php

function insert_room($name_room, $des) {
    $sql = "INSERT INTO `nhom2_duan1`.`type_room` (`name`, `mo_ta`) VALUES ('$name_room', '$des')";
    get_db($sql);
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function select_room() {
    $sql = "select * from `nhom2_duan1`.`type_room` order by id_type_rooms";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function select_room_all($id) {
    $sql = "select * from `nhom2_duan1`.`room` WHERE id_type_rooms IN ($id)";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function list_room_detail($ma_room) {
    $sql = "select * from `nhom2_duan1`.`type_room` where id_type_rooms=" . $ma_room;
    $chitiet = get_select_one($sql);
//    var_dump($chitiet);
    return $chitiet;
}

function get_type_room($ma_hh) {
    $sql = "select * from `nhom2_duan1`.`type_room` where `id_type_rooms`=" . $ma_hh;
    $sp = get_select_one($sql);
    return $sp;
}

function update_type_room($ma_loai, $ten_loai, $mo_ta) {
    $sql = 'UPDATE `nhom2_duan1`.`type_room` SET name=" ' . $ten_loai . '" , mo_ta=" ' . $mo_ta . '" WHERE id_type_rooms=' . $ma_loai;
    get_db($sql);
}

function delete_type_room($ma_code) {
    $sql = "delete from `nhom2_duan1`.`type_room` where id_type_rooms=" . $ma_code;
    get_db($sql);
}

function thongke_room() {
    $sql = "SELECT `nhom2_duan1`.type_room.id_type_rooms , `nhom2_duan1`.type_room.name, COUNT(`nhom2_duan1`.room.id_room) AS COUNTsp , MIN(`nhom2_duan1`.room.don_gia) as minprice , MAX(`nhom2_duan1`.room.don_gia) as maxprice , AVG(`nhom2_duan1`.room.don_gia) as tb FROM `nhom2_duan1`.room LEFT JOIN `nhom2_duan1`.type_room ON `nhom2_duan1`.room.id_type_rooms = `nhom2_duan1`.type_room.id_type_rooms GROUP BY type_room.id_type_rooms";
    $trave_tk = get_select($sql);
    return $trave_tk;
}

function list_sanpham01($ma_loai = 0) {
    $sql = "select * from `nhom2_duan1`.`room` where 1 ";
    if ($ma_loai > 0) {
        $sql .= " and id_type_rooms ='" . $ma_loai . "'";
    }
    $sql .= " order by id_type_rooms desc";
    $trave = get_select($sql);
//    var_dump($trave);
    return $trave;
}
function vochur($coupon_code) {
    $sql = "SELECT * FROM `nhom2_duan1`.`coupon` WHERE `coupon_code` ='$coupon_code'";
    $hs = get_select_one($sql);
//    var_dump($hs);
    return $hs;
}
function thongke_book_room() {
    $sql = "SELECT `nhom2_duan1`.type_room.id_type_rooms , `nhom2_duan1`.type_room.name, COUNT(`nhom2_duan1`.room.id_room) AS COUNTsp , MIN(`nhom2_duan1`.room.don_gia) as minprice , MAX(`nhom2_duan1`.room.don_gia) as maxprice , AVG(`nhom2_duan1`.room.don_gia) as tb FROM `nhom2_duan1`.room LEFT JOIN `nhom2_duan1`.type_room ON `nhom2_duan1`.room.id_type_rooms = `nhom2_duan1`.type_room.id_type_rooms GROUP BY type_room.id_type_rooms";
    $trave_tk = get_select($sql);
    return $trave_tk;
}
function check_room_sp($id) {
//    $location = -1;
    for ($i=0 ; $i<sizeof($_SESSION['detail_room']) ; $i++) {
        if($_SESSION['detail_room'][$i][6]==$id) {
//            $location=$i;
            echo " le huy dat";
        }
        if(isset($_SESSION['detail_room'])>0){
            echo "";
        }
//        return $location;
    }
        
}
//function check_again_two($location) {
//    for ($i=0 ; $i<sizeof($_SESSION['detail_room']) ; $i++) {
//        if($i==$location) {
//            echo " lỗi thông tin jd";
//        }
//        else {
//            echo "";
//        }
//        return $location;
//    }
//}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

