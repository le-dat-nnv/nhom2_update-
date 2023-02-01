<?php
// receive nơi nhận dự liệu người dùng và tương tác với database 
function add_gallery() {
    if (isset($_POST['guikqua']) && $_POST['guikqua']) {
        $id_room = $_POST['id_room'];
//        $file_path = "../Uploads/";
//        $target_file = $file_path . basename($_FILES['img']['name']);
//        if (move_uploaded_file($_FILES['img']['tmp_name'], $target_file)) {
//            
//        } else {
//            
//        }
        insert_gallery( $id_room);
//        var_dump(insert_gallery($ma_room, $image));
    }
}
function list_gallery() {
    $trave = select_gallery();
    return $trave;
}
function list_gallery1() {
    $trave = select_gallery1();
    return $trave;
}
function sua_gallery() {
    if (isset($_GET['ma_g']) && $_GET['ma_g'] > 0) {
        $type_room = get_gallery($_GET['ma_g']);
//        var_dump($type_room);
        return $type_room;
    }
}

function update_g() {
    if (isset($_POST['capnhat']) && $_POST["capnhat"]) {
        $ma_room = $_POST['ma_phong'];
        $ma_lp = $_POST['ma_lp'];
        update_gallery( $ma_lp , $ma_room);
    }
}

function delete_g() {
    if (isset($_GET['ma_g']) && $_GET['ma_g']) {
        delete_gallery($_GET['ma_g']);
    }
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

