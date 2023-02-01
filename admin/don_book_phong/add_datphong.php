<a href="index.php?url=phong"><button style="height: 100px; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">Thêm Đơn Đặt Phòng</button></a>
<a href="index.php?url=book_phong"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Sửa Đơn Đặt phòng</button></a>
<a href="index.php?url=book_phong"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">Xóa Đơn Đặt phòng</button></a>
<a href="index.php?url=book_phong"><button style="height: 100px ; width: 170px;" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List Đơn Đặt phòng</button></a>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>Thêm thông tin về phòng</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
<!--    <form class="mb-2" action="index.php?url=search" method="POST">
        <input type="text" name="check_in" placeholder="check_in"/>
        <input type="text" name="check_out" placeholder="check_out"/>
        <select name="ma_room" style="width: 100px;
                   height: 30px;
                   border-radius: 3px;
                   border: 1px solid #272425;">
                <option value="0" selected="">tất cả</option>
                <?php
//                 $list_rooms = show_room_p();
//                foreach ($list_rooms as $addgo) {
//                    extract($addgo);
//                    echo '<option value=" ' . $id_room . '">' . $ma_rooms . '</option>';
                ?>

            </select>
        <input style="width: 150px;
               height: 30px;
               border-radius: 3px;
               border: 1px solid #272425;" type="submit" name="chapn" value="Tìm kiếm"/>
    </form>-->
    <table class="table">
        <thead class="table-dark">
            <tr>
                <td>id</td>
                <td>name_rooms</td>
                <td>mo_ta</td>
                <td>đơn giá</td>
                <td>img</td>
                <td>thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list_roomss as $lkx) {
                extract($lkx);
//                var_dump($lkx);
                $mota = $lkx['mo_ta'];
                $hinhpath = '../upload/' . $img_room;
                echo "<tr>
                    <td>$id_room</td>
                    <td>$ma_rooms</td>
                    <td>$mo_ta</td>
                    <td>$don_gia</td>
                    <td><img src='" . $hinhpath . "' height ='100px' width='100px'></td>
                   <form action='index.php?url=view_room_will_book' method='POST' style='margin-top:-20px'>
                        <input type='hidden' value= $id_room  name='id'/>
                        <input type='hidden' value= $name name='name_room'/>
                        <input type='hidden' value= $mota  name='des'/>
                        <input type='hidden' value= $ma_rooms name='ma_p'/>
                        <input type='hidden' value= $don_gia name='don_gia'/>
                        <input type='hidden' value= $hinhpath name='img'/>
                        <td><input type='submit' name='view' value='add_room' class='btn btn-sm btn-outline-success shadow-none w-100 mb-2'></td>
                    </form>
        </tr>";
            }
            ?>
    </table>
    <a href="index.php?url=infor_room">continue</a>
</div>