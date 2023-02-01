<a href="index.php?url=vochur"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">THÊM MÃ</button></a>
<a href="index.php?url=list_vochur"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">XÓA VOCHUR</button></a>
<a href="index.php?url=list_vochur"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">LIST VOCHUR</button></a>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về MÃ VOCHUR</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <form action="index.php?url=vochur" method="POST" enctype="multipart/form-data">
        <div class="row mt-2">
            <div class="col-md-6"><input type="number" name="ma_room" class="form-control" placeholder="Auto" disabled="" ></div>
            <div class="col-md-6"><input type="text" name="ma_phong" class="form-control" placeholder="mã giảm giá" ></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="number" min="10" name="don_gia" class="form-control" placeholder="% giảm"></div>
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="kqua"><input class="btn btn-primary profile-button ms-2" type="reset" value="nhập lại"></div>
    </form>
</div>
