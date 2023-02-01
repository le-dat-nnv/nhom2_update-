<?php 
if(is_array($trave_room)) {
    extract($trave_room);
}
?>
<form action="index.php?url=update_room" method="POST" class="cover">
    <h3>phần này dùng để sửa các thông tin</h3>
    <div class="form-admin">
        mã phòng</br>
        <input type="number" name="ma_room" value="<?php echo $trave_room['ma_room'] ?>">
    </div>
    <div class="form-admin">
        tên phòng<br>
        <input type="text" name="name_room" value="<?php echo $trave_room['name_room'] ?>"/>
    </div>
    <div class="form-admin">
        des</br>
        <input type="text" name="des" value="<?php echo $trave_room['mo_ta'] ?>">
    </div>
    <div class="form-admin">
        person<br>
        <input type="text" name="don_gia" value="<?php echo $trave_room['don_gia'] ?>"/>
    </div>
    <div class="form-admin">
        person<br>
        <input type="text" name="person_sl" value="<?php echo $trave_room['person_sl'] ?>"/>
    </div>
    <div class="form-admin">
        person<br>
        <input type="file" name="img" value="<?php echo $trave_room['img'] ?>"/>
    </div>
    <div class="sub">
        <input type="submit" name="capnhat" value="update">
    </div>
</form>