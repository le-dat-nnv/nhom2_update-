<?php
if(is_array($sua_gallery)){
    extract($sua_gallery);
}
?>
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
    <form action="index.php?url=update_gallery" method="POST" enctype="multipart/form-data">
        <div class="row mt-2">
            <div class="col-md-6"><input type="number" name="ma_phong" value="<?php echo $sua_gallery['id'] ?>" class="form-control"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="file" name="img" value="<?php echo $sua_gallery['img'] ?>" class="form-control"></div>
        </div>
        <div class="row mt-3 ms-0">
                <!--<input type="number" name="ma_lp" value="<?php // echo $sua_gallery['id_rooms'] ?>" class="form-control"></div>-->
                <select name="ma_lp" class="col-md-6 form-control" style="width: 400px" >
                    <?php
                    foreach ($retu as $ledat) {
                        extract($ledat);
//                        var_dump($ledat);
                        echo '<option value=" ' . $sua_gallery['id_room'] . '">' . $sua_gallery['ma_room'] . '</option>';
                    }
                    ?>
                </select>
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="capnhat" value="update"></div>
    </form>
</div>