<a href="index.php?url=service"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">Thêm Dịch Vụ</button></a>
<a href="index.php?url=service_list"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Sửa Dịch Vụ</button></a>
<a href="index.php?url=service_list"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Xóa Dịch Vụ</button></a>
<a href="index.php?url=service_list"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List Dịch Vụ</button></a>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về loại phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <form action="index.php?url=service" method="POST" enctype="multipart/form-data">
        <div class="row mt-2">
            <div class="col-md-6"><input type="number" name="ids" class="form-control" placeholder="Auto" disabled="" ></div>
            <div class="col-md-6"><input type="text" name="name_service" class="form-control" placeholder="name service" ></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="number" name="price" class="form-control" placeholder="đơn giá"></div>
            <div class="col-md-6"><input type="file" name="img" class="form-control" placeholder="ảnh"></div>
        </div>
        <div class="row mt-2">
            <select name="id_type_service" class="col-md-6 form-control" style="width: 400px;margin-left: 12px" >
                <?php
                foreach ($lk_type_service as $lk_tse) {
                    extract($lk_tse);
                    echo '<option value=" ' . $ma_dv . '">' . $ten_dv . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="guikqua"><input class="btn btn-primary profile-button ms-2" type="reset" value="nhập lại"></div>
    </form>
</div>