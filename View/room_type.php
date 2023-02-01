<html>
    <head>
        <title>title</title>
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <style>
            .spacing{
                margin-left: 490px;
            }
            .spacing_1{
                margin-left: 50px;
            }
        </style>
    </head>
    <body>
        <?php
        include 'layout/header.php';
        ?>
        <h2 class="mt-5 pt-4 mb-4 fw-bold h-font text-center" style="margin-top: 200px;font-family: Noto11; font-size: 70px">Our rooms</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <nav class="navbar bg-white rounded shadow ">
                        <div class="container-fluid">
                            <h4 class="mt-2 ms-4">Fiter</h4>
                        </div>
                        <form action="index.php?url=add_room" method="POST">
                            <div class="border bg-light p-3 rounded mb-3 ms-5" style="width: 260px;">
                                <h5 style="font-size: 18px;">check abilitiy</h5>
                                <label class="form-lable" style="font-weight: 500">check_in</label>
                                <input type="text" class="form-control shadow-none" name="check_in" id="txtCheckin" name="trip-start" value="<?php echo $rooms['0'] ?>"/>
                                <label class="form-lable" style="font-weight: 500">check_out</label>
                                <input type="text" class="form-control shadow-none" name="check_in" id="txtCheckout" name="trip-start" value="<?php echo $rooms['1'] ?>"/>
                                <script>
                                    $(document).ready(function () {
                                        $("#txtCheckin").datepicker({
                                            dateFormat: "dd-M-yy",
                                            onSelect: function (date) {
                                                var date2 = $('#txtCheckin').datepicker('getDate');
                                                date2.setDate(date2.getDate());
                                                $('#txtCheckout').datepicker('setDate', date2);
                                                //sets minDate to dateofbirth date + 1
                                                $('#txtCheckout').datepicker('option', 'minDate', date2);
                                            }
                                        });
                                        $('#txtCheckout').datepicker({
                                            dateFormat: "dd-M-yy",
                                            onClose: function () {
                                                var dt1 = $('#txtCheckin').datepicker('getDate');
                                                console.log(dt1);
                                                var dt2 = $('#txtCheckout').datepicker('getDate');
                                                if (dt2 <= dt1) {
                                                    var minDate = $('#txtCheckout').datepicker('option', 'minDate');
                                                    $('#txtCheckout').datepicker('setDate', minDate);
                                                }
                                            }
                                        });
                                    });
                                </script>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3 ms-5" style="width: 260px;">
                                <h5 style="font-size: 18px;">Facilities</h5>
                                <div class="mb-3">
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Facilities one</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Facilities one</label>
                                    </div>
                                    <div class="mb-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Facilities one</label>
                                    </div>
                                </div>
                            </div>
                            <div class="border bg-light p-3 rounded mb-3 ms-5" style="width: 260px;">
                                <h5 style="font-size: 18px;">Person</h5>
                                <div class="mb-3">
                                    <div class="mb-2">
                                        <label class="form-lable" style="font-weight: 500">Adults</label>
                                        <input type="number" class="form-control shadow-none" name="check_in" id="date" name="trip-start" value="<?php echo $rooms['2'] ?>"/>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-lable" style="font-weight: 500">Childrens</label>
                                        <input type="number" class="form-control shadow-none" name="check_out" id="date" name="trip-start" value="<?php echo $rooms['3'] ?>"/>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <form action="" method="POST">
                            <div class="border bg-light p-3 rounded mb-3 ms-5" style="width: 260px;">
                                <h5>Filter 
                                    <input type="submit" class="btn btn-primary btn-sm float-end"/>
                                </h5>
                                <h6>LOẠI PHÒNG</h6>
                                <hr>
                                <?php
                                $list_room = l_phong();
                                foreach ($list_room as $phong) {
                                    $checked = [];
                                    extract($phong);
                                    ?>
                                    <div>
                                        <input type="checkbox" name="idss" value="<?php echo $id_type_rooms ?>" 
                                        <?php
                                        ?>/>
                                               <?= $name; ?>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </form>
                    </nav>
                </div>
                <div class="col-lg-8" style="">
                    <?php
                    $tb = "";
                    $ico = "";
                    foreach ($travebooking as $show) {
                        extract($show);
                        $id = $show['id_room'];
                        $check_in = $rooms['0'];
                        $check_out = $rooms['1'];
                        $adults = $rooms['2'];
                        $childrens = $rooms['3'];
                        $linksp1 = "index.php?url=detail_room&id=" . $id_room;
                        $hinhpt = './upload/' . $img_room;
                        $list_facilitiess = facilities_room($id_room);
                            echo '
                    <div class="card mb-3 border-0 shadow">
                        <div class="row g-0 p-3" style="height: 250px;">
                            <div class="col-md-5 mt-2">
                                <img style="height: 200px; width:95%;" src="' . $hinhpt . '" class="img-fluid rounded">
                            </div>
                            <div class="col-md-4 mt-2">
                                <h5 class="mb-3" style="font-family: Noto11; font-size: 30px;">' . $name . '</h5>
                                <div class="facilities mb-4 mt-2">
                                    <h6 class="mb-1" style="font-family: Noto2; font-size: 18px;">'.$show['mo_ta'].'</h6>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <h6 class="mb-4 mt-2" style="text-align:center">Total :' . $don_gia . ' VNĐ</h6>
                                <div class="card-body text-aligh-center">
                                <form action="index.php?url=view_room" method="POST" style="margin-top:-20px">
                                    <input type="hidden" value="' . $id_room . '" name="id"/>
                                    <input type="hidden" value="' . $name . '" name="name_room"/>
                                    <input type="hidden" value="' . $mo_ta . '" name="mo_ta"/>
                                    <input type="hidden" value="' . $ma_rooms . '" name="ma_p"/>
                                    <input type="hidden" value="' . $don_gia . '" name="don_gia"/>
                                    <input type="hidden" value="' . $hinhpt . '" name="img"/>
                                    <input type="hidden" value="' . $check_in . '" name="check_in"/>
                                    <input type="hidden" value="' . $check_out . '" name="check_out"/>
                                    <input type="hidden" value="' . $adults . '" name="adults"/>
                                    <input type="hidden" value="' . $childrens . '" name="childrens"/>
                                    <input type="submit" name="view_room" value="add_book_room" class="btn btn-sm btn-outline-success shadow-none w-100 mb-2">
                                </form>
                                <form action="index.php?url=detail_room" method="POST>
                                    <input type="hidden" value="' . $id_room . '" name="ids"/>
                                    <input type="hidden" value="' . $name . '" name="name"/>
                                    <a href="' . $linksp1 . '" class="btn btn-sm btn-outline-dark shadow-none w-100">Detail Room</a>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php include 'layout/footer.php'; ?>
    </body>
</html>