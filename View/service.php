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
        <h2 class="mt-5 pt-4 mb-4 fw-bold h-font text-center">Service</h2>
        <div class="container">
                <?php
                $n = 0;
                $important = '';
                $important1 = '';
                $row = "";
                foreach ($show_service as $to) {
                    extract($to);
                    $hinhpt = './upload/' . $img_service;
                    if ($n == 0) {
                        $row = "row";
                        $important = '<img style="height:348px;" src="' . $hinhpt . '" class="img-fluid rounded-start w-100" alt="...">';
                        $important1 = '<div class="card-body">
                                        <h5 class="card-title">' . $ten_dv . '</h5>
                                        <p class="card-text">' . $mo_ta . '</p>
                                        <p class="card-text"><small class="text-muted">' . $price . '</small></p>
                                    </div>';
                    } else {
                        $row = "row mb-4 mt-5 pt-4";
                        $important = '<div class="card-body">
                                        <h5 class="card-title">' . $ten_dv . '</h5>
                                        <p class="card-text">' . $mo_ta . '</p>
                                        <p class="card-text"><small class="text-muted">' . $price . '</small></p>
                                    </div>';
                        $important1 = '<img style="height:348px;" src="' . $hinhpt . '" class="img-fluid rounded-start w-100" alt="...">';
                    }
                    ?>
                    <div class="<?php echo $row; ?>" >
                        <div class="col-lg-12 ">
                            <div class="card mb-3 border-1-light bg-light rounded shadow" style="height: 350px">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <?php echo $important; ?>
                                        <!--<img style="height:348px;" src="<?php // echo $hinhpt        ?>" class="img-fluid rounded-start w-100" alt="...">-->
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo $important1; ?>
                                        <!--                                    <div class="card-body">
                                                                                <h5 class="card-title"><?php // echo $ten_dv         ?></h5>
                                                                                <p class="card-text"><?php // echo $mo_ta         ?></p>
                                                                                <p class="card-text"><small class="text-muted"><?php echo $price ?></small></p>
                                                                            </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $n++;
                }
                ?>
                <!--                <div class="row mb-4 mt-5 pt-4">
                                    <div class="col-lg-12 ">
                                        <div class="card mb-3 border-1-light bg-light rounded shadow" style="height: 350px">
                                            <div class="row g-0">
                                                <div class="col-md-6">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Card title</h5>
                                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <img style="height: 348px;" src="Designer/image/img_part3.jpg" class="img-fluid rounded-start w-100" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
            </div>
        <?php include 'layout/footer.php'; ?>
    </body>
</html>

