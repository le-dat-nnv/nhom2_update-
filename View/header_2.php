<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="admin/designer/style_1_1.css"/>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!--JavaScript Bundle with Popper--> 
        <script src="https://kit.fontawesome.com/5bf1290cf0.js" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
    <body>
        <div>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <div class="container-fluid">
                    <!-- Links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?url=trainghiem">trải nghiệm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?url=uudai">ưu đãi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?url=organation">tổ chức tiệc</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?url=wedding">đám cưới</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?url=service">dịch vụ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?url=introduce">giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?url=contact">liên hệ</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="index.php?url=lphong">loại phòng</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="index.php?url=login">đăng nhập</a>
                        </li>
                        <button class="nav-link distance" onclick="document.getElementById('id01').style.display = 'block'" style="width:auto;"><li>đặt phòng</li></button>
                        <div id="id01" class="modal">
                            <form action="index.php?url=book" method="POST">
                                <div class="backgro">
                                    <div class="row">
<!--                                        <div class="col-sm-4 ">
                                            <div class="box1">
                                                <select name="ma_room">
                                                    <?php
                                                    foreach ($travebooking as $tv) {
                                                        extract($tv);
                                                        var_dump($tv);
                                                        echo '<option value=" ' . $code_room . '">' . $name_room . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>-->
                                        <div class="col-sm-4 ">
                                            <div class="box1">
                                                số lượng người </br>
                                              <input type="number" name="adults">
                                            </div>
                                            <div class="box1">
                                                số lượng người </br>
                                                <input type="date" name="check_in">
                                            </div>
                                            <div class="box1">
                                                đơn giá </br>
                                                <input type="number" name="price">
                                            </div>
                                        </div>
                                        <div class="col-sm-4 ">
                                            <div class="box1">
<!--                                                <input type="submit" name="list_p" value="đặt phòng">-->
                                               <input type="submit" name="addtocart" value="đặt phòng">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </ul>
                </div>
            </nav>
<!--            <div class="box_one">
                <img class="box_one" src="Designer/image/banner.png" alt="alt"/>
            </div>
            <div class="container ">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box_two">
                            <h2>WELCOME HOTEL TO FIVE START</h2>
                            <img class="logo" src="Designer/image/hotel.png" alt="alt"/>
                            <p>chưa biết nên ghi thông tin gì cả kia</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-sm-4 ">
                        <div class="box_three">
                            <img class="box_three" src="Designer/image/img_part3.jpg" alt="alt"/>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                         <div class="box_three">
                            <img class="box_three" src="Designer/image/img_part3.jpg" alt="alt"/>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                         <div class="box_three">
                            <img class="box_three" src="Designer/image/img_part3.jpg" alt="alt"/>
                        </div>
                    </div>
                </div>
                <div class="box_four">
                    <button>xem thêm</button>
                </div>
                <div class="box_one">
                    <img class="box_one" src="Designer/image/view_special.png" alt="alt"/>
                </div>
                <div class="row ">
                    <div class="col-sm-4 ">
                        <div class="box_three">
                            <img class="box_three" src="Designer/image/img_part3.jpg" alt="alt"/>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                        <div class="box_three">
                            <img class="box_three" src="Designer/image/img_part3.jpg" alt="alt"/>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                        <div class="box_three">
                            <img class="box_three" src="Designer/image/img_part3.jpg" alt="alt"/>
                        </div>
                    </div>
                </div>
                <div class="box_one pacing">
                    <img class="box_one" src="Designer/image/danh_gia.jpg" alt="alt"/>
                </div>
                <div class="row ">
                    <div class="col-sm-4 ">
                        <div class="box_five">
                            <img class="box_five" src="Designer/image/img_part3.jpg" alt="alt"/>
                            <p class="kh">cách đánh giá của khách hàng</p>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                        <div class="box_five">
                            <img class="box_five" src="Designer/image/img_part3.jpg" alt="alt"/>
                            <p class="kh">cách đánh giá của khách hàng</p>
                        </div>
                    </div>
                    <div class="col-sm-4 ">
                        <div class="box_five">
                            <img class="box_five" src="Designer/image/img_part3.jpg" alt="alt"/>
                            <p class="kh">cách đánh giá của khách hàng</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box_one pacing">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="box_five">

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box_five">

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box_five">

                        </div>
                    </div>
                </div>
                <p class="kh">thiết kế footer</p>
            </div>
        </div>-->
        <?php
        // put your code here
        // thưc hiện code demo cho các bạn nhé 
        ?>
        <script>
            var modal = document.getElementById('id01');
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

        </script>
    </body>
</html>
