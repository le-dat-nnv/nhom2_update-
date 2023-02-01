<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>hiển thị loại phòng</h3>
        <table class="shower" border="1">
            <thead>
                <tr>
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
                    <td><?php echo $tv['code_room'] ?></td>
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
        <?php
        // put your code here
        ?>
    </body>
</html>
