<?php

function insert_room_p($des, $price, $numperson, $image) {
    $date = date("Y-m-d");
    $sql = "INSERT INTO `nhom2_duan1`.`room` (`ma_rooms`, `don_gia`, `img_room`, `id_type_rooms`) VALUES ('$des', '$price', '$numperson', '$image')";
    get_db($sql);
}

function select_room_p() {
    $sql = "select * from `nhom2_duan1`.`room` order by id_room";
    $get = get_select($sql);
    return $get;
}

function get_information() {
//   $sql = "SELECT * FROM nhom2_duan1.room INNER JOIN nhom2_duan1.type_room ON nhom2_duan1.room.id_type_rooms=nhom2_duan1.type_room.id_type_rooms INNER JOIN nhom2_duan1.gallery_room ON nhom2_duan1.room.id_gallery=nhom2_duan1.gallery_room.id INNER JOIN nhom2_duan1.facilities ON nhom2_duan1.room.service_id=nhom2_duan1.facilities.id;";
    $sql = "SELECT * FROM nhom2_duan1.room INNER JOIN nhom2_duan1.type_room ON nhom2_duan1.room.id_type_rooms=nhom2_duan1.type_room.id_type_rooms";
    $get = get_select($sql);
    return $get;
}

function get_information1() {
    $sql = "SELECT nhom2_duan1.room.ma_rooms,
                   GROUP_CONCAT(nhom2_duan1.facilities.icon) as icon 
            FROM nhom2_duan1.lk_facilities_room
            INNER JOIN nhom2_duan1.room ON nhom2_duan1.room.id_room = nhom2_duan1.lk_facilities_room.id_room
            INNER JOIN nhom2_duan1.facilities ON nhom2_duan1.facilities.id = nhom2_duan1.lk_facilities_room.d_facilities GROUP BY nhom2_duan1.room.ma_rooms
";
    $get = get_select($sql);
    return $get;
}

function get_type_room_p($ma_hh) {
    $sql = "select * from `nhom2_duan1`.`room` where `id_room`=" . $ma_hh;
    $sp = get_select_one($sql);
    return $sp;
}

function update_type_room_p($mo_ta, $don_gia, $add, $ma_loai) {
    $sql = "UPDATE `nhom2_duan1`.`room` SET `ma_rooms`='$mo_ta',`don_gia`='$don_gia',`id_type_rooms`='$add'  WHERE id_room=" . $ma_loai;
    get_db($sql);
}

function delete_type_room_p($ma_code) {
    $sql = "delete from `nhom2_duan1`.`room` where id_room=" . $ma_code;
    get_db($sql);
}

function get_information_user() {
//   $sql = "SELECT * FROM nhom2_duan1.room INNER JOIN nhom2_duan1.type_room ON nhom2_duan1.room.id_type_rooms=nhom2_duan1.type_room.id_type_rooms INNER JOIN nhom2_duan1.gallery_room ON nhom2_duan1.room.id_gallery=nhom2_duan1.gallery_room.id INNER JOIN nhom2_duan1.facilities ON nhom2_duan1.room.service_id=nhom2_duan1.facilities.id;";
    $sql = "SELECT * FROM nhom2_duan1.room INNER JOIN nhom2_duan1.type_room ON nhom2_duan1.room.id_type_rooms=nhom2_duan1.type_room.id_type_rooms limit 0,3";
    $get = get_select($sql);
    return $get;
}

function l_phong() {
    $sql = "SELECT * FROM nhom2_duan1.type_room";
    $grt = get_select($sql);
    return $grt;
}

function cke($rowbrand) {
    $sql = "SELECT * FROM nhom2_duan1.room WHERE id_type_rooms='$rowbrand'";
    $tve = get_select($sql);
//    var_dump($tve);s
    return $tve;
}

function list_room_chitiet($ma_hh) {
    $sql = "select * from nhom2_duan1.room INNER JOIN nhom2_duan1.type_room ON nhom2_duan1.room.id_type_rooms=nhom2_duan1.type_room.id_type_rooms where id_room=" . $ma_hh;
    $chitiet = get_select_one($sql);
    return $chitiet;
}

function list_room_cungloai($ma_hh, $ma_loai) {
    $sql = "select * from nhom2_duan1.room where id_type_rooms=" . $ma_loai . " AND id_room <> " . $ma_hh;
    $chitiet = get_select($sql);
    return $chitiet;
}

function search_book($check_in, $check_out) {
//    $sql = "SELECT * FROM nhom2_duan1.book_room INNER JOIN nhom2_duan1.detail_room ON nhom2_duan1.book_room.ma_phong=nhom2_duan1.detail_room.id_booking INNER JOIN nhom2_duan1.room ON nhom2_duan1.room.id_room=nhom2_duan1.detail_room.id_room INNER JOIN nhom2_duan1.type_room ON nhom2_duan1.room.id_type_rooms=nhom2_duan1.type_room.id_type_rooms WHERE nhom2_duan1.detail_room.id_room NOT IN ( SELECT nhom2_duan1.detail_room.id_room FROM nhom2_duan1.detail_room WHERE booking_date<='$check_in' AND check_out_date >='$check_out') AND room.ma_rooms=".$id;
    $sql = "SELECT * FROM nhom2_duan1.room INNER JOIN nhom2_duan1.detail_room ON nhom2_duan1.room.id_room=nhom2_duan1.detail_room.id_room INNER JOIN nhom2_duan1.book_room ON nhom2_duan1.book_room.ma_phong=nhom2_duan1.detail_room.id_booking INNER JOIN nhom2_duan1.type_room ON nhom2_duan1.room.id_type_rooms=nhom2_duan1.type_room.id_type_rooms WHERE nhom2_duan1.room.ma_rooms not in ( SELECT room.ma_rooms FROM nhom2_duan1.detail_room WHERE booking_date<='$check_in' AND check_out_date >='$check_out')";
    $trave = get_select($sql);
    return $trave;
}

//function list_sanpham01($kyw = "", $ma_loai = 0) {
//    $sql = "select * from assignment_web204.hang_hoa where 1";
//    if ($kyw != "") {
//        $sql .= " and ten_hh like '%" . $kyw . "%'";
//    }
//    if ($ma_loai > 0) {
//        $sql .= " and ma_loai ='" . $ma_loai . "'";
//    }
//    $sql .= " order by ma_hh desc";
//    $trave = pdo_query($sql);
//    var_dump($trave);
//    return $trave;
//}
//function tendanh_muc($mdm) {
//    if ($mdm > 0) {
//        $sql = "select * from assignment_web204.loaihang where `ma_loai`=" . $mdm;
//        $dm = pdo_query_one($sql);
//        extract($dm);
//        return $ten_loai;
//    } else {
//        return "";
//    }
//}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

