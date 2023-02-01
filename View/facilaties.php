<html>
    <head>
        <title>title</title>
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
       
        <h2 class="mt-5 pt-4 mb-4 fw-bold h-font text-center">Đồ dùng đây đủ</h2>
        <div class="container">
            <div class="row">
                <?php 
                        foreach ($show_facilities as $ttdlld) {
                            extract($ttdlld);
                            $hinh_of_facilitis = "./upload/".$icon;
                        
                ?>
                <div class="col-lg-4 col-md-6 my-5">
                    <div class="card" style="max-width: 350px; margin: auto">
                        <div class="card-body bg-white shadow rounded">
                            <div class="d-flex align-items-center mb-2">
                                <img style="height: 80px" src="<?php echo $hinh_of_facilitis?>" alt="alt"/>
                                <h6 class=" ms-3"><?php echo $tieu_de ?></h6>
                            </div>
                            <p class="card-text"><?php echo $mo_ta ?></p>
                        </div>
                    </div>
                </div>
                        <?php }?>
            </div>
        </div>
            <?php include 'layout/footer.php'; ?>
    </body>
</html>

