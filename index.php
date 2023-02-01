<?php

session_start();
require_once './Model/PDO.php';
require_once './Model/room_type.php';
require_once './Model/book_room.php';
require_once './Controller/room_bookingController.php';
require_once './Controller/room_typeController.php';
require_once './Model/detail_room.php';
require_once './Controller/accountController.php';
require_once './Model/account.php';
require_once './Model/rooms.php';
require_once './Controller/roomController.php';
require_once './Model/service.php';
require_once './Model/slide.php';
require_once './Controller/slide_showController.php';
require_once './Controller/thongkeController.php';
require_once './Model/thongke.php';
require_once './Controller/roomController.php';
require_once './Model/rooms.php';
require_once './Controller/setting_Controller.php';
require_once './Model/setting.php';
require_once './Controller/room_galleryController.php';
require_once './Model/gallery.php';
require_once './Controller/binhluanController.php';
require_once './Model/binhluan.php';
require_once './Controller/service_Controller.php';
require_once './Controller/facilities_room_detailController.php';
require_once './Model/facilities.php';
require_once './Model/gallery.php';
$trave_setting = setting_ct_list();
$trave_gallery = list_gallery();
$traveimg = select_gallery();
$show_service = service_ct_list();
$showroom = show_room_user();
$travebooking = get_information();
$travebooking1 = get_information1();
//$trave_seriver = get_information_service();
$slide_show = list_slide();
$show_facilities = select_facilities();
$sholl = show_room();
$xet = list_room1();
$trave_binhluan = select_binhluan_user();
if (!isset($_SESSION['room'])) {
    $_SESSION['room'] = [];
}
if (isset($_GET['url'])) {
    $url = $_GET['url'];
    switch ($url) {
        case "enroll":
            include './View/account/enroll.php';
            break;
        case "filter":
            if (isset($_POST['id']) && $_POST['id'] > 0) {
                $mdm = $_POST['id'];
//            } else {
//                $mdm = 0;
            }
            $trave = list_sanpham01($mdm);
            var_dump($trave);
//            var_dump($trave);
            include './View/room_type.php';
            break;
        case "book_service":
            include './View/book_service.php';
            break;
        case 'booking_room':
            add_booking();
            include './View/information_booking.php';
            break;
//        case 'forget':
//            $thongbao = forget_account();
//            include './View/account/forget_account.php';
//            break;
        case 'trainghiem':
            include './View/trainghiem.php';
            break;
        case 'p_loai':
            $lkt = ktra();
            include './View/room_type.php';
            break;
        case 'uudai':
            include './View/sale.php';
            break;
        case 'organation':
            include './View/sukien.php';
            break;
        case "introduce":
            include './View/introduce.php';
            break;
        case 'lphong':
            $travebooking = show_room();
            include './View/book_room/lphong.php';
            break;
        case "our_room":
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $check_in = $_POST['check_in'];
                $check_out = $_POST['check_out'];
                $adults = $_POST['adults'];
                $children = $_POST['children'];
                $spadd = [$check_in, $check_out, $adults, $children];
                array_push($_SESSION['room'], $spadd);
            }
            include './View/room_type.php';
            break;
        case "danhmucsp":
            if (isset($_POST['kword']) && $_POST['kword'] != "") {
                $kyw = $_POST['kword'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['ma_dm']) && $_GET['ma_dm'] > 0) {
                $mdm = $_GET['ma_dm'];
            } else {
                $mdm = 0;
            }
            $dmsp = list_sanpham01($kyw, $mdm);
            $tendm = tendanh_muc($mdm);
            include './view/danhmucsp.php';
            break;
        case "add_room":
            if (isset($_POST['addroom']) && ($_POST['addroom'])) {
                $id = $_POST['id'];
                $name_room = $_POST['name_room'];
                $mo_ta = $_POST['mo_ta'];
                $ma_room = $_POST['ma_p'];
                $price = $_POST['don_gia'];
                $image = $_POST['img'];
                $icon = $_POST['icon'];
                $soluong = 1;
                $ttien = $soluong * $price;
                $check = $_POST['check_in'];
                $check_outt = $_POST['check_out'];
                $adultst = $_POST['adults'];
                $childrenst = $_POST['childrens'];
                $room_add = [$name_room, $mo_ta, $ma_room, $price, $image, $icon, $id, $soluong, $ttien, $check, $check_outt, $adultst, $childrenst];
                if (!isset($_SESSION['detail_room'])) {
                    $_SESSION['detail_room'] = [];
                }
                if (isset($_SESSION['detail_room'])) {
                    array_push($_SESSION['detail_room'], $room_add);
                    header("location:index.php?url=add_room");
                }
            }
            include './View/information_booking.php';
            break;
        case "delcart":
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['detail_room'], $_GET['idcart']);
            } else {
                $_SESSION['detail_room'] = [];
            }
