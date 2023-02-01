<a href="index.php?url=rooms"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">THÊM PHÒNG</button></a>
<a href="index.php?url=list_rooms"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">SỬA PHÒNG</button></a>
<a href="index.php?url=list_rooms"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">XÓA PHÒNG</button></a>
<a href="index.php?url=list_rooms"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">LIST PHÒNG</button></a>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về loại phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <form action="index.php?url=rooms" method="POST" enctype="multipart/form-data">
        <div class="row mt-2">
            <div class="col-md-6"><input type="number" name="ma_room" class="form-control" placeholder="Auto" disabled="" ></div>
            <div class="col-md-6"><input type="text" name="ma_phong" class="form-control" placeholder="mã phòng" ></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="number" name="don_gia" class="form-control" placeholder="đơn giá"></div>
            <div class="col-md-6"><input type="file" name="img" class="form-control" placeholder="ảnhs"></div>
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
<!--            <select name="id_service" class="col-md-6 form-control ms-4" style="width: 400px"; >
                <?php
//                foreach ($lk_service as $lk_s) {
//                    extract($lk_s);
//                    echo '<option value=" ' . $id . '">' . $tieu_de . '</option>';
//                }
                ?>
            </select>-->
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="kqua"><input class="btn btn-primary profile-button ms-2" type="reset" value="nhập lại"></div>
    </form>
</div>
<?php
	function coupon($l){
		$coupon = "ld".substr(str_shuffle(str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',$l-1)),0,$l-1);

		return $coupon;
	}
	
	echo coupon(10);
?>