<a href="index.php?url=vochur"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">THÊM MÃ</button></a>
<a href="index.php?url=list_vochur"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">XÓA VOCHUR</button></a>
<a href="index.php?url=list_vochur"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">LIST VOCHUR</button></a>
<div class=" bg-white shadow rounded mt-5  " style="width: 900px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>List thông tin của người đặt phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <td>Id</td>
                <td>code</td>
                <td>discount</td>
                <td>status</td>
                <td>Thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list_VOCHUR as $lt) {
                extract($lt);
                echo "<tr>
            <td>$coupon_id</td>
            <td>$coupon_code</td>
            <td>$discount</td>
            <td>$status</td>
        </tr>";
            }
            ?>
        </tbody>
    </table>