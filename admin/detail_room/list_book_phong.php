<div class=" bg-white shadow rounded mt-5  " style="width: 900px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>List thông tin của người đặt phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <td>id_booking</td>
                <td>id_room</td>
                <td>Đơn giá</td>
                <td>email</td>
                <td>số điện thoại</td>
                <td>address</td>
                <td style="width: 120px;">FROM-TO</td>
                <!--<td>ngày trả phòng</td>-->
                <td>trạng thái</td>
                <td>Thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list as $lt) {
                extract($lt);
                $suaty = "index.php?url=suaof_book_room&ma_b=" . $id_booking;
                $xoaty = "index.php?url=xoaof_book_room&ma_b=" . $id_booking;
                echo "<tr>
            <td>$id_booking</td>
            <td>$id_room</td>
            <td>$price</td>
            <td>$email</td>
            <td>$sdt</td>
            <td>$address</td>
            <td><p>$check_out_date</p><p>$booking_date</p></td>
            <td>$status</td>
            <td><a href=" . $suaty . "><input type='button' value='sửa'/></a><a href=" . $xoaty . "><input type='button' value='xóa'/></a></td>
        </tr>";
            }
            ?>
        </tbody>
    </table>