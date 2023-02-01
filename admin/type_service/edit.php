<?php 
if(is_array($trave_serive)) {
    extract($trave_serive);
//    var_dump($trave_serive);
}
?>
<!--<form action="index.php?url=update_service" method="POST" class="cover">
    <h3>phần này dùng để sửa các thông tin</h3>
    <div class="form-admin">
        mã loại dịch vụ</br>
        <input type="number" name="ma_dv" value="<?php echo $trave_serive['ma_dv'] ?>">
    </div>
    <div class="form-admin">
        tên dịch vụ<br>
        <input type="text" name="ten_dv" value="<?php echo $trave_serive['ten_dv'] ?>"/>
    </div>
    <div class="sub">
        <input type="submit" name="capnhat" value="update">
    </div>
</form>-->
<a href="index.php?url=ldichvu"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">Thêm Loại Phòng</button></a>
<a href="index.php?url=ds_loai_dv"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Sửa Loại Phòng</button></a>
<a href="index.php?url=ds_loai_dv"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Xóa Loại Phòng</button></a>
<a href="index.php?url=ds_loai_dv"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List Loại Phòng</button></a>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về loại phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <form action="index.php?url=update_service" method="POST">
        <div class="row mt-2">
            <div class="col-md-6"><input type="number" name="ma_dv" value="<?php echo $trave_serive['ma_dv'] ?>" class="form-control"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="text" name="ten_dv" value="<?php echo $trave_serive['ten_dv'] ?>" class="form-control"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="text" name="mo_ta" class="form-control"></div>
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="capnhat" value="update"></div>
    </form>
</div>