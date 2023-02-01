<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="admin/designer/style_1_1_1.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/5bf1290cf0.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <style>
            .availability-form{
                margin-top: -50px;
                position: relative;
                z-index: 1;
            }
            footer{
                background-color:#EFEFF9 !important;
                color:#546E7A !important;
            }
            .maincard {
                position: relative;
                width: 300px;
                height: 300px
            }

            .thecard {
                position: absolute;
                width: 100%;
                height: 100%;
                transform-style: preserve-3d;
                transition: all 0.8s ease
            }

            .thecard:hover {
                transform: rotateY(180deg)
            }

            .thefront {
                position: absolute;
                width: 100%;
                height: 100%;
                background-color: hidden;
                background: #D50000;
                color: #fff;
                border-radius: 10px;
                cursor: pointer;
                border: 1px solid #eee;
                box-shadow: 5px 6px 6px 2px #e9ecef;
                padding: 10px
            }

            .theback {
                position: absolute;
                width: 100%;
                height: 100%;
                cursor: pointer;
                background-color: hidden;
                background: #D50000;
                color: #fff;
                border-radius: 10px;
                transform: rotateY(180deg);
                border: 1px solid #eee;
                box-shadow: 5px 6px 6px 2px #e9ecef;
                padding: 10px
            }

            .user_name {
                color: #eee;
                font-size: 10px;
                margin-top: 0px
            }

            .about {
                font-size: 12px
            }
            .swiper-slide_h1 {
                background-position: center;
                background-size: cover;
                width: 300px;
                height: 300px;
            }

            .swiper-slide img {
                display: block;
                width: 100%;
            }
            @font-face{
                font-family: Noto;
                src: url(NotoSans-Regular.ttf);
            }
            @font-face{
                font-family: Noto1;
                src: url(NotoSans-Black.ttf);
            }
            @font-face{
                font-family: Noto2;
                src :url(NotoSans-LightItalic.ttf);
            }
            @font-face{
                font-family: Noto3;
                src :url(NotoSans-ExtraLightItalic.ttf);
            }
            @font-face{
                font-family: Noto4;
                src :url(NotoSans-SemiBoldItalic.ttf);
            }


            @font-face{
                font-family: Noto5;
                src: url(NotoSans-ExtraBold.ttf);
            }
            @font-face{
                font-family: Noto6;
                src: url(NotoSans-Light.ttf);
            }
            @font-face{
                font-family: Noto7;
                src :url(NotoSans-ExtraBoldItalic.ttf);
            }
            @font-face{
                font-family: Noto8;
                src :url(NotoSans-ThinItalic.ttf);
            }
            @font-face{
                font-family: Noto9;
                src :url(NotoSans-SemiBold.ttf);
            }
            @font-face{
                font-family: Noto10;
                src :url(Lobster-Regular.ttf);
            }
            @font-face{
                font-family: Noto11;
                src :url(DancingScript-Bold.ttf);
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold fs-1" style="font-family: Noto10;" href="index.php">Trang chủ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5 ms-3" style="font-family: Noto4;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?url=our_room">Room</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?url=facilities">Facilatis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?url=service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?url=gallery">Gallery</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-secondary" data-bs-toggle="modal"><a class="text-dark" style="text-decoration: none;" href="index.php?url=login">Book_now</a></button>
                    </form>
                    <form class="d-flex ms-2">
                        <button class="btn btn-outline-secondary" data-bs-toggle="modal"><a class="text-dark" style="text-decoration: none;" href="index.php?url=login">Login</a></button>
                    </form>
                </div>
            </div>
        </nav>
        <?php
//            $list_vochur = vochur($coupon_code);
        $price_view = "";
        $discount_view = "";
        if (is_array($list_vochur)) {
            extract($list_vochur);
            $discount = $list_vochur['discount'] / 100;
            $total = $discount * $price;
            $discount_view = $list_vochur['discount'] . "OFF";
            $price_view = $price - $total;
        } else {
            $tbao_error = "error";
        }
        $tbao_error = "";
//                    $discount_view = "";
//                    $price_view = '';
        if ($tbao_error) {
            echo $tbao_error;
        }
        ?>
        <div class="container">
            <?php
            $tongg = 0;
            $ledassss = $_SESSION['detail_room'];
            foreach ($ledassss as $htroo) {
                extract($htroo);
                $ttien = $htroo[7] * $htroo[8];
                $tongg += $ttien;
            }
            ?>
            <?php
            if (isset($_SESSION['user'])) {
                extract($_SESSION['user']);
                ?>
                <div class="col-md-3">
                    <form action="index.php?url=view_roomsledat" method="POST">
                        <div class="form-group">
                            <h4 class="text-warning">Mã Giảm Giá</h4>
                            <label>Nhập Vào Code</label>
                            <input class="form-control" type="text" name="coupon"/>
                            <input type="hidden" value="<?php echo $htroo[8] ?>" name="price"/>
                            <input name="safe"  type="submit" value="check">
                        </div>
                    </form>
                    <!--                    <div class="form-group">
                                            <label>Total Price</label>
                                            <h4><?php //echo $discount_view   ?></h4>
                                            <input class="form-control" type="number" value="<?php
//                        if (!$discount_view) {
                    // echo //$tongg;
//                        } else {
//                            echo $price_view;
//                        }
                    ?>" readonly="readonly"/>
                                            <h4><?php //echo //$price_view   ?></h4>
                                        </div>-->
                </div>
            </div>
            <?php
        } else {
            ?>

            <?php
        }
        ?>
        <?php
        $tb = '';
        foreach ($_SESSION['room'] as $rooms) {
//            var_dump($rooms);
            $check_out = $rooms['1'];
            $check_in = $rooms['0'];
            $ledassss = $_SESSION['detail_room'];
            foreach ($ledassss as $htro) {
                $name_phong = $htro['2'];
                // không thích thì chỉ cần so sách phòng của thằng này thôi 
//                $test_one = check_date($name_phong, $check_in, $check_out);
//                if (!$test_one) {
//                    $tb = '<a href="index.php?url=add_room"><input type="button" name="name" value="continue">';
//                } else {
//                    $tb = "đây là phòng đã tồn tại";
//                }
            }
        }
//        $test_one = check_date($name_phong, $check_in, $check_out);
//        var_dump($test_one);
//        if (!$test_one) {
//            echo "<script>window.location.href='index.php?url=view_rooms'</script>";
////                            header("location:index.php");
//        } else {
//            $tb = "đây là phòng đã tồn tại";
//            $_SESSION['detail_room'] = [];
//        }
        ?>
        <?php
//        if (sizeof($_SESSION['detail_room']) == 1) {
//            echo "";
//        } else {
//            $tk_test = $_SESSION['detail_room'];
//            foreach ($tk_test as $kh) {
//                extract($kh);
//                $lk_fs = $kh[6];
//            }
//                $tk_test1 = $_SESSION['detail'];
//                if(is_array($_SESSION['detail'])) {
//                    extract($_SESSION['detail']);
//                    var_dump($_SESSION['detail']);
//                    $lk_fs1 = $kh1[6];
//                    echo $lk_fs1;
//                    if ($lk_fs1==$lk_fs) {
//                        echo "le huy dat";
//                    } else {
//                        
//                    }
//                }
//            }
//        foreach ($tk_test as $te) {
//            extract($te);
//            $id = $te[6];
//        }
//        if(check_room_sp($id)>=0) {
//            check_room_sp($id);
////            echo $vitri;
////            check_again_two($vitri);
//        }
            ?>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <td>Id</td>
                                    <td>ảnh</td>
                                    <td>mã phòng</td>
                                    <td>mô tả</td>
                                    <td>giá tiền</td>
                                    <td>loại phòng</td>
                                    <td>tổng tiền</td>
                                    <td>thao tác</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                $tong = 0;
                                $ledasss = $_SESSION['detail_room'];
                                foreach ($ledasss as $htro) {
                                    $ttien = $htro[7] * $htro[8];
                                    $tong += $ttien;
                                    $hinhct = $htro['4'];
                                    $xoasp = '<a href="index.php?url=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a>';
                                    echo
                                    '<tr>
                                           <td>' . $htro[6] . '</td>
                                           <td><img src="' . $hinhct . '" alt = "" height = "80px"></td>'
                                    . '<td>' . $htro[2] . '</td> '
                                    . '<td>' . $htro[1] . '</td> '
                                    . '<td>' . $htro[3] . '</td> '
                                    . '<td>' . $htro[0] . '</td>'
                                    . '<td>' . $ttien . '</td>'
                                    . '<td>' . $xoasp . '</td> '
                                    . '</tr>';
                                    $i += 1;
                                }
                                ?>
                                <tr>
                                    <td colspan = "6">Tổng đơn hàng</td>
                                    <td><?php
                                        if (!$discount_view) {
                                            echo $tongg;
                                        } else {
                                            echo $price_view;
                                        }
                                        ?></td>
                                    <td><?php echo $discount_view ?></td> </tr>
                            </tbody>

                        </table>
                        <a href="index.php?url=add_room"><input type="button" name="name" value="continue"></a>
                        <?php // echo $tb;         ?>
                    </div>
                </div>
                <?php
//                            include './layout/footer.php';
                ?>