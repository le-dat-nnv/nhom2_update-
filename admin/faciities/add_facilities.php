<a href="index.php?url=facilities"><button style="height: 100px;width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">Thêm Dịch Vụ Phòng</button></a>
<a href="index.php?url=list_facilities"><button style="height: 100px;width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Sửa Dịch Vụ Phòng</button></a>
<a href="index.php?url=list_facilities"><button style="height: 100px ;width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Xóa Dịch Vụ Phòng</button></a>
<a href="index.php?url=list_facilities"><button style="height: 100px;width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List Dịch Vụ Phòng</button></a>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về loại phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <form action="index.php?url=facilities" method="POST" enctype="multipart/form-data">
        <div class="row mt-2">
            <div class="col-md-6"><input type="number" name="id" class="form-control" placeholder="Auto" disabled="" ></div>
            <div class="col-md-6"><input type="file" name="img"  class="form-control" placeholder="icon"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="text" name="tieude"  class="form-control" placeholder="tiêu đề"></div>
            <div class="col-md-6"><input type="text" name="mota"  class="form-control" placeholder="mô tả"></div>
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="kquap"> <input class="btn btn-primary profile-button ms-2" type="reset" value="nhập lại"></div>
    </form>
</div>