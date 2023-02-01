<a href="index.php?url=service"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">ADD BILL</button></a>
<a href="index.php?url=service_list"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">EDIT BILL</button></a>
<a href="index.php?url=service_list"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">DELETE BILL</button></a>
<a href="index.php?url=service_list"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List BILL</button></a>
<?php 
if(is_array($edit)) {
    extract($edit);
    var_dump($edit);
}
?>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về loại phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <form action="index.php?url=service_update" method="POST">
       <div class="row mt-2">
           <div class="col-md-6"><input type="number" name="id" class="form-control" value="<?php echo $edit['ids']?>" ></div>
            <div class="col-md-6"><input type="text" name="name_service" class="form-control" placeholder="name service" value="<?php echo $edit['ten_dv']?>"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="text" name="tieu_de" class="form-control" placeholder="tên khách hàng" value="<?php //echo //$edit['id_gallery']?>"></div>
            <div class="col-md-6"><input type="text" name="mo_ta" class="form-control" placeholder="email" value="<?php echo $edit['price']?>"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="number" name="price" class="form-control" placeholder="số điện thoại" value="<?php echo $edit['id_type_service']?>"></div>
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="capnhat"><input class="btn btn-primary profile-button ms-2" type="reset" value="nhập lại"></div>
    </form>
</div>