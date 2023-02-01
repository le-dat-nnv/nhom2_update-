<a href="index.php?url=slide_showadd"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">ADD BILL</button></a>
<a href="index.php?url=list_slide"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">EDIT BILL</button></a>
<a href="index.php?url=list_slide"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">DELETE BILL</button></a>
<a href="index.php?url=list_slide"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List BILL</button></a>
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
    <form action="index.php?url=update_slide" method="POST" enctype="multipart/form-data">
        <div class="row mt-2">
            <div class="col-md-6"><input type="number" name="id" class="form-control" value="<?php echo $sua_list['id'] ?>" ></div>
            <div class="col-md-6"><input type="text" name="name_room" class="form-control" placeholder="name " value="<?=$name?>"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="text" name="des" class="form-control" placeholder="mô tả" value="<?=$des?>"></div>
            <div class="col-md-6"><input type="file" name="img" class="form-control" placeholder="image" value="<?=$image?>"></div>
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="capnhat"><input class="btn btn-primary profile-button ms-2" type="reset" value="nhập lại"></div>
    </form>
</div>