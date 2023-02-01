<a href="index.php?url=phong"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">Thêm Đơn Đặt Phòng</button></a>
<a href="index.php?url=book_phong"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Sửa Đơn Đặt phòng</button></a>
<a href="index.php?url=book_phong"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Xóa Đơn Đặt phòng</button></a>
<a href="index.php?url=book_phong"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List Đơn Đặt phòng</button></a>
<div class=" bg-white shadow rounded mt-5 ms-2" style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>List thông tin của người đặt phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <td>id</td>
                <td>tên_kh</td>
                <td>email</td>
                <td>số điện thoại</td>
                <td>người lớn</td>
                <td>trẻ em</td>
                <td style="width: 120px;">FROM-TO</td>
                <td>statues</td>
                <td>thao tác</td>
                <td>Chi tiết</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $statuss="";
            foreach ($list as $lt) {
                extract($lt);
                if($lt['status']==0) {
                    $statuss='<button type="button" class="btn btn-success">pending</button>';
                }
                if($lt['status']==1) {
                    $statuss='<button type="button" class="btn btn-success">finished</button>';
                }
                if($lt['status']==2) {
                    $statuss='<button type="button" class="btn btn-danger w-100">cancel</button>';
                }
                $suaty = "index.php?url=sua_book_room&ma_b=" . $ma_phong;
                $xoaty = "index.php?url=xoa_book_room&ma_b=" . $ma_phong;
                $detail_book_room = "index.php?url=detail_kh_room&ma_b=" . $ma_phong;
                echo "<tr>
            <td>$ma_phong</td>
            <td>$name_kh</td>
            <td>$email</td>
            <td>$sdt</td>
            <td>$sl_adult</td>
            <td>$al_children</td>
            <td><p>$check_out_date</p><p>$booking_date</p></td>
            <td>$statuss</td>
            <td><a href=" . $suaty . "><input type='button' value='sửa'/></a><a href=" . $xoaty . "><input type='button' value='xóa'/></a></td>
            <td><a href=" . $detail_book_room . "><input type='button' value='chi tiết '/></a></td>

        </tr>";
            }
            ?>
        </tbody>
       