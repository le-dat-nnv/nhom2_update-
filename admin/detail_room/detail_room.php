<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>List thông tin của người đặt phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <?php
    if (is_array($list_detail)) {
        extract($list_detail);
//        var_dump($list_detail);
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-light rounded shadow mb-4">
                <h5 class="alert alert-primary" role="alert" style="width:102%; margin-left: -1%">
                    Thông tin về đơn phòng
                </h5> 
                <h6 style="text-align: center">mã đơn hàng là : <?php echo $ma_phong ?></h6>
            </div>
            <div class="col-lg-12 bg-light rounded shadow mb-4">
                <h5 class="alert alert-primary" role="alert" style="width:102%; margin-left: -1%">
                    Thông tin người đặt phòng
                </h5> 
                <h6><?php echo $list_detail['name_kh'] ?></h6>
                <h6><?php echo $list_detail['email'] ?></h6>
                <h6><?php echo $list_detail['sdt'] ?></h6>
                <h6><?php echo $list_detail['address'] ?></h6>
            </div>
            <div class="col-lg-12 bg-light rounded shadow mb-4">
                <h5 class="alert alert-primary" role="alert" style="width:102%; margin-left: -1%">
                    Thông tin người phòng
                </h5> 
                <table class="table">
            <thead class="table-dark">
                <tr>
                    <td>id</td>
                    <td>số phòng</td>
                    <td>loại phòng</td>
                    <td>hình</td>
                    <td>số tiền</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                $list_name_typ_room = get_room($id_booking);
                foreach ($list_name_typ_room as $hks) {
                    extract($hks);
                    $hinh_admin =  $img_room;
                
                ?>
                <tr>
                    <td><?=$id_room?></td>
                    <td><?=$ma_rooms?></td>
                    <td><?=$name?></td>
                    <td><img src="<?php echo $hinh_admin ?>" alt = "" height = "80px"></td>
                    <td><?=$don_gia?></td>
                </tr>
                <?php } ?>
            </tbody>
            </div>
        </div>