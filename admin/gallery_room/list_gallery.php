<a href="index.php?url=gallery_room"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">Thêm ảnh</button></a>
<a href="index.php?url=list_gallery"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Xóa ảnh</button></a>
<a href="index.php?url=list_gallery"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List ảnh</button></a>
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
                <td>img</td>
                <td>id_room</td>
                <td>thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list_gallery as $lt) {
                extract($lt);
//                var_dump($lt);
                $sua_gallery = "index.php?url=sua_gallery&ma_g=" . $id;
                $xoa_gallery = "index.php?url=xoa_gallery&ma_g=" . $id;
                $hinhpath =  $img_room;
                if (is_file($hinhpath)) {
                    $image = "<img src='" . $hinhpath . "' height ='200px' width='200px'>";
                } else {
                    $image = "";
                }
                echo "<tr>
            <td>$id</td>
            <td>$image</td>
            <td>$id_room</td>
            <td><a href='$sua_gallery'><input type='button' name='list_p' value='sửa'></a>
                <a href='$xoa_gallery'><input type='button' name='list_p' value='xóa'></a>
</td>
                
        </tr>";
            }
            ?>
        </tbody>
    </table>