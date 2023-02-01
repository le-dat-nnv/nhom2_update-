<a href="index.php?url=book_phong"><input type="button" name="list_p" value="ql_phong"></a>
<form action="index.php?url=type_event" method="POST">
    <h3>phần này dùng để thêm thông tin của loại sự kiện</h3>
    <div class="form-admin">
        mã sự kiện</br>
        <input type="number" name="ma_room" disabled="" placeholder="auto">
    </div>
    <div class="form-admin">
        tên sự kiện<br>
        <input type="text" name="name_event"/>
    </div>
    <div class="sub">
        <input type="submit" name="guikqua" value="insert">
        <input type="reset" value="nhập lại">
    </div>
</form>