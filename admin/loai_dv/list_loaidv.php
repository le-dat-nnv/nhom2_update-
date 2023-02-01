<a href="index.php?url=ldichvu"><input type="button" name="list_dv" value="ds_dichvu"></a>
<h3>phần này dùng để list loại dịch vụ</h3>
<table class="show" border="1">
    <thead>
        <tr>
            <td>id_loai_dv</td>
            <td>tên_loai_dv</td>
            <td>image</td>
            <td>price</td>
            <td>ưu đãi</td>
            <td>mô tả</td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($lstservice as $ls) {
            extract($ls);
            echo "<tr>
            <td>$ma_dv</td>
            <td>$ten_dv</td>
            <td>$image</td>
            <td>$price</td>
            <td>$uudai</td>
            <td>$mota</td>
        </tr>";
        }
        ?>
    </tbody>
</table>