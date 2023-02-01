<form action="index.php?url=booking_room" method="POST">
    <div class="form-admin">
        mã phòng</br>
        <input type="number" name="ma_room" disabled="" placeholder="auto">
    </div>
    <div class="form-admin">
        tên phòng<br>
        <input type="text" name="name_room"/>
    </div>
    <div class="form-admin">
        mã loại phòng<br>
        <input type="number" name="ma_type"/>
    </div>
    <div class="form-admin">
        tên khách hàng<br>
        <input type="text" name="name"/>
    </div>
    <div class="form-admin">
        email<br>
        <input type="text" name="email"/>
    </div>
    <div class="form-admin">
        số điện thoại<br>
        <input type="text" name="sdt"/>
    </div>
    <div class="form-admin">
        address<br>
        <input type="text" name="address"/>
    </div>
    <div class="form-admin">
        người lớn _ sl<br>
        <input type="number" name="adults"/>
    </div>
    <div class="form-admin">
        trẻ nhỏ<br>
        <input type="number" name="childrens"/>
    </div>
    <div class="form-admin">
        loại phòng<br>
        <input type="number" name="price"/>
    </div>
    <div class="form-admin">
        ngày đặt phòng<br>
        <input type="date" name="check_in"/>
    </div>
    <div class="form-admin">
        ngày trả phòng<br>
        <input type="date" name="check_out"/>
    </div>
    <div class="form-admin">
        trạng thái<br>
        <input type="text" name="status"/>
    </div>
    <div class="form-admin">
        dịch vụ<br>
        <input type="text" name="service"/>
    </div>
    <div class="sub">
        <input type="submit" name="guikqua" value="insert">
        <input type="reset" value="nhập lại">
    </div>
</form>