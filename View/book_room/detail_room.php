<h3>
    số tiền của phòng là : <?php echo $trt ?>
</h3>
<h3>chi tiết về thông tin của phòng là </h3>
<h3>tính ra tổng số tiền phải trả bao gồm dịch vụ và tiền phòng</h3>
<table class="show" border="1">
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
        foreach ($detail_room as $detail) {
            extract($detail);
        }
        ?>
        <tr>
            <td><?php echo $detail['ma_detail'] ?></td>
            <td><?php echo $detail['ma_room'] ?></td>
            <td><?php echo $detail['ma_phong'] ?></td>
            <td><?php echo $detail['price'] ?></td>
            <td><?php echo $detail['adult'] ?></td>
            <td><?php echo $detail['children'] ?></td>
        </tr>
    </tbody>
    <a href="index.php?url=booking_room"><input type="button" value="tiếp tục đặt hàng"></a>
</table>
<div class="row">
    <div class="col-sm-4">
        <div class="box_three">
            <h3>thông tin về chi tiết phòng bao gôm những thông tin gì 
            chia số phòng ra nhé 
            ak đúng rồi từ là thông tin của phòng thì mình đó ghi ra rồi mà nhỉ 
            </h3>
        </div>
    </div>
</div>