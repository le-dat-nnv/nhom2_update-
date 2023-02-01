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
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!--JavaScript Bundle with Popper--> 
        <script src="https://kit.fontawesome.com/5bf1290cf0.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
//        foreach ($travebooking as $tv) {
//            extract($tv);
//        }
//        // có thể lấy 1 dữ liueej
//        
        ?>
        <?php //echo $travebooking['don_gia'] ?>
        <table class="shower" border="1">
            <thead>
                <tr>
                    <td>chọn phòng</td>
                    <td>id</td>
                    <td>ma_loai</td>
                    <td>mô tả</td>
                    <td>đơn_giá</td>
                    <td>person</td>
                    <td>image</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($travebooking as $tv) {
//                    var_dump($travebooking);
                    extract($tv);
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
                                <input type="hidden" name="price" value="<?php  echo $tv['don_gia']   ?>">
                                <input type="submit" name="vnd" value="kết quả"/>
                            </form></td>
                        <td><?php echo $tv['ma_room'] ?></td>
                        <td><?php echo $tv['name_room'] ?></td>
                        <td><?php echo $tv['mo_ta'] ?></td>
                        <td><?php echo $tv['don_gia'] ?></td>
                        <td><?php echo $tv['person_sl'] ?></td>
                        <td><?php echo $tv['img'] ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
<!--        <button onclick="myFunction()" class="ab1">dịch vụ<i class="fa-solid fa-caret-down"></i></button>
        <div id="myDropdown" class="link-content">
            <a href="index.php?act=dmsp">spa</a>
            <a onclick="myFunction1()">ẩm thực<i class="fa-solid fa-caret-down"></i></a>
            <div id="myDropdown1" class="link-content1">
                <a href="index.php?act=dmsp">lee ddat</a>
            </div>
        </div>
        <script>
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }
            // Close the dropdown menu if the user clicks outside of it
            window.onclick = function (event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }
            function myFunction1() {
                document.getElementById("myDropdown1").classList.toggle("show");
            }
            window.onclick = function (event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            };
        </script>-->
        <table>
            <tr>
                <th>Hình</th> 
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Thao tác</th>
            </tr>
            <?php
            $i = 0;
            foreach ($_SESSION['room'] as $rooms) {
                $xoasp = '<a href="index.php?url=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a>';

//                extract($rooms);
                echo '<tr>
                <td>' . $rooms[0] . '</td>'
                . '<td>' . $rooms[1] . '</td> '
                . '<td>' . $xoasp . '</td> ' . '</tr>';
                $i += 1;
            }
            ?>
        </table>
    </body>
</html>
