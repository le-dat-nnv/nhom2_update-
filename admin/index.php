<?php

session_start();
ob_start();
include './admin_header.php';
require_once '../Model/PDO.php';
require_once '../Model/room_type.php';
require_once '../Model/book_room.php';
require_once '../Model/type_service.php';
require_once '../Model/rooms.php';
require_once '../Model/gallery.php';
require_once '../Controller/room_bookingController.php';
require_once '../Controller/room_typeController.php';
require_once '../Controller/type_serviceController.php';
require_once '../Controller/roomController.php';
require_once '../Controller/room_galleryController.php';
require_once '../Model/facilities.php';
require_once '../Controller/facilities_room_detailController.php';
require_once '../Model/book_service.php';
require_once '../Controller/book_serviceController.php';
require_once '../Model/service.php';
require_once '../Model/setting.php';
require_once '../Controller/setting_Controller.php';
require_once '../Controller/service_Controller.php';
require_once '../Model/slide.php';
require_once '../Controller/slide_showController.php';
require_once '../Model/account.php';
require_once '../Model/binhluan.php';
require_once '../Controller/accountController.php';
require_once '../Controller/binhluanController.php';
require_once '../Controller/book_room_detailController.php';
require_once '../Model/detail_room.php';
$gallery = select_gallery();
$lk_type_room = select_room();
$lk_service = select_facilities();
$lk_type_service = select_service();
$lk_faci = select_room_p();
$thongke = thongke_room();
if (!isset($_SESSION['detail_room_admin'])) {
    $_SESSION['detail_room_admin'] = [];
}
if (isset($_GET['url']) && $_GET['url']) {
    $url = $_GET['url'];
    switch ($url) {
        case "type_room":
            add_type_room();
            include './type_room/add_type_room.php';
            break;
        case "list_type_room":
            $list_type_room = show_room();
            include './type_room/list_type_room.php';
            break;
        case "sua_type_room":
            $sua = sua_type_room();
            include './type_room/edit_type_room.php';
            break;
        case "update_type_room":
            update();
            $list_type_room = show_room();
            include './type_room/list_type_room.php';
            break;
        case "xoa_type_room":
            delete();
            $list_type_room = show_room();
            include './type_room/list_type_room.php';
            break;
        ////////////////////////////////////////////////////
        case "lroom":
            add_room();
            include './quanlyphong/add_qlroom.php';
            break;
        case 'list_ds_phong':
            $trave = show_room_p();
            include './quanlyphong/list_phong.php';
            break;
        case 'suatype_room':
            $trave_room = sua_type_room_p();
            include './quanlyphong/edit.php';
            break;
        case "update_room":
            update_p();
            $trave = show_room_p();
            include './quanlyphong/list_phong.php';
            break;
        case "xoatype_room":
            delete_p();
            $trave = show_room_p();
            include './quanlyphong/list_phong.php';
            break;
        ///////////////////////////////////////////////
        case 'hangp':
            include './quanly_hangp/add_qhang_phong.php';
            break;
        case 'ds_hphong':
            include './quanly_hangp/list_hphong.php';
            break;
        ///////////////////////////////////////////////
        case "phong":
            $list_roomss = show_room_p();
            add_booking();
            include './don_book_phong/add_datphong.php';
            break;
//        case "search";
//            if (isset($_POST['chapn']) && $_POST["chapn"]) {
//                $not = $_POST['check_in'];
//                $ma_loai1 = $_POST['check_out'];
//            } else {
//                $not = "";
//                $ma_loai1 = "";
//            }
//            $list_roomss = search_book($not, $ma_loai1 );
//            include './don_book_phong/add_datphong.php';
//            break;
        case "view_room_will_book":
            if (isset($_POST['view']) && ($_POST['view'])) {
                $id = $_POST['id'];
                $name_room = $_POST['name_room'];
                $mo_ta = $_POST['des'];
                $ma_room = $_POST['ma_p'];
                $price = $_POST['don_gia'];
                $image = $_POST['img'];
                $room_admin = [$name_room, $mo_ta, $ma_room, $price, $image, $id];
//                if (isset($_SESSION['detail_room_admin'])) {
                array_push($_SESSION['detail_room_admin'], $room_admin);
                header("location:index.php?url=view_room_will_book");
//                }
            }
            include './detail_room/view_sp.php';
            break;
        case "infor_room":
            include './detail_room/infor_book_room.php';
            break;
        case 'book_phong':
            $list = list_phong();
            include './don_book_phong/list_book_phong.php';
            break;
        case 'detail_kh_room':
            if (isset($_GET['ma_b']) && $_GET['ma_b']) {
                $list_detail = get_detail_room($_GET['ma_b']);
            }
            include './detail_room/detail_room.php';
            break;
        case "xoa_book_room":
            delete_room_b();
            $list = list_phong();
            include './don_book_phong/list_book_phong.php';
            break;
        case "sua_book_room":
            if (isset($_GET['ma_b']) && $_GET['ma_b']) {
                $sua_detail = get_book_s($_GET['ma_b']);
            }
            $list = list_phong();
            include './detail_room/edit.php';
            break;
        case "update_book_room":
            update_book_room();
            $list = list_phong();
            include './don_book_phong/list_book_phong.php';
            break;
        case 'uudai':
            include './trang_uudai/add_uudai.php';
            break;
        ///////////////////////////////////////////////
        case 'ldichvu':
            add_service();
            include './type_service/add_service.php';
            break;
        case 'ds_loai_dv':
            $lstservice = get_service();
            include './type_service/list_service.php';
            break;
        case 'sua_service':
            $trave_serive = sua_service();
            include './type_service/edit.php';
            break;
        case "update_service":
            update_s();
            $lstservice = get_service();
            include './type_service/list_service.php';
            break;
        case "xoa_service":
            delete_s();
            $lstservice = get_service();
            include './type_service/list_service.php';
            break;
        /////////////////////////////////////////////////
        case "gallery_room":
            add_gallery();
            $retu = select_gallery();
//            var_dump($retu);
            include './gallery_room/add_gallery.php';
            break;
        case "list_gallery":
            $list_gallery = list_gallery1();
            include './gallery_room/list_gallery.php';
            break;
        case "sua_gallery":
            $sua_gallery = sua_gallery();
            include './gallery_room/edit.php';
            break;
        case "update_gallery":
            update_g();
            $list_gallery = list_gallery();
            include './gallery_room/list_gallery.php';
            break;
        case "xoa_gallery":
            delete_g();
            $list_gallery = list_gallery();
            include './gallery_room/list_gallery.php';
            break;
        //////////////////////////////////
        case "facilities":
            add_facilities();
            include './faciities/add_facilities.php';
            break;
        case "list_facilities":
            $list_facilities = list_facilities();
            include './faciities/list_facilities.php';
            break;
        case "sua_facilities":
            $sua_facilities = sua_facilities();
            include './faciities/edit.php';
            break;
        case "update_facilities":
            update_f();
            $list_facilities = list_facilities();
            include './faciities/list_facilities.php';
            break;
        case "xoa_facilities":
            delete_f();
            $list_facilities = list_facilities();
            include './faciities/list_facilities.php';
            break;
        ///////////////////////////////////////////////
        case "book_service":
            add_book_service();
            include './book_service/add_service.php';
            break;
        case "list_book_service":
            $list_service = list_service();
            include './book_service/list_service.php';
            break;
        case "sua_book_service":
            $sua_servicee = sua_book_service();
            include './book_service/edit.php';
            break;
        case "update_book_service":
            update_book_service();
            $list_service = list_service();
            include './book_service/list_service.php';
            break;
        case "xoa_book_service":
            delete_book_service();
            $list_service = list_service();
            include './book_service/list_service.php';
            break;
        ////////////////////////////////////////////////////
        case 'list_kh_uudai':
            include './trang_uudai/list_khachhang_uudai.php';
            break;
        case 'detail_room':
            include './detail_room/add_detail.php';
            break;
        case 'gallery_room':
            include './gallery_room/add_gallery.php';
            break;
        case 'type_event':
            include './type_event/add_event.php';
            break;
        case 'event_tc':
            include './organize_weddingparty/add_eventtc.php';
            break;
        ///////////////////////////////////////////
        case 'service':
            service_add();
            include './service/add_service.php';
            break;
        case 'service_list':
            $service_list = service_ct_list();
            include './service/list_service.php';
            break;
        case 'service_xoa':
            delete_ct_service();
            $service_list = service_ct_list();
            include './service/list_service.php';
            break;
        case 'service_update':
            update_ct_service();
            $service_list = service_ct_list();
            include './service/list_service.php';
            break;
        case 'sua_se_list':
            $edit = sua_ct_service();
//            var_dump($edit);
            include './service/edit.php';
            break;
        /////////////////////////////////////////
//        case 'setting':
//            service_add();
//            include './setting/add_information.php';
//            break;
        case 'list_setting':
            $setting_list = setting_ct_list();
            include './setting/list_information.php';
            break;
        case 'xoa_setting':
            delete_ct_service();
            $setting_list = service_ct_list();
            include './setting/list_information.php';
            break;
        case 'update_setting':
            update_ct_service();
            $setting_list = service_ct_list();
            include './setting/list_information.php';
            break;
        case 'sua_setting':
            $edit_setting = sua_csetting();
//            var_dump($edit);
            include './setting/edit.php';
            break;
        //////////////////////////////////////////////
        case "rooms":
            add_room();
            include './rooms/add_rooms.php';
            break;
        case "list_rooms":
            $list_rooms = show_room_p();
            include './rooms/list_rooms.php';
            break;
        case "sua_rooms":
            $sua_rooms = sua_type_room_p();
            include './rooms/edit.php';
            break;
        case "update_rooms":
            update_p();
            $list_rooms = show_room_p();
            include './rooms/list_rooms.php';
            break;
        case "xoa_rooms":
            delete_p();
            $list_rooms = show_room_p();
            include './rooms/list_rooms.php';
            break;
        /////////////////////////////////////////
        case "slide_showadd":
            add_slide();
            include './slide_show/add_slide_show.php';
            break;
        case "list_slide":
            $list_slide = list_slide();
            include './slide_show/list_slide.php';
            break;
        case "sua_slide":
            $sua_list = sua_slide_sl();
            include './slide_show/edit.php';
            break;
        case "update_slide":
            update_slide_sl();
            $list_slide = list_slide();
            include './slide_show/list_slide.php';
            break;
        case "xoa_slide":
            delete_slide_sl();
            $list_slide = list_slide();
            include './slide_show/list_slide.php';
            break;
        /////////////////////////////////////
        case "account":
            add_account();
            include './account/add_account.php';
            break;
        case "list_account":
            $list_account = list_account();
            include './account/list_account.php';
            break;
        case "sua_account":
            $sua_list = account_sua();
            include './account/edit.php';
            break;
        case "update_account":
            account_update();
            $list_account = list_account();
            include './account/list_account.php';
            break;
        case "xoa_account":
            account_delete();
            $list_account = list_account();
            include './account/list_account.php';
            break;
        ///////////////////////////////////////
        case "comment":
            add_binhluan();
            include './binhluan/add_binhluan.php';
            break;
        case "list_comment":
            $list_binhluan = list_binhluan();
            include './binhluan/list_binhluan.php';
            break;
        case "sua_bl":
            $sua_binhluan = binhluan_sua();
            include './binhluan/edit.php';
            break;
        case "update_comment":
            binhluan_update();
            $list_binhluan = list_binhluan();
            include './binhluan/list_binhluan.php';
            break;
        case "xoa_bl":
            binhluan_delete();
            $list_binhluan = list_binhluan();
            include './binhluan/list_binhluan.php';
            break;
        case "thongke":
            include './thongke.php';
            break;
        /////////////////////////////////////////////
        case "ct_phong":
            // list
            $list = list_detail_book();
            include './detail_room/list_book_phong.php';
            break;
        case 'ct_book_phong':
            // add
            $list = list_phong();
            include './detail_room/add_detail.php';
            break;
        case "ct_xoa_book_room":
            //xóa
            delete_room_b();
            $list = list_phong();
            include './detail_room/list_book_phong.php';
            break;
        case "ct_sua_book_room":
            // sửa
            delete_room_b();
            $list = list_phong();
            include './detail_room/edit.php';
            break;
        case "vochur":
            if(isset($_POST['kqua']) && $_POST['kqua']) {
                $name = $_POST['ma_phong'];
                $safe = $_POST['don_gia'];
                insert_coupon($name, $safe);
            }
            include './detail_room/add_vochur.php';
            break;
        case "list_vochur":
            $list_VOCHUR = list_vochur();
            include './detail_room/list_vochur.php';
            break;
        case "update_sua_book_room":
            // update
            delete_room_b();
            $list = list_phong();
            include './detail_room/list_book_phong.php';
            break;
        ///////////////////////////////////////
        case 'uudai':
            include './trang_uudai/add_uudai.php';
            break;
        case 'xoaof_book_room':
            delete_room_book_room();
            $list = list_detail_book();
            include './detail_room/list_book_phong.php';
            break;
        default:
            break;
    }
} else {
//    include 'menu_left.php';
}
ob_end_flush();
?>
