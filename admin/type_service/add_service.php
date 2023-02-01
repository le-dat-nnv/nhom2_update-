<a href="index.php?url=ldichvu"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">Thêm Loại Dịch Vụ</button></a>
<a href="index.php?url=ds_loai_dv"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Sửa Loại Dịch Vụ</button></a>
<a href="index.php?url=ds_loai_dv"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Xóa Loại Dịch Vụ</button></a>
<a href="index.php?url=ds_loai_dv"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List Loại Dịch Vụ</button></a>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về loại phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <form action="index.php?url=ldichvu" method="POST">
        <div class="row mt-2">
            <div class="col-md-6"><input type="number" name="ma_loai_dv" class="form-control" placeholder="Auto" disabled="" ></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="text" name="service_name" class="form-control"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="text" name="des" class="form-control"></div>
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="kqua"> <input class="btn btn-primary profile-button ms-2" type="reset" value="nhập lại"></div>
    </form>
</div>