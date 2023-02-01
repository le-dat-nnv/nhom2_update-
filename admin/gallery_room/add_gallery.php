<a href="index.php?url=gallery_room"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">Thêm ảnh</button></a>
<a href="index.php?url=list_gallery"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Xóa ảnh</button></a>
<a href="index.php?url=list_gallery"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List ảnh</button></a>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về loại phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <form action="index.php?url=gallery_room" method="POST" enctype="multipart/form-data">
        <div class="row mt-2">
            <div class="col-md-6"><input type="number" name="ma_loai_dv" class="form-control" placeholder="Auto" disabled="" ></div>
        </div>
        <div class="row mt-3 ms-0">
                <select name="id_room" class="col-md-6 form-control" style="width: 400px" >
                    <?php
                    foreach ($retu as $dkldl) {
                        extract($dkldl);
                        echo '<option value=" ' . $id_room . '">' . $ma_rooms . '</option>';
                    }
                    ?>

                </select>
            <!--<div class="col-md-6"><input type="number" name="ma_lp"  class="form-control" value="<?php //echo $retu['id_rooms']  ?>"></div>-->
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="guikqua"> <input class="btn btn-primary profile-button ms-2" type="reset" value="nhập lại"></div>
    </form>
</div>