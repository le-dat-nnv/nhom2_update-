<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/5bf1290cf0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
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
    <body class="bg-light">
        <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between">
            <h3 class="mb-0 h-font">Trang Admin</h3>
            <a class="btn btn-light btn-sm">Đăng Xuất</a>
        </div>
        <div class="container-fluid" style="border-radius: 0px;">
            <div class="row">
                <div class="col-lg-3 bg-dark border-top border-3 border-secondary" style="">
                    <nav class="navbar navbar-expand-lg navbar-dark ">
                        <div class="container-fluid flex-lg-column align-items-stretch">
                            <h4 class="mt-2 text-light">ADMIN</h4>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2">
                                <ul class="nav nav-pills flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link text-white fs-5" href="index.php?url=type_room">Loại phòng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white fs-5" href="index.php?url=phong">Đơn Đặt Phòng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white fs-5" href="index.php?url=rooms">Phòng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white fs-5" href="index.php?url=ct_phong">Chi tiết đơn phòng</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white fs-5" href="index.php?url=service">Dịch Vụ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white fs-5" href="index.php?url=list_setting">Setting</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white fs-5" href="index.php?url=vochur">Mã khuyến mãi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white fs-5" href="index.php?url=gallery_room">Gallery</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white fs-5" href="index.php?url=facilities">Facilities</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white fs-5" href="index.php?url=thongke">Thống kê</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white fs-5" href="index.php?url=slide_showadd">Slide show</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white fs-5" href="index.php?url=list_account">Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white fs-5" href="index.php?url=list_comment">Bình Luận</a>
                                    </li>
                                </ul>
                            </div>
                    </nav>
<!--                                        <div class=" card-body " >
                                           <ul class="list-group" style=" border-radius: 0px; margin-left: -23px;">
                                                <a style="text-decoration: none;" href="index.php?url=type_room"><li class="list-group-item bg-dark border-0 text-white "><i style="margin-right: 10px" class="fa-solid fa-cart-shopping text-white"></i>Loại Phòng</li></a>
                                                <a style="text-decoration: none;" href="index.php?url=phong"><li class="list-group-item bg-dark border-0 text-white"><i style="margin-right: 10px" class="fa-solid fa-cart-shopping text-white"></i>Đơn Đặt Phòng</li></a>
                                                <a style="text-decoration: none;" href="index.php?url=rooms"><li class="list-group-item bg-dark border-0 text-white"><i  style="margin-right: 10px"class="fa-solid fa-cart-shopping text-white"></i>Rooms</li></a>
                                                <a style="text-decoration: none;" href="index.php?url=ct_phong"><li class="list-group-item bg-dark border-0 text-white"><i style="margin-right: 10px" class="fa-solid fa-cart-shopping text-white"></i>Chi tiết đơn hàng</li></a>
                                                <a style="text-decoration: none;" href="index.php?url=ldichvu"><li class="list-group-item bg-dark border-0 text-white"><i style="margin-right: 10px" class="fa-solid fa-cart-shopping text-white"></i>Loại Dịch Vụ</li></a>
                                                <a style="text-decoration: none;" href="index.php?url=service"><li class="list-group-item bg-dark border-0 text-white"><i style="margin-right: 10px" class="fa-solid fa-cart-shopping text-white"></i>Dịch vụ</li></a>
                                                <a style="text-decoration: none;" href="index.php?url=book_service"><li class="list-group-item bg-dark border-0 text-white"><i style="margin-right: 10px" class="fa-solid fa-cart-shopping text-white"></i>Đơn Đặt Dịch Vụ</li></a>
                                                <a style="text-decoration: none;" href="index.php?url=list_setting"><li class="list-group-item bg-dark border-0 text-white"><i style="margin-right: 10px" class="fa-solid fa-cart-shopping text-white"></i>Setting</li></a>
                                                <a style="text-decoration: none;" href="index.php?url=slide_showadd"><li class="list-group-item bg-dark border-0 text-white"><i style="margin-right: 10px" class="fa-solid fa-cart-shopping text-white"></i>Slider Show</li></a>
                                                <a style="text-decoration: none;" href="index.php?url=facilities"><li class="list-group-item bg-dark border-0 text-white"><i style="margin-right: 10px" class="fa-solid fa-cart-shopping text-white"></i>Facilities</li></a>
                                                <a style="text-decoration: none;" href="index.php?url=gallery_room"><li class="list-group-item bg-dark border-0 text-white"><i style="margin-right: 10px" class="fa-solid fa-cart-shopping text-white"></i>Gallery</li></a>
                                                <a style="text-decoration: none;" href="index.php?url=list_comment"><li class="list-group-item bg-dark border-0 text-white"><i style="margin-right: 10px" class="fa-solid fa-cart-shopping text-white"></i>Bình Luận</li></a>
                                                <a style="text-decoration: none;" href="index.php?url=thongke"><li class="list-group-item bg-dark border-0 text-white"><i style="margin-right: 10px" class="fa-solid fa-cart-shopping text-white"></i>Thống Kê</li></a>
                                                <a style="text-decoration: none;" href="index.php?url=list_account"><li class="list-group-item bg-dark border-0 text-white"><i style="margin-right: 10px" class="fa-solid fa-cart-shopping text-white"></i>Account</li></a>
                                            </ul>
                    </div>-->
                </div>
                <?php
                // }
//                else {
//                    
//                }
                ?>
                <div class="col-lg-9">

