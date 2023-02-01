<a href="index.php?url=book_service"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">ADD BILL</button></a>
<a href="index.php?url=list_book_service"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">EDIT BILL</button></a>
<a href="index.php?url=list_book_service"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">DELETE BILL</button></a>
<a href="index.php?url=list_book_service"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List BILL</button></a>
<?php
if (is_array($sua_rooms)) {
    extract($sua_rooms);
}
?>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về loại phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <form action="index.php?url=update_rooms" method="POST">
        <div class="row mt-2">
            <div class="col-md-6"><input type="number" name="id" class="form-control" value="<?php echo $sua_rooms['id_room'] ?>" ></div>
            <div class="col-md-6"><input type="text" name="ma_phong" class="form-control" placeholder="name service" value="<?= $ma_rooms ?>"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="number" name="don_gia" class="form-control" placeholder="tên khách hàng" value="<?= $don_gia ?>"></div>
        </div>
        <div class="row mt-3">
            <select name="id_type_room" class="col-md-6 form-control" style="width: 400px;margin-left: 12px" >
                <?php
                foreach ($lk_type_room as $lk_tp) {
                    extract($lk_tp);
                    echo '<option value=" ' . $id_type_rooms . '">' . $name . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="capnhat"><input class="btn btn-primary profile-button ms-2" type="reset" value="nhập lại"></div>
    </form>
</div>