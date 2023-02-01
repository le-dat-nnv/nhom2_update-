<a href="index.php?url=facilities"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">Thêm facilities</button></a>
<a href="index.php?url=list_facilities"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Sửa facilities</button></a>
<a href="index.php?url=list_facilities"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Xóa facilities</button></a>
<a href="index.php?url=list_facilities"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List facilities</button></a>
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
                <td>tieu de</td>
                <td>mo ta</td>
                <td>image</td>
                <td>thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list_facilities as $lf) {
                extract($lf);
                $sua_facilities = "index.php?url=sua_facilities&ma_f=" . $id;
                $xoa_facilities = "index.php?url=xoa_facilities&ma_f=" . $id;
                $hinhpath = $icon;
                if (is_file($hinhpath)) {
                    $image = "<img src='" . $hinhpath . "' height ='50px' width='50px'>";
                } else {
                    $image = "";
                }
                ?>
                <tr>
                    <td><?php echo $lf['id'] ?></td>
                    <td><?php echo $lf['tieu_de'] ?></td>
                    <td><?php echo $lf['mo_ta'] ?></td>
                    <td><?php echo $image ?></td>
                    <td><a href='<?php echo $sua_facilities ?>'><input type='button' name='list_p' value='sửa'></a>
                        <a href='<?php echo $xoa_facilities ?>'><input type='button' name='list_p' value='xóa'></a></td>
                </tr>
                <?php
                //foreach ($list_facilities as $lf) {
//                    extract($lf);
////                var_dump($lf);
//                    echo $mo_ta;
//                    $sua_gallery = "index.php?url=sua_facilities&ma_f=" . $id;
//                    $xoa_gallery = "index.php?url=xoa_facilities&ma_f=" . $id;
//                    echo "<tr>
//                    <td>$id</td>
//                    <td>$tieu_de<td>
//                    <td>$mo_ta</td>
//                    <td>$id_room</td>
//            <td><a href='$sua_gallery'><input type='button' name='list_p' value='sửa'></a>
//                <a href='$xoa_gallery'><input type='button' name='list_p' value='xóa'></a>
//</td>
//                
//        </tr>";
            }
//                
            ?>
        </tbody>
    </table>