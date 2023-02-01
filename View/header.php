<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            .availability-form{
                margin-top: -50px;
                position: relative;
                z-index: 1;
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
                background: #F57C00;
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
            .fontt{
                width:100%;
                height:100%;
                background-color:#F57C00;
            }
        </style>
    </head>
    <body>
        <?php
//        $tbhuy_phong="";
//        if ($tbhuy_phong) {
//        echo $tbhuy_phong;
//    }?>
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
                    
                    <?php
                    if (isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                        ?>
                        <!--                    <h3 style="margin-left: 20px;">
                        <?php
//                                                var_dump($_SESSION['user'])
//                        
                        ?>
                                            </h3>-->
                        <h3 class="me-3 mt-2">xin chào <?= $username ?></h3>
                        <form class="d-flex ms-2">
                            <button class="btn btn-outline-secondary" data-bs-toggle="modal"><a class="text-dark" style="text-decoration: none;" href="index.php?url=login_form">PERSON</a></button>
                        </form>
                        <!--                        <div class="clone3">
                                                    <div class="tab">
                                                        <li><a href="action.php?acti=edit_tk">sửa tài khoản</a></li>
                                                        <li><a href="action.php?acti=dangky">đăng ký</a></li>
                        <?php if ($leve == 1) {
                            ?> 
                                                                                        <li><a href="index.php">admin</a></li>
                                                                                        
                        <?php } ?>
                                                        <li><a class="tablinks" href="action.php?acti=quenmk">quên pass</a></li>
                                                        <li><a href="action.php?acti=thoat">thoát</a></li>
                                                    </div>
                                                </div>-->
                        <?php
                    } else {
                        ?>
                        <form class="d-flex ms-2">
                            <button class="btn btn-outline-secondary" data-bs-toggle="modal"><a class="text-dark" style="text-decoration: none;" href="index.php?url=login">LOGIN_IN</a></button>
                        </form>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </nav>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php
                $i = 0;
                foreach ($slide_show as $show) {
                    extract($show);
                    $hinhpath = './upload/' . $image;
                    if ($i == 0) {
                        $gan = 'carousel-item active';
                    } else {
                        $gan = "carousel-item";
                    }
                    ?>
                    <div class="<?php echo $gan; ?>">
                        <img style="height: 500px;" src ="<?= $hinhpath ?>" class = "d-block w-100" alt = "...">
                    </div>
                    <?php
                    $i++;
                }
                ?>
                <button class = "carousel-control-prev" type = "button" data-bs-target = "#carouselExampleIndicators" data-bs-slide = "prev">
                    <span class = "carousel-control-prev-icon" aria-hidden = "true"></span>
                    <span class = "visually-hidden">Previous</span>
                </button>
                <button class = "carousel-control-next" type = "button" data-bs-target = "#carouselExampleIndicators" data-bs-slide = "next">
                    <span class = "carousel-control-next-icon" aria-hidden = "true"></span>
                    <span class = "visually-hidden">Next</span>
                </button>
            </div>
            <div class="container availability-form">
                <div class="row">
                    <div class="col-lg-12 bg-white shadow p-4 rounded">
                        <h5>check king</h5>
                        <form name="pk1" action="index.php?url=our_room" method="POST" onsubmit="return validateForm1()">
                            <div class="row align-items-end" style="height:100px ">
                                <div class="col-lg-3">
                                    <label class="form-lable" style="font-weight: 500">check_in</label>
                                    <input type="text" class="form-control shadow-none" name="check_in" id="txtCheckin" name="trip-start"/>
                                </div>
                                <div class="col-lg-3">
                                    <label class="form-lable" style="font-weight: 500">check_out</label>
                                    <input  type="text" class="form-control shadow-none" name="check_out" id="txtCheckout" name="trip-start" value="<?php
//                                    date_default_timezone_set("Asia/Ho_Chi_Minh");
//                                    echo date('Y-m-d');
                                    ?>" />
                                    <script>
                                        $(document).ready(function () {
                                            $("#txtCheckin").datepicker({
                                                dateFormat: "dd-M-yy",
                                                onSelect: function (date) {
                                                    var date2 = $('#txtCheckin').datepicker('getDate');
                                                    date2.setDate(date2.getDate());
                                                    $('#txtCheckout').datepicker('setDate', date2);
                                                    //sets minDate to dateofbirth date + 1
                                                    $('#txtCheckout').datepicker('option', 'minDate', date2);
                                                }
                                            });
                                            $('#txtCheckout').datepicker({
                                                dateFormat: "dd-M-yy",
                                                onClose: function () {
                                                    var dt1 = $('#txtCheckin').datepicker('getDate');
                                                    console.log(dt1);
                                                    var dt2 = $('#txtCheckout').datepicker('getDate');
                                                    if (dt2 <= dt1) {
                                                        var minDate = $('#txtCheckout').datepicker('option', 'minDate');
                                                        $('#txtCheckout').datepicker('setDate', minDate);
                                                    }
                                                }
                                            });
                                        });
                                    </script>
                                </div>  
                                <div class="col-lg-3">
                                    <label class="form-lable" style="font-weight: 500">adults</label>
                                    <select class="form-select shadow-none" name="adults">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div> 
                                <div class="col-lg-2">
                                    <label class="form-lable" style="font-weight: 500">chirlren</label>
                                    <select class="form-select shadow-none" name="children">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div> 
                                <div class="col-lg-1">
                                    <input type="submit" name="addtocart" value="book" class="form-submit btn btn-outline-secondary shadow-none ">
                                </div>
                            </div>
                            <script>
                                function validateForm1() {
                                    let x = document.forms["pk1"]["check_in"].value;
                                    let y = document.forms["pk1"]["check_out"].value;
                                    if (x == "") {
                                        alert("Vui lòng nhập vào check_in");
                                        return false;
                                    }
                                    if (y == "") {
                                        alert("Vui lòng nhập vào check_out");
                                        return false;
                                    }
                                }
                            </script>
                        </form>
                    </div>
                </div>
            </div>
            <h2 class="mt-5 pt-4 mb-4 fw-bold h-font text-center" style="font-family: Noto11; font-size: 70px">Our room</h2>
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($showroom as $go) {
                        extract($go);
                        $hinhpa = './upload/' . $img_room;
                        echo '<div class="col-lg-4 col-md-6 my-5">
                    <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                        <img class="card-img-top" style="height: 300px" src="' . $hinhpa . '" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">' . $name . '</h5>
                            <h6 class="mb-1">' . $don_gia . ' percen night</h6>
                            <div class="facilities mb-4 mt-2">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">room</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">room1</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">room2</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">room3</span>
                            </div>
                            <div class="d-flex mt-3">
                                <a href="#" id="pk1" class="btn btn-primary text-white custom-bg shadow-none">book_now</a>
                            </div>
                        </div>
                    </div>
                </div>';
                    }
                    ?>
                    <div class="col-lg-12 text-center mt-5">
                        <a class="btn btn-sm btn-outline-secondary rounded-0 fw-bold shadow-none" style="font-family: Noto7; font-size: 20px">room</a>
                    </div>
                </div>
            </div>
            <h2 class="mt-5 pt-4 mb-4 fw-bold h-font text-center" style="font-family: Noto11; font-size: 70px">Đồ dùng đây đủ</h2>
            <div class="container">
                <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                    <?php
                    foreach ($show_facilities as $fac) {
                        extract($fac);
                        $hinhpff = './upload/' . $icon;
                        ?>
                        <div class="col-lg-2 col-sm-2 text-center bg-white rounded shadow py-4 my-3">
                            <img style="width: 80px" src="<?php echo $hinhpff ?>"alt="alt"/>
                            <h5 class="mt-3"><?= $tieu_de ?></h5>
                            <p><?= $mo_ta ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <h2 class="mt-5 pt-4 mb-4 fw-bold h-font text-center" style="font-family: Noto11; font-size: 70px">Service</h2>
            <div class="container">
                <?php
                $n = 0;
                $important = '';
                $important1 = '';
                $row = "";
                foreach ($show_service as $to) {
                    extract($to);
                    $hinhpt = './upload/' . $img_service;
                    if ($n == 0) {
                        $row = "row";
                        $important = '<img style="height:348px;" src="' . $hinhpt . '" class="img-fluid rounded-start w-100" alt="...">';
                        $important1 = '<div class="card-body">
                                        <h5 class="card-title mt-3 ms-5" style="font-family: Noto11; font-size: 30px">' . $ten_dv . '</h5>
                                        <p class="card-text w-100 mt-3" style="font-family: Noto2; font-size: 20px">' . $mo_ta . '</p>
                                        <p class="card-text"><small class="text-muted">' . $price . '</small></p>
                                    </div>';
                    } else {
                        $row = "row mb-4 mt-5 pt-4";
                        $important = '<div class="card-body">
                                        <h5 class="card-title" style="font-family: Noto11; font-size: 30px">' . $ten_dv . '</h5>
                                        <p class="card-text" style="font-family: Noto2; font-size: 20px">' . $mo_ta . '</p>
                                        <p class="card-text"><small class="text-muted">' . $price . '</small></p>
                                    </div>';
                        $important1 = '<img style="height:348px;" src="' . $hinhpt . '" class="img-fluid rounded-start w-100" alt="...">';
                    }
                    ?>
                    <div class="<?php echo $row; ?>" >
                        <div class="col-lg-12 ">
                            <div class="card mb-3 border-1-light bg-light rounded shadow" style="height: 350px">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <?php echo $important; ?>
                                        <!--<img style="height:348px;" src="<?php // echo $hinhpt              ?>" class="img-fluid rounded-start w-100" alt="...">-->
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo $important1; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $n++;
                }
                ?>
            </div>
            <h2 class="mt-5 pt-4 mb-4 fw-bold h-font text-center" style="font-family: Noto11; font-size: 70px">Gallery</h2>
            <div class="container">
                <div class="swiper swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($trave_gallery as $go_to) {
                            extract($go_to);
                            $hinhpc = './upload/' . $img_room;
                            echo '
                        <div class="swiper-slide swiper-slide_h1 ">
                            <img style="height:300px" src="' . $hinhpc . '" />
                        </div>
                    ';
                        }
                        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <h2 class="mt-5 pt-4 mb-4 fw-bold h-font text-center" style="font-family: Noto11; font-size: 70px">Đánh giá về sản phẩm</h2>
            <div class="container">
                <div class="row mb-4 mt-5 pt-4">
                    <?php
                    foreach ($trave_binhluan as $action) {
                        extract($action);
                        ?>
                        <div class="col-md-4">
                            <div class="card "> <i class="fa fa-quote-left u-color"></i>
                                <p><?= $noi_dung ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="user-about"> <span class="font-weight-bold d-block">Alex Smith</span> <span class="u-color">Designer | Developer</span>
                                        <div class="d-flex flex-row mt-1"> <i class="fa fa-star u-color"></i> <i class="fa fa-star u-color"></i> <i class="fa fa-star-o u-color"></i> <i class="fa fa-star-o u-color"></i> <i class="fa fa-star-o u-color"></i> </div>
                                    </div>
                                    <div class="user-image"> <img src="https://i.imgur.com/UUW3zLx.jpg" class="rounded-circle" width="70"> </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <?php
            foreach ($trave_setting as $neraly) {
                extract($neraly);
            }
            ?>
            <h2 class="mt-5 pt-4 mb-4 fw-bold h-font text-center" style="font-family: Noto11; font-size: 70px">Liên hệ với chúng tôi</h2>
            <div class="container mb-3">
                <div class="row">
                    <div class="col-md-8 col-md-8 pt-4 mb-lg-0 mb-3 bg-white rounded">
                        <iframe height="320px" class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8638558813786!2d105.74459841396619!3d21.038132792836336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1668381821016!5m2!1svi!2s"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="bg-white p-4 rounded mb-4">
                            <h5>call us</h5>
                            <a href="# 3333333" class="d-inline-block mb-2 text-decoration-none text-dark">
                                99999999999999
                            </a>
                        </div>
                        <div class="bg-white p-4 rounded mb-4">
                            <h5>call us</h5>
                            <a href="# 3333333" class="d-inline-block mb-2 text-decoration-none text-dark">
                                99999999999999
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid justify-content-center px-0 mt-5 shadow rounded" style="background-color: #F57C00 ; height: 300px;">
                <div class="row justify-content-around mb-0 pt-5 mx-4 ">
                    <div class="col-xl-2 col-md-3 pt-4 order-1">
                        <ul class="list-unstyled">
                            <li class="mt-md-0 mt-4">Trường cao đăng FPT POLYTECHNIC</li>
                            <li>Trịnh Văn Bô </li>
                            <li>Core Features</li>
                            <li>Product Features</li>
                            <li>Pricing</li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-md-4 pt-4 order-2">
                        <ul class="list-unstyled">
                            <li class="mt-md-0 mt-4">rooms website of group two</li>
                            <li>facilities website of group two</li>
                            <li>service website of group two</li>
                            <li>gallery website of group two</li>
                            <li>contact website of group two</li>
                        </ul>
                    </div>
<!--                    <div class="col-xl-auto col-md-3 pt-4 my-sm-0 order-md-2 ">
                        <ul class="list-unstyled">
                            <li class="mt-md-0 mt-4">Offer</li>
                            <li>Intergrated Security </li>
                            <li>Core Features</li>
                            <li>Product Features</li>
                            <li>Pricing</li>
                        </ul>
                    </div>-->
                    <div class="col-xl-auto col-md-6 col-12  pt-4 my-sm-0 order-md-2 ">
                        <div class="form-group ">
                            <label for="email" class="mb-3">
                                <b>Subscribe to our newsletter and Get 10% off</b>
                            </label><input type="email" class="form-control form-control-lg" placeholder="Enter email" id="email">
                        </div>
                        <button type="button" class="btn btn-primary btn-lg btn-block my-2 Subscribe mt-4 mb-3">Subscribe</button></div>
                </div>
                <div style="text-align: center;">
                    NHÓM 2 THIẾT KẾ
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
            <script>
                                var swiper = new Swiper(".mySwiper", {
                                    spaceBetween: 30,
                                    effect: "fade",
                                    navigation: {
                                        nextEl: ".swiper-button-next",
                                        prevEl: ".swiper-button-prev",
                                    },
                                    pagination: {
                                        el: ".swiper-pagination",
                                        clickable: true,
                                    },

                                });
                                var swiper = new Swiper('.swiper-container', {
                                    pagination: '.swiper-pagination',
                                    effect: 'coverflow',
                                    grabCursor: true,
                                    centeredSlides: true,
                                    slidesPerView: 'auto',
                                    coverflow: {
                                        rotate: 50,
                                        stretch: 0,
                                        depth: 100,
                                        modifier: 1,
                                        slideShadows: true
                                    },
                                    loop: true
                                });
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
