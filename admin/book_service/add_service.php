<a href="index.php?url=book_service"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">ADD BILL</button></a>
<a href="index.php?url=list_book_service"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">EDIT BILL</button></a>
<a href="index.php?url=list_book_service"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">DELETE BILL</button></a>
<a href="index.php?url=list_book_service"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List BILL</button></a>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về loại phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <form action="index.php?url=book_service" method="POST">
        <div class="row mt-2">
            <div class="col-md-6"><input type="number" name="ma_room" class="form-control" placeholder="Auto" disabled="" ></div>
            <div class="col-md-6"><input type="text" name="name_room" class="form-control" placeholder="name service" ></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="text" name="name" class="form-control" placeholder="tên khách hàng"></div>
            <div class="col-md-6"><input type="text" name="email" class="form-control" placeholder="email"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="text" name="sdt" class="form-control" placeholder="số điện thoại"></div>
            <div class="col-md-6"><input type="text" name="address" class="form-control" placeholder="địa chỉ"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="number" name="price" class="form-control" placeholder="đơn giá"></div>
            <div class="col-md-6"><input type="text" name="status" class="form-control" placeholder="status"></div>
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="guikqua"><input class="btn btn-primary profile-button ms-2" type="reset" value="nhập lại"></div>
    </form>
</div>