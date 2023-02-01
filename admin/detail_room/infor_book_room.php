<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <?php
    foreach ($_SESSION['detail_room_admin'] as $sk) {
        extract($sk);
        var_dump($sk);
    }
    ?>
    <form action="index.php?url=phong" method="POST">
        <div class="row">
            <div class="form-floating col-md-6 ">
                <input type="text" class="form-control" name="name"  placeholder="Họ Và Tên">
                <label>Họ Và Tên</label>
            </div>
            <div class="form-floating col-md-6">
                <input type="text" class="form-control" name="email" placeholder="Email">
                <label>Email</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="form-floating col-md-6">
                <input type="text" class="form-control" name="sdt" placeholder="Số Điện Thoại">
                <label>Số Điện Thoại</label>
            </div>
            <div class="form-floating col-md-6">
                <input type="text" class="form-control" name="address" placeholder="Địa Chỉ">
                <label>Địa Chỉ</label>
            </div>
        </div>
        <input type="hidden" name="price">
        <div class="row mt-4">
            <div class="form-floating col-md-6">
                <input type="date" class="form-control" name="check_in" placeholder="Check In">
                <label>Check In</label>
            </div>
            <div class="form-floating col-md-6">
                <input type="date" class="form-control" name="check_out" placeholder="Check Out">
                <label>Check Out</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="form-floating col-md-6">
                <input type="number" class="form-control" name="adults" placeholder="Adults">
                <label>Adults</label>
            </div>
            <div class="form-floating col-md-6">
                <input type="number" class="form-control" name="childrens" placeholder="Chilsrens">
                <label>Childrens</label>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-3 d-flex">
                <input style="height: 40px;" type="submit" name="guikqua" value="book_room" class="btn btn-sm btn-outline-success shadow-none w-100 mb-2">
            </div>
            <div class="col-md-3">
                <button style="height: 40px;" class="btn btn-primary text-uppercase" type="button">SHOWN FLIGHTS<i class="fa fa-plane ms-3"></i></button>
            </div>
        </div>
    </form>