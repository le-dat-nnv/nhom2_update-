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
            <div class="row" style="max-height: 300px;">
                <div class="col-lg-12 bg-light rounded shadow mb-4">
                    <?php
                    $tbao = '';
                    if (is_array($tt)) {
                        extract($tt);
                        if ($tt['status'] == 1) {
                            $tbao = " xử lý thành công";
                        } else if ($tt['status'] == 2) {
                            $tbao = 'chờ xử lý sau';
                        } else {
                            $tbao = 'đang chờ đươc xử lý';
                        }
                    }
                    ?> 
                    <h5 class="alert alert-primary" role="alert" style="width:102%; margin-left: -1%">
                        <?php echo $tbao; ?>
                    </h5>
                    <h5 style="text-align: center" class="">mã đơn hàng của bạn là <?php echo $tt["id_booking"] ?></h5>
                </div>
                <?php
                ?>
                <div class="col-lg-12 mb-4 bg-light rounded shadow ">
                    <h5 class="alert alert-primary" role="alert" style="width:102%; margin-left: -1%">
                        Thông Tin Người Đặt Hàng
                    </h5>
                    <h6><?php echo $tt['name_kh'] ?></h6>
                    <h6><?php echo $tt['email'] ?></h6>
                    <h6><?php echo $tt['sdt'] ?></h6>
                    <h6><?php echo $tt['address'] ?></h6>
                </div>
                <div class="col-lg-12 bg-light rounded shadow">
                    <?php
                    ?>
                    <h5 class="alert alert-primary" role="alert" style="width:102%; margin-left: -1%">
                        Thông tin về đơn hàng
                    </h5>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <td>Id</td>
                                <td>ảnh</td>
                                <td>mã phòng</td>
                                <td>giá tiền</td>
                                <td>id_type_room</td>
                                <td>thao tác</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($tt['status'] == 2) {
                                echo "";
                            }
                            if ($tt['status'] == 1) {
                                echo "";
                            }
                            else {
                                $xoaty = "index.php?url=huy&ma_r=" . $tt["id_booking"];
                                echo '<a href=' . $xoaty . '><input class="mb-2" type="button" value="hủy đơn"/></a>';
                            }
                            ?>
                            <?php
                            $tv = informatin_cart_new($tt["id_booking"]);
//                            $xoadh = delete_room_booked($ttt["id_booking"]);
                            foreach ($tv as $ttt) {
                                extract($ttt);
//                                var_dump($ttt);
                                $ma_p = $ttt['ma_rooms'];
                                $tf = infor($ttt['id_type_rooms']);
                                if (is_array($tf)) {
                                    extract($tf);
                                }
                                $hinhctsk = './upload/' . $ttt['img_room'];
                                echo
                                '<tr>
                               <td>' . $ttt['id_room'] . '</td>
                               <td><img src="' . $hinhctsk . '" alt = "" height = "80px"></td>'
                                . '<td>' . $ma_p . '</td> '
                                . '<td>' . $don_gia . '</td> '
                                . '<td>' . $name . '</td> '
                                . '<td></td> '
                                . '</tr>';
                            }
                            ?>
                            <?php
                            echo '<tr>
                                    <td colspan = "6">Tổng đơn hàng</td>
                                    <td></td> </tr>';
                            ?>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
        <?php
//                              include './layout/footer.php';
        ?>