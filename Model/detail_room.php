<?php
function insert_gallerypp($name_room, $imageg, $ma_lp) {
    $sql = "INSERT INTO `nhom2_duan1`.`gallery_room` (`ten_phong`, `img`, `ma_loaiphong`) VALUES ('$name_room', '$imageg', '$ma_lp')";
    get_db($sql);
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}

function select_detail() {
    $sql = "SELECT book_room.name_kh,book_room.email,book_room.sdt,room.ma_rooms,detail_room.price,book_room.address,book_room.booking_date,book_room.check_out_date,book_room.status, GROUP_CONCAT(room.ma_rooms) as maphong FROM `nhom2_duan1`.detail_room INNER JOIN `nhom2_duan1`.room ON `nhom2_duan1`.detail_room.id_room=`nhom2_duan1`.room.id_room INNER JOIN `nhom2_duan1`.book_room ON `nhom2_duan1`.detail_room.id_booking=`nhom2_duan1`.book_room.ma_phong GROUP BY `nhom2_duan1`.book_room.ma_phong;";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}
function select_detail_book() {
    $sql = "SELECT * FROM nhom2_duan1.`detail_room` INNER JOIN nhom2_duan1.book_room ON detail_room.id_booking=book_room.ma_phong";
    $get = get_select($sql);
    return $get;
    // goi hàm ở pdo để thục hiện với cơ sở dữ liệu
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

