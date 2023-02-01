<a href="index.php?url=type_room"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">Thêm Loại Phòng</button></a>
<a href="index.php?url=list_type_room"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Sửa Loại Phòng</button></a>
<a href="index.php?url=list_type_room"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Xóa Loại Phòng</button></a>
<a href="index.php?url=list_type_room"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List Loại Phòng</button></a>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>List thông tin về loại phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <td>id_loai_dv</td>
                <td>tên_loai_dv</td>
                <td>mô tả</td>
                <td>thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list_type_room as $ls) {
                extract($ls);
                $suaty = "index.php?url=sua_type_room&ma_r=" . $code_room;
                $xoaty = "index.php?url=xoa_type_room&ma_r=" . $code_room;
                echo "<tr>
            <td>$code_room</td>
            <td>$name_room</td>
            <td>$mo_ta</td>
            <td><a href=" . $suaty . "><input type='button' value='sửa'/></a><a href=" . $xoaty . "><input type='button' value='xóa'/></a></td>
        </tr>";
            }
            ?>
        </tbody>
    </table>
</div>