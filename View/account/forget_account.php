<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về loại phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <form action="index.php?url=forget" method="POST" enctype="multipart/form-data">
        <div class="row mt-2">
            <div class="col-md-6"><input type="type" name="email" class="form-control" placeholder="email"></div>
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="guiemail"><input class="btn btn-primary profile-button ms-2" type="reset" value="nhập lại"></div>
    </form>
    <h4 class="mt-5">
            
        <?php
        if (isset($thongbao) && ($thongbao != "")) {
//            var_dump($thongbao);
            echo $thongbao;
        }
        ?>
        </h4>
</div>
