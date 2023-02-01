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
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?url=contact">Contact</a>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-3 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-12 mb-4">
                                <div class="row px-3 mb-3">
                                    <div class="col-12 mb-4">
                                        <h4>Nhập Thông Tin</h4>
                                        <span class="text-muted">Please make the payment to start enjoying all the features of our premium plan as soon as possible</span>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-2">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" placeholder="Họ Và Tên">
                                            <label>Họ Và Tên</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-2">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" placeholder="Email">
                                            <label>Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-2">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" placeholder="Số Điện Thoại">
                                            <label>Số Điện Thoại</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-2">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" placeholder="Địa Chỉ">
                                            <label>Địa Chỉ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-3">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" placeholder="Check In">
                                            <label>Check In</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-3">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" placeholder="Check Out">
                                            <label>Check Out</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-3">
                                        <div class="form-floating">
                                            <select class="form-select">
                                                <option selected="" hidden="">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <label>ADULTS(18+)</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 mb-3">
                                        <div class="form-floating">
                                            <select class="form-select">
                                                <option selected="" hidden="">Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                            <label>CHILDREN(0-17)</label>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button class="btn btn-secondary text-uppercase" type="button">Close</button>
                                        <button class="btn btn-primary text-uppercase" type="button">SHOWN FLIGHTS<i class="fa fa-plane ms-3"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="navbar bg-white rounded shadow ">
                        <h6 class="mt-2 ms-1">Chi tiết phòng</h6>
                        <div class=" container-fluid border bg-light p-3 rounded mb-3 ms-1 w-100 me-1">
                            <img class="w-100" src="Designer/image/hotel.png" alt="alt"/>
                        </div>
                        <div class="border bg-light p-3 rounded mb-3 ms-1 w-100 me-1 ">
                             <h5>TÊN LOẠI PHÒNG</h5>
                            <h5>MÃ PHÒNG</h5>
                        </div>
                        <div class="border bg-light p-3 rounded mb-3 ms-1 w-100 me-1 ">
                             <h5>TÊN LOẠI PHÒNG</h5>
                            <h5>MÃ PHÒNG</h5>
                        </div>
                        <div class="border bg-light p-3 rounded mb-3 ms-1 w-100 me-1 ">
                             <h5>TÊN LOẠI PHÒNG</h5>
                            <h5>MÃ PHÒNG</h5>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <?php
        foreach ($_SESSION['room'] as $rooms) {
//            echo $rooms[1];
//            var_dump($rooms);
//    echo $a;
        }
        ?>
        <!--        <div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                            <h6>Thêm thông tin về loại phòng</h6>
                        </div>
                        <h6 class="text-right">Edit Profile</h6>
                    </div>
                    <form action="index.php?url=booking_room" method="POST">
                        <div class="row mt-2">
                            <div class="col-md-6"><input type="number" name="ma_room" class="form-control" placeholder="Auto" disabled="" ></div>
                            <div class="col-md-6"><input type="text" name="name_room" class="form-control" placeholder="Auto" ></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><input type="number" name="ma_type" class="form-control" placeholder="mã phòng"></div>
                            <div class="col-md-6"><input type="text" name="name_type_room" class="form-control" placeholder="tên phòng"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><input type="text" name="des" class="form-control" placeholder="mô tả"></div>
                            <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="tên khách hàng"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><input type="text" name="email" class="form-control" placeholder="email"></div>
                            <div class="col-md-6"><input type="text" name="sdt" class="form-control" placeholder="số điện thoại"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><input type="text" name="address" class="form-control" placeholder="địa chỉ"></div>
                            <div class="col-md-6"><input type="number" name="adults" class="form-control" placeholder="số người lớn" value="<?php echo $rooms[2] ?>"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><input type="number" name="childrens" class="form-control" placeholder="số trẻ em" value="<?php echo $rooms[3] ?>"></div>
                            <div class="col-md-6"><input type="number" name="price" class="form-control" placeholder="đơn giá"></div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><input type="date" name="check_in" class="form-control" placeholder="check_in" value="<?php echo $rooms[0] ?>"></div>
                            <div class="col-md-6"><input type="date" name="check_out" class="form-control" placeholder="check_out" value="<?php echo $rooms[1] ?>"></div>
                        </div>
                        <div class="mt-3 text-right">
                            <input class="btn btn-primary profile-button" type="submit" name="guikqua" value="book"><input class="btn btn-primary profile-button ms-2" type="reset" value="nhập lại"></div>
                    </form>
                </div>-->