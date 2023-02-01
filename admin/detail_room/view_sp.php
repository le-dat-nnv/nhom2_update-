<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <?php
    $array_admin1 = $_SESSION['detail_room_admin'];
    foreach ($array_admin1 as $sk) {
        extract($sk);
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <td>Id</td>
                            <td>ảnh</td>
                            <td>mã phòng</td>
                            <td>mô tả</td>
                            <td>giá tiền</td>
                            <td>loại phòng</td>
                            <td>tổng tiền</td>
                            <td>thao tác</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $array_admin = $_SESSION['detail_room_admin'];
                        foreach ($array_admin as $sk) {
                            extract($sk);
                            var_dump($sk);
                            $hinhnk = $sk['4'];
                        }
                        ?>
                        <tr>
                            <td><?= $sk[5]?></td>
                            <td><img src=<?php echo $hinhnk; ?> alt="" height = "80px"></td>
                            <td><?= $sk[2] ?></td> 
                            <td><?=  $sk[1]?> </td> 
                            <td><?= $sk[3] ?> </td> 
                            <td><?= $sk[0] ?> </td>
                        </tr>
                        <tr>
                    <!--<img src="<?php // echo $hinhnk  ?>" alt="alt"/>-->
                            <td colspan = "6">Tổng đơn hàng</td>
                        </tr>
                    </tbody>

                </table>
                <a href="index.php?url=infor_room"><input type="button" name="name" value="continue"></a>
                <?php // echo $tb;   ?>
            </div>
        </div>