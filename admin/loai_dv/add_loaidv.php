<a href="index.php?url=ds_loai_dv"><input type="button" name="list_dv" value="ds_dichvu"></a>
<form action="index.php?url=ldichvu" method="POST">
    <h3>phần này dùng để thêm mã dịch vụ và tên dịch vụ</h3>
    <div class="form-admin">
        mã dịch vụ</br>
        <input type="number" name="ma_loai_dv" disabled="" placeholder="auto">
    </div>
    <div class="form-admin">
        tên dịch vụ<br>
        <input type="text" name="service_name"/>
    </div>
    <div class="sub">
        <input type="submit" name="kqua" value="insert">
        <input type="reset" value="nhập lại">
    </div>
</form>