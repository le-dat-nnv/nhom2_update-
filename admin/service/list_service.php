<a href="index.php?url=service"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">ADD BILL</button></a>
<a href="index.php?url=service_list"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">EDIT BILL</button></a>
<a href="index.php?url=service_list"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">DELETE BILL</button></a>
<a href="index.php?url=service_list"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List BILL</button></a>
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
                <td>tên_dịch vụ</td>
                <td>mô tả</td>
                <td>price</td>
                <td>id_service</td>
                <td>img</td>
                <td>thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($service_list as $lis) {
                extract($lis);
                $suaty = "index.php?url=sua_se_list&ma_serv=" . $ids;
                $xoaty = "index.php?url=service_xoa&ma_ser=" . $ids;
                $hinhpath = '../upload/' . $img_service;
//                echo $lis['id'];
                if (is_file($hinhpath)) {
                    $image = "<img src='" . $hinhpath . "' height ='100px' width='100px'>";
                } else {
                    $image = "";
                }
                echo "<tr>
                        <td>$ids</td>
                        <td>$ten_dv</td>
                        <td>$mo_ta</td>
                        <td>$price</td>
                        <td>$id_type_service</td>
                        <td>$image</td>
                    <td><a href=" . $suaty . "><input type='button' value='sửa'/></a><a href=" . $xoaty . "><input type='button' value='xóa'/></a></td>
        </tr>";
            }
            ?>
        </tbody>
    </table>
</div>