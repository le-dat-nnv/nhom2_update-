<!--<a href="index.php?url=list_ds_phong"><input type="button" name="list_p" value="ql_phong"></a>
<form action="index.php?url=lroom" method="POST" enctype="multipart/form-data">
     gọi để xử lý hàm 
    <h3>phần này dùng để thêm mã phòng và loại phòng</h3>
    <div class="form-admin">
        mã loại phòng</br>
        <input type="number" name="ma_room" disabled="" placeholder="auto">
    </div>
    <div class="form-admin">
        tên loại phòng<br>
        <input type="text" name="name_room"/>
    </div>
    <div class="form-admin">
        description<br>
        <input type="text" name="des"/>
    </div>
    <div class="form-admin">
        price<br>
        <input type="number" name="price"/>
    </div>
    <div class="form-admin">
        person<br>
        <input type="number" name="person"/>
    </div>
    <div class="form-admin">
       image<br>
       <input type="file" name="img">
    </div>
    <div class="sub">
        <input type="submit" name="kqua" value="insert">
        <input type="reset" value="nhập lại">
    </div>
</form>-->
<a href="index.php?url=lroom"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-2">ADD BILL</button></a>
<a href="index.php?url=list_ds_phong"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">EDIT BILL</button></a>
<a href="index.php?url=list_ds_phong"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">DELETE BILL</button></a>
<a href="index.php?url=list_ds_phong"><button style="height: 100px" type="button" class="btn btn-outline-secondary btn-lg mt-3 ms-5">List BILL</button></a>
<div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
            <h6>ADD INFORMATION BILL</h6>
        </div>
        <h6 class="text-right">Edit Profile</h6>
    </div>
    <form action="index.php?url=Lroom" method="POST">
        <div class="row mt-2">
            <div class="col-md-6"><input type="number" name="code_room" class="form-control" placeholder="Auto" disabled="" ></div>
            <div class="col-md-6"><input type="number" name="code_room" class="form-control" placeholder="Auto" disabled="" ></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="text" name="name_type_room" class="form-control"></div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6"><input type="text" name="des" class="form-control"></div>
        </div>
        <div class="mt-3 text-right">
            <input class="btn btn-primary profile-button" type="submit" name="kqua"></div>
    </form>
</div>