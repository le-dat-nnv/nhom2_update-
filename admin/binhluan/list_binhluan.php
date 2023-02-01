<a href="index.php?url=comment"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">Thêm Bình Luận</button></a>
<a href="index.php?url=list_comment"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Sửa Bình Luận</button></a>
<a href="index.php?url=list_comment"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Xóa Bình Luận</button></a>
<a href="index.php?url=list_comment"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List Bình Luận</button></a>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
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
                <td>Nội dung</td>
                <td>Ngày gửi Bình Luận</td>
                <td>Mã KH</td>
                <td>Tên Khách Hàng</td>
                <td>thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list_binhluan as $lbt) {
                extract($lbt);
                $suaty = "index.php?url=sua_bl&ma_p=" . $id;
                $xoaty = "index.php?url=xoa_bl&ma_p=" . $id;

                echo "<tr>
                    <td>$id</td>
                    <td>$ma_kh</td>
                    <td>$noi_dung</td>
                    <td>$ngay_bl</td>
                    <td><a href=" . $suaty . "><input type='button' value='sửa'/></a><a href=" . $xoaty . "><input type='button' value='xóa'/></a></td>
        </tr>";
            }
            ?>
        </tbody>
    </table>
    <div class='box-footer clearfix'>
        <ul class='pagination pagination-sm no-margin pull-right'>
            <li><a href='' data-abc='true'>&laquo;</a></li>
            <li><a href='index.php?url=list_comment' data-abc='true'>1</a></li>
            <li><a href='#' data-abc='true'>2</a></li>
            <li><a href='#' data-abc='true'>3</a></li>
            <li><a href='#' data-abc='true'>4</a></li>
            <li><a href='#' data-abc='true'>&raquo;</a></li>
        </ul>
    </div>