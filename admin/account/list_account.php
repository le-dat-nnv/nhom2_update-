<a href="index.php?url=account"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">ADD BILL</button></a>
<a href="index.php?url=list_account"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">EDIT BILL</button></a>
<a href="index.php?url=list_account"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">DELETE BILL</button></a>
<a href="index.php?url=list_account"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List BILL</button></a>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>List thông tin của người đặt phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <td>id</td>
                <td>email</td>
                <td>số điện thoại</td>
                <td>username</td>
                <td>pass</td>
                <td>role</td>
                <td>thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list_account as $acc_list) {
                extract($acc_list);
                $suaty = "index.php?url=sua_account&ma_p=" . $id;
                $xoaty = "index.php?url=xoa_account&ma_p=" . $id;

                echo "<tr>
                    <td>$id</td>
                    <td>$email</td>
                    <td>$sdt</td>
                    <td>$username</td>
                    <td>$pass</td>
                        <td>$role</td>
                    <td><a href=" . $suaty . "><input type='button' value='sửa'/></a><a href=" . $xoaty . "><input type='button' value='xóa'/></a></td>
        </tr>";
            }
            ?>