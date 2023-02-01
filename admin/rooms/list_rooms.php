<a href="index.php?url=rooms"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">THÊM PHÒNG</button></a>
<a href="index.php?url=list_rooms"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">SỬA PHÒNG</button></a>
<a href="index.php?url=list_rooms"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">XÓA PHÒNG</button></a>
<a href="index.php?url=list_rooms"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">LIST PHÒNG</button></a>
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
                <td>name_rooms</td>
                <td>mo_ta</td>
                <td>đơn giá</td>
                <td>img</td>
                <td>thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list_rooms as $lkx) {
                extract($lkx);
                $suaty = "index.php?url=sua_rooms&ma_p=" . $id_room;
                $xoaty = "index.php?url=xoa_rooms&ma_p=" . $id_room;
                $hinhpath = '../upload/' . $img_room;
                if (is_file($hinhpath)) {
                    $image = "<img src='" . $hinhpath . "' height ='100px' width='100px'>";
                } else {
                    $image = "";
                }
                echo "<tr>
                    <td>$id_room</td>
                    <td>$ma_rooms</td>
                    <td>$mo_ta</td>
                    <td>$don_gia</td>
                    <td>$image</td>
                    <td><a href=" . $suaty . "><input type='button' value='sửa'/></a><a href=" . $xoaty . "><input type='button' value='xóa'/></a></td>
        </tr>";
            }
            ?>