<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Funda of Web IT</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-3">
                        <div class="card-header">
                            <h4>How to Filter or Find or Search data using Multiple Checkbox in php</h4>
                        </div>
                    </div>
                </div>

                <!-- Brand List  -->
                <div class="col-md-3">
                    <form action="" method="POST">
                        <div class="card shadow mt-3">
                            <div class="card-header">
                                <h5>Filter 
                                    <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
                                </h5>
                            </div>
                            <div class="card-body">
                                <h6>Brand List</h6>
                                <hr>
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "assignment_web204");
                                $brand_query = "SELECT * FROM a_brands";
                                $brand_query_run = mysqli_query($con, $brand_query);
                                if (mysqli_num_rows($brand_query_run) > 0) {
                                    foreach ($brand_query_run as $brandlist) {
                                        $checked = [];
                                        if (isset($_POST['brands'])) {
                                            $checked = $_POST['brands'];
                                        }
                                        ?>
                                        <div>
                                            <input type="checkbox" name="brands[]" value="<?= $brandlist['id']; ?>" 
                                            <?php
                                            if (in_array($brandlist['id'], $checked)) {
                                                echo "checked";
                                            }
                                            ?>
                                                   />
                                        <?= $brandlist['name']; ?>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    echo "No Brands Found";
                                }
                                ?>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Brand Items - Products -->
                <div class="col-md-9 mt-3">
                    <div class="card ">
                        <div class="card-body row">
                            <?php
                            if (isset($_POST['brands'])) {
                                $branchecked = [];
                                $branchecked = $_POST['brands'];
//                                 echo $branchecked;
                                foreach ($branchecked as $rowbrand) {
//                                     echo $rowbrand;
                                    $products = "SELECT * FROM a_products WHERE brand_id IN ($rowbrand)";
                                    $products_run = mysqli_query($con, $products);
//                                    var_dump($products_run);
                                    if (isset($rowbrand)) {
                                        foreach ($products_run as $proditems) :
                                            ?>
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    <h6><?= $proditems['name']; ?></h6>
                                                </div>
                                            </div>
                                            <?php
                                        endforeach;
                                    }
                                }
                            } else {
                                $products = "SELECT * FROM a_products";
                                $products_run = mysqli_query($con, $products);
                                if (mysqli_num_rows($products_run) > 0) {
                                    foreach ($products_run as $proditems) :
                                        ?>
                                        <div class="col-md-4 mt-3">
                                            <div class="border p-2">
                                                <h6><?= $proditems['name']; ?></h6>
                                            </div>
                                        </div>
                                        <?php
                                    endforeach; // dongf thuws 105 tuc la echo tat ca cac phuong tuoc cos trong do ra nhe 
                                } else {
                                    echo "No Items Found";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>