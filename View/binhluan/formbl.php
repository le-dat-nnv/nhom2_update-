<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
$ma_hh = $_REQUEST['ma_hh'];
$dsbl = loadall_binhluan($ma_hh);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../style/style1.css"/>
        <script src="https://kit.fontawesome.com/5bf1290cf0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            .tde>table{
                width: 90%;
            }
            .tde>table>td:nth-child(1){
                width: 50%;
            }
            .tde>table>td:nth-child(2){
                width: 30%;
            }

        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-sm-12">
                <div class="tk1_one2">
                    <div class="tde">
                        <p>Bình Luận</p>
                        <table>
                            <?php
                            foreach ($dsbl as $bl) {
                                extract($bl);
                                echo'    <tr>
                                        <td>' . $noi_dung . '</td>
                                        <td>' . $ma_hh . '</td>
                                        <td>' . $ngay_bl . '</td>
                                        </tr>';
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <form action = "<?= $_SERVER['PHP_SELF']; ?>" method = "POST">
                    <input type = "hidden" name = "ma_hh" value = "<?= $ma_hh ?>">
                    <input class = "notk" type = "text" name = "noidung" placeholder = "Bình Luận"/>
                    <input class = "notk1" type = "submit" value = "gửi" name = "guibl" />

-->                    <script>
                        function myFunction() {
                            alert("phải đăng nhập mới có thể bình luận ");
                        }
                    </script>
                </form>

            </div>
        </div>

        <?php
        if (isset($_SESSION['user'])) {
            if (isset($_POST['guibl']) && ($_POST['guibl'])) {
                $noidung = $_POST['noidung'];
                $ma_hh = $_POST['ma_hh'];
//            $ma_kh = $_POST['ma_kh'];
//        $ma_kh = $_SESSION['ma_kh']['ma_bl'];
                $ngay_bl = date('h:i:sa d/m/Y');
                insert_binhluan($ma_hh, $noidung, $ngay_bl);
                header("Location: " . $_SERVER['HTTP_REFERER']);
        
            ?>
        
            <?php }  else {
//                header("location : action.php");
            }
        }
        ?>

