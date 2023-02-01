<?php

// receive nơi nhận dự liệu người dùng và tương tác với database 
function enroll_account() {
    if (isset($_POST['enroll']) && $_POST['enroll']) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $sdt = $_POST['sdt'];
        $pass = $_POST['pass'];
        insert_taikhoan($email, $sdt, $name, $pass);
//        $thongbao = "đã đăng ký thành công tài khoản";
        // thực hiên gọi hàm ở phần account trong model
    }
}

function login() {
    if (isset($_POST['dangnhap']) && $_POST['dangnhap'] != "") {
        $user = $_POST['name'];
        $pass = $_POST['pass'];
        $checkuser = check_account($user, $pass);
        if (is_array($checkuser)) {
            $_SESSION['user'] = $checkuser;
            var_dump($_SESSION['user'], ['email']);
            echo $_SESSION['user'];
            if (is_array($_SESSION['user'])) {
                extract($_SESSION['user']);
                var_dump($_SESSION['user']);
                echo $email;
                echo $role;
                if ($role == 1) {
//                    include '../admin/index.php';
                    header("location: admin/index.php");
                } else {
                    header("location:index.php");
                }
            }
//            echo $pass;
//            echo $email;
//            header("location: index.php");
        } else {
            $thongbao = "đã đăng ký thành công tài khoản";
        }
    }
}

function forget_account() {
    if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
        $email = $_POST['email'];
        $checkemail = checkemail($email);
        if (is_array($checkemail)) {
            $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
//            return $thongbao;
        } else {
            $thongbao = "Email này không tồn tại";
        }
        return $thongbao;
    }

//    var_dump($thongbao);
}

function list_account() {
    $trave = select_account();
    return $trave;
}
function account_sua() {
    if (isset($_GET['ma_p']) && $_GET['ma_p'] > 0) {
        $type_room = get_account_one($_GET['ma_p']);
        return $type_room;
    }
}

function account_update() {
    if (isset($_POST['capnhat']) && $_POST["capnhat"]) {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $sdt = $_POST['sdt'];
        $pass = $_POST['pass'];
        $role = $_POST['role'];
        $ma_loai = $_POST['id_taikhoan'];
        update_account_p( $email, $sdt, $name, $pass,$role , $ma_loai);
    }
}
function account_delete() {
    if (isset($_GET['ma_p']) && $_GET['ma_p']) {
        delete_account_p($_GET['ma_p']);
    }
}

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

