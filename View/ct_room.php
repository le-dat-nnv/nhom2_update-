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
            .reply a {

                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <?php include 'layout/header.php'; ?>
        <div class="container my-5">
            <div class="row">
                <?php
                extract($onesp);
                $hinh = "./upload/" . $img_room;
                $ma_hh = $id_room;
                ?>
                <div class="col-md-5">
                    <div class="main-img">
                        <img class="img-fluid" src="<?php echo $hinh ?>" alt="ProductS">
                        <div class="row my-3 previews">
                            <div class="col-md-3">
                                <img class="w-100" src="<?php echo $hinh ?>" alt="Sale">
                            </div>
                            <div class="col-md-3">
                                <img class="w-100" src="<?php echo $hinh ?>" alt="Sale">
                            </div>
                            <div class="col-md-3">
                                <img class="w-100" src="<?php echo $hinh ?>" alt="Sale">
                            </div>
                            <div class="col-md-3">
                                <img class="w-100" src="<?php echo $hinh ?>" alt="Sale">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="main-description px-2">
                        <div class="category text-bold">
                            <?php echo $name ?>
                        </div>
                        <div class="product-title text-bold my-3">
                            Black dress for Women
                        </div>


                        <div class="price-area my-4">
                            <p class="old-price mb-1"><del>$100</del>
                                <span class="old-price-discount text-danger">(20% off)</span></p>
                            <p class="new-price text-bold mb-1"><?php echo $don_gia . '     ' . "VND" ?></p>
                            <p class="text-secondary mb-1">(Additional tax may apply on checkout)</p>
                        </div>
                        <div class="buttons d-flex my-5">
                            <div class="block">
                                <input type="submit" name="view_room" value="add_book_room" class="btn btn-sm btn-outline-success shadow-none w-100">
                            </div>
                        </div>
                    </div>

                    <div class="product-details my-4">
                        <p class="details-title text-color mb-1">Product Details</p>
                        <p class="description"><?php echo $mo_ta ?></p>
                    </div>
                    <div class="product-details my-4">
                        <p class="details-title text-color mb-2">Material & Care</p>
                        <ul>
                            <li>Cotton</li>
                            <li>Machine-wash</li>
                        </ul>
                    </div>
                    <div class="product-details my-4">
                        <p class="details-title text-color mb-2">Sold by</p>
                        <ul>
                            <li>Cotton</li>
                            <li>Machine-wash</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h5 class="alert alert-primary" role="alert" style="width:102%;">
                BÌNH LUẬN
            </h5>
            <div>
                <div class="container" style="width:102%;">
                    <div class="row bg-white shadow rounded mb-4">
                        <div class="col-lg-12">
                            <form action="index.php?url=binh_luan" method="POST">
                                <br>
                                <input type="hidden" name="ma_room" value="<?php echo $ma_hh ?>">
                                <div class="form-floating mb-3">
                                    <textarea name="noidung" class="form-control border-1-light" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                    <label for="floatingTextarea">Comments</label>
                                </div>
                                <input type="submit" value="POST COMMENT" name="data">
                            </form>
                        </div>
                        <?php
                        $dsbl = loadall_binhluan($ma_hh);
                        foreach ($dsbl as $bl) {
                            extract($bl);
//                            echo'    <tr>
//                            <td>' . $noi_dung .'</td>
//                            <td>' . $ma_hh . '</td>
//                            <td>' . $ngay_bl . '</td>
//                                      
//                                        </tr>';
                            ?>
                            <div class="col-lg-1">
                                <div class="mb-2 mt-3">
                                    <img style="height: 70px; width: 70px; border-radius: 50%;" src="Designer/image/banner.png" alt="alt"/>
                                </div>
                            </div>
                            <div class="col-lg-11 bg-white shadow rounded mt-3 border-5" style="width: 91%;">
                                <div class="d-flex">
                                    <h3><?php echo $ma_kh ?></h3> <span class="mt-2 ms-3"><?php echo $ngay_bl ?></span>
                                </div>
                                <p><?php echo $noi_dung ?>
                                    <a id="info"><span><i class="fa fa-reply"></i>reply</span></a>
                                </p>
                            </div>
                            <div class="col-md-7">

                            </div>
                            <div id="myDiv" class="col-md-5"> 
                                <form action="index.php?url=binh_luan" method="POST">
                                    <br>
                                    <input type="hidden" name="ma_room" value="<?php echo $ma_hh ?>">
                                    <div class="form-floating mb-3">
                                        <textarea name="noidung" class="form-control border-1-light" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                        <label for="floatingTextarea">Comments</label>
                                    </div>
                                    <input type="submit" value="POST COMMENT" name="data">
                                </form>
                            </div>
                        <?php } ?>
                        <script>
                            var button = document.getElementById("info");
                            var myDiv = document.getElementById("myDiv");

                            function show() {
                                myDiv.style.visibility = "visible";
                            }

                            function hide() {
                                myDiv.style.visibility = "hidden";
                            }

                            function toggle() {
                                if (myDiv.style.visibility === "hidden") {
                                    show();
                                } else {
                                    hide();
                                }
                            }

                            hide();

                            button.addEventListener("click", toggle, false);
                        </script>
                    </div>
                </div>
                <?php
                // put your code here
                ?>
                </body>
                </html>
