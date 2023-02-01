<a href="index.php?url=setting"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">Thêm Thông Tin</button></a>
<a href="index.php?url=list_setting"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Sửa Thông Tin</button></a>
<a href="index.php?url=list_setting"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Xóa Thông Tin</button></a>
<a href="index.php?url=list_setting"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List Thông Tin</button></a>
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
                <td>id</td>
                <td>logo</td>
                <td>url_website</td>
                <td>email</td>
                <td>tel</td>
                <td>address</td>
                <td>icon</td>
                <td>thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($setting_list as $set) {
                extract($set);
                $suaty = "index.php?url=sua_setting&ma_ser=" . $id;
                $xoaty = "index.php?url=xoa_setting&ma_ser=" . $id;
                echo "<tr>
                    <td>$id</td>
                    <td>$logo</td>
                    <td>$url_website</td>
                    <td>$email</td>
                    <td>$sdt</td>
                    <td>$address</td>
                    <td>$icon</td>
                    <td><a href=" . $suaty . "><input type='button' value='sửa'/></a><a href=" . $xoaty . "><input type='button' value='xóa'/></a></td>
        </tr>";
            }
            ?>
        </tbody>
    </table>
</div>