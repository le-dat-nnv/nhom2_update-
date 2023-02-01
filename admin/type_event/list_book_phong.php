<a href="index.php?url=phong"><input type="button" name="list_p" value="thêm mới"></a>
<h3>phần này dùng để list danh sách phòng</h3>
<table class="show" border="1">
    <thead>
        <tr>
            <td>id</td>
            <td>tên_phòng</td>
            <td>ma_type</td>
            <td>tên_kh</td>
            <td>email</td>
            <td>số điện thoại</td>
            <td>address</td>
            <td>price</td>
            <td>người lớn</td>
            <td>trẻ em</td>
            <td>ngày đặt phòng</td>
            <td>ngày trả phòng</td>
            <td>trạng thái</td>
            <td>dịch vụ</td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($list as $lt) {
            extract($lt);
            echo "<tr>
            <td>$ma_phong</td>
            <td>$ten_phong</td>
            <td>$code_room</td>
            <td>$name_kh</td>
            <td>$email</td>
            <td>$sdt</td>
            <td>$address</td>
            <td>$sl_adult</td>
            <td>$al_children</td>
            <td>$price</td>
            <td>$booking_date</td>
            <td>$check_out_date</td>
            <td>$status</td>
            <td>$dich_vu</td>
        </tr>";
        }
        ?>
    </tbody>
</table>