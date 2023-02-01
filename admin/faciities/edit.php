<?php
if(is_array($sua_facilities)){
    extract($sua_facilities);
}
?>
<a href="index.php?url=facilities"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">Thêm Loại Phòng</button></a>
<a href="index.php?url=list_facilities"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Sửa Loại Phòng</button></a>
<a href="index.php?url=list_facilities"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Xóa Loại Phòng</button></a>
<a href="index.php?url=list_facilities"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List Loại Phòng</button></a>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về loại phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <form action="index.php?url=update_facilities" method="POST">
        <div class="row mt-2">
            <div class="col-md-6"><input type="number" name="id_facilities" class="form-control" value="<?=$id?>" ></div>
            <div class="col-md-6"><input type="file" name="img"  class="form-control" placeholder="icon"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="text" name="tieude"  class="form-control" placeholder="tiêu đề"  value="<?=$tieu_de?>"></div>
            <div class="col-md-6"><input type="text" name="mota"  class="form-control" placeholder="mô tả"  value="<?=$mo_ta?>"></div>
        </div>
        <div class="row mt-3">
            <select name="id_room" class="col-md-6 form-control" style="width: 400px;margin-left: 11px" >
                <?php
                foreach ($lk_faci as $lk_fa) {
                    extract($lk_fa);
                    echo '<option value=" ' . $id_room . '">' . $ma_rooms . '</option>';
                }
                ?>

            </select>
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="capnhat"> <input class="btn btn-primary profile-button ms-2" type="reset" value="nhập lại"></div>
    </form>
</div>