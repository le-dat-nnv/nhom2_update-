<a href="index.php?url=setting"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">ADD BILL</button></a>
<a href="index.php?url=list_setting"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">EDIT BILL</button></a>
<a href="index.php?url=list_setting"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">DELETE BILL</button></a>
<a href="index.php?url=list_setting"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List BILL</button></a>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về loại phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <form action="index.php?url=setting" method="POST">
        <div class="row mt-2">
            <div class="col-md-6"><input type="number" name="id" class="form-control" placeholder="Auto" disabled="" ></div>
            <div class="col-md-6"><input type="text" name="url_website" class="form-control" placeholder="đại chỉ website" ></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="number" name="email" class="form-control" placeholder="email"></div>
            <div class="col-md-6"><input type="text" name="address" class="form-control" placeholder="address"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="text" name="sdt" class="form-control" placeholder="số điện thoại"></div>
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="guikqua"><input class="btn btn-primary profile-button ms-2" type="reset" value="nhập lại"></div>
    </form>
</div>