//            include './View/information_booking.php';
            header("location:index.php?url=view_room");
            break;
        case 'gallery':
            include './View/gallery.php';
            break;
        case 'binh_luan':
            if (isset($_POST['data']) && ($_POST['data'])) {
                $noidung = $_POST['noidung'];
                $ma_room = $_POST['ma_room'];
                $ngay_bl = date('h:i:sa d/m/Y');
                insert_binhluan($noidung, $ma_room, $ngay_bl);
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
            $dsbl = select_binhluan();
            include './View/ct_room.php';
            break;
        case 'thanhtoan':
            if (isset($_POST['money']) && $_POST['money']) {
//        $tong_tien = tongdonhang();
//        $ledas = $_SESSION['detail_room'];
//        $count = count($ledas);
                $name = $_POST['name'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $address = $_POST['address'];
                $adults = $_POST['adults'];
                $price = $_POST['price'];
                $childrens = $_POST['childrens'];
                $check_in = $_POST['check_in'];
                $check_out = $_POST['check_out'];
                $row = insert_rooms_user($name, $email, $sdt, $address, $adults, $childrens, $price, $check_in, $check_out);
//                var_dump($tt);
                foreach ($_SESSION['detail_room'] as $item) {
                    $room = $item['6'];
                    $price = $item['3'];
                    insert_room_detail($row, $room, $price);
                }
//                 $check_room= 
                // phải insert tách 2 bảng ra thôi chứ không thể sử dụng phường thức này được nữa rồi 
            }
            $_SESSION['detail_room'] = [];
//            pay();
//            session_unset();
//            $_SESSION['detail_room'] = [];
            header("location:index.php?url=show");
//            include './View/book_room/bill.php';
            break;
        case 'show':
            $tt = cart_room();
//            $_SESSION['detail_room'] = [];
////            $_SESSION['detail_room'] = [];
//            $tt = cart_room();
            include './View/book_room/bill.php';
            break;
        case 'facilities':

            include './View/facilaties.php';
            break;
        case 'service':
            include './View/service.php';
            break;
        case "huydon";
            include './View/huydon.php';
            break;
        case 'huy':
            if (isset($_GET['ma_r']) && $_GET['ma_r']) {
                huy_room(2, $_GET['ma_r']);
            }
            header("Location:index.php?url=huydon");
            break;
        ////////////////////////////////////////////////
        case 'login':
            login();
            include './View/account/login.php';
            break;
        case 'login_form':
            login();
            include './View/account/form_login.php';
            break;
        case 'update_account_user':
            login();
            include './View/account/form_login.php';
            break;
        case 'forget':
            $thongbao = forget_account();
            include './View/account/form_login.php';
            include './View/account/forget_account.php';
            break;
        case 'edit':
            include './View/account/form_login.php';
            include './View/account/edit.php';
            break;
        case 'enroll':
            enroll_account();
            include './View/account/enroll.php';
            break;
        case 'logout':
            session_unset();
            header('Location: index.php');
            break;
        /////////////////////////////////////////////////
        case 'detail_room':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $onesp = list_room_chitiet($_GET['id']);
                extract($onesp);

//                $sp_same = list_room_cungloai($_GET['id']);
            }
            include './View/ct_room.php';
            break;

        case 'view_of_rooms':
            $list_vochur="";
            if (isset($_POST['safe']) && $_POST['safe']) {
                $tbao_error = "";
                $coupon_code = $_POST['coupon'];
                $price = $_POST['price'];
                $list_vochur = vochur($coupon_code);
            }
//            $list_vochur = vochur($coupon_code);
//            if (isset($_POST['view_room']) && ($_POST['view_room'])) {
//                $id = $_POST['id'];
//                $name_room = $_POST['name_room'];
//                $mo_ta = $_POST['mo_ta'];
//                $ma_room = $_POST['ma_p'];
//                $price = $_POST['don_gia'];
//                $image = $_POST['img'];
//                $icon = $_POST['icon'];
//                $soluong = 1;
//                $ttien = $soluong * $price;
//                $check_in = $_POST['check_in'];
//                $room_add = [$name_room, $mo_ta, $ma_room, $price, $image, $icon, $id, $soluong, $ttien, $check_in];
//                if (!isset($_SESSION['detail_room'])) {
//                    $_SESSION['detail_room'] = [];
//                }
//                if (isset($_SESSION['detail_room'])) {
//                    array_push($_SESSION['detail_room'], $room_add);
//                    header("location:index.php?url=view_rooms");
//                }
//               
//            }
            include './View/book_room/view_booking_room.php';
            break;
        case 'view_room':
            if (isset($_POST['view_room']) && ($_POST['view_room'])) {
                $id = $_POST['id'];
                $name_room = $_POST['name_room'];
                $mo_ta = $_POST['mo_ta'];
                $ma_room = $_POST['ma_p'];
                $price = $_POST['don_gia'];
                $image = $_POST['img'];
                $icon = $_POST['icon'];
                $soluong = 1;
                $ttien = $soluong * $price;
                $check_in = $_POST['check_in'];
                $check_out = $_POST['check_out'];
                $adults = $_POST['adults'];
                $children = $_POST['childrens'];
                $room_add = [$name_room, $mo_ta, $ma_room, $price, $image, $icon, $id, $soluong, $ttien, $check_in, $check_out, $adults, $children];
                if (!isset($_SESSION['detail_room'])) {
                    $_SESSION['detail_room'] = [];
                }
                if (isset($_SESSION['detail_room'])) {
                    array_push($_SESSION['detail_room'], $room_add);
                    header("location:index.php?url=view_room");
                }
            }
            include './View/check_room.php';
            break;
        case "delcart":
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['detail_room'], $_GET['idcart']);
//                array_slice($_SESSION['mycart'], $_GET['idcart'], 1);
//                array_slice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['detail_room'] = [];
            }
            header("location:index.php?url=book");
//            include './view/gioithieu.php';
            break;
        case "online":
            include './View/thanhtoan_online.php';
            break;
        case "safe":
            if (isset($_POST['safe']) && $_POST['safe']) {
                $tbao_error = "";
                $coupon_code = $_POST['coupon'];
                $price = $_POST['price'];
                $list_vochur = vochur($coupon_code);
            }
            include './View/book_room/view_booking_room.php';
            break;
        default:
            break;
    }
} else {
    include './View/header.php';
}
?>
