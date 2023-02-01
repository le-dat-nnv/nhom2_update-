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
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold fs-3 h-font" href="index.php">Trang chủ</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mb-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
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
                            <a class="nav-link active" aria-current="page" href="index.php?url=gallery">gallery</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php
//        include '../../layout/header.php';
        ?>
        <table class="shower" border="1">
            <thead>
                <tr>
                    <td>số phòng</td>
                    <td>id</td>
                    <td>ma_rooms</td>
                    <td>đơn giá</td>
                    <td>id_type_rooms</td>
                    <td>mô tả</td>
                    <td>tên loại phòng</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($travebooking as $tv) {
                    extract($tv);
//                    echo "<h3>".$tv['name']."</h3>";
//                }
                    ?>
                    <tr>
                        <td><form action="index.php?url=money" method="POST">
                                <select name="sl_room">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <td><?php echo $tv['id_room'] ?></td>
                                <td><?php echo $tv['ma_rooms'] ?></td>
                                <td><?php echo $tv['don_gia'] ?></td>
                                <td><?php echo $tv['id_type_rooms'] ?></td>
                                <td><?php echo $tv['mo_ta'] ?></td>
                                <td><?php echo $tv['name'] ?></td>
                                <input type="hidden" name="price" value="<?php echo $tv['don_gia'] ?>">
                                <input type="submit" name="vnd" value="đặt phòng"/>
                            </form></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
