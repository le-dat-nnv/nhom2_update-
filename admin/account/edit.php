<a href="index.php?url=account"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">ADD BILL</button></a>
<a href="index.php?url=list_account"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">EDIT BILL</button></a>
<a href="index.php?url=list_account"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">DELETE BILL</button></a>
<a href="index.php?url=list_account"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List BILL</button></a>
<?php 
if(is_array($sua_list)) {
    extract($sua_list);
}
?>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về loại phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <form action="index.php?url=update_account" method="POST" enctype="multipart/form-data">
        <div class="row mt-2">
            <div class="col-md-6"><input type="number" name="id_taikhoan" class="form-control" value="<?=$id?>" ></div>
            <div class="col-md-6"><input type="text" name="email" class="form-control" placeholder="email" value="<?=$email?>"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="number" name="sdt" class="form-control" placeholder="số điện thoại" value="<?=$sdt?>"></div>
            <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="tên đăng nhập" value="<?=$username?>"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="text" name="pass" class="form-control" placeholder="mật khẩu" value="<?=$pass?>"></div>
            <div class="col-md-6"><input type="number" name="role" class="form-control" placeholder="vai trò" value="<?=$role?>"></div>
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="capnhat"><input class="btn btn-primary profile-button ms-2" type="reset" value="nhập lại"></div>
    </form>
</div>