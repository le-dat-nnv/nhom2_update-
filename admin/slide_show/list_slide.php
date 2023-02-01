<a href="index.php?url=slide_showadd"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">Thêm Slide Show</button></a>
<a href="index.php?url=list_slide"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Sửa Slide Show</button></a>
<a href="index.php?url=list_slide"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Xóa Slide Show</button></a>
<a href="index.php?url=list_slide"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List Slide Show</button></a>
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
                <td>name</td>
                <td>mo_ta</td>
                <td>img</td>
                <td>thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list_slide as $lkx) {
                extract($lkx);
                $suaty = "index.php?url=sua_slide&ma_p=" . $id;
                $xoaty = "index.php?url=xoa_slide&ma_p=" . $id;
                $hinhpath = '../upload/' . $image;
                if (is_file($hinhpath)) {
                    $imager = "<img src='" . $hinhpath . "' height ='100px' width='100px'>";
                } else {
                    $imager = "";
                }
                echo "<tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$des</td>
                    <td>$imager</td>
                    <td><a href=" . $suaty . "><input type='button' value='sửa'/></a><a href=" . $xoaty . "><input type='button' value='xóa'/></a></td>
        </tr>";
            }
            ?>