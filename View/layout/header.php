<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
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
        <?php
        // put your code here
        ?>
    </body>
</html>
