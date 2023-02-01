<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <style>
            body{
                
                background-image: url(Designer/image/mountains-g31f292f09_1920.jpg);
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
            }
/*            .fontt{
                width:100%;
                height:100%;
                background:#546E7A;
            }*/
        </style>
    </head>
    <body>

    </body>
</html>

<div class="container-fluid">
     <div class="row mt-5 justify-content-center g-0">
        <div class=" mb-3 mt-5 bg-white" style="max-width: 750px; height: 400px">
            <div class="row g-0">
                <div class="col-lg-6" >
                    <img style="height: 400px;" src="Designer/image/banner.png" class="img-fluid rounded-start w-100" alt="...">
                </div>
                <div class="col-lg-6">
                    <div class="card-body">
                        <h5 class="card-title">Sign in</h5>
                    </div>
                    <form action="index.php?url=login" method="POST" class="ms-3">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="text" class="form-control w-75" name="name" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control w-75" name="pass">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" >
                            <label class="form-check-label">Check me out</label>
                        </div>
                        <input type="submit" name="dangnhap" class="btn btn-primary" value="đăng nhập">
                        <!--                        <div class="form-admin">
                                                    họ và tên<br>
                                                    <input type="text" name="name"/>
                                                </div>
                                                <div class="form-admin">
                                                    pass<br>
                                                    <input type="password" name="pass"/>
                                                </div>
                                                <div class="sub">
                                                    <input type="submit" name="dangnhap" value="đăng nhập">
                                                    <input type="reset" value="nhập lại">
                                                    <a href="index.php?url=enroll"><input type="button" value="đăng ký"></a>
                                                    <a href="index.php?url=forget"><input type="button" value="quên mât khẩu"></a>
                                                </div>-->
                    </form>
                    <ul>
                        <a href="index.php?url=enroll"><li>Quên mật khẩu</li></a>
                        <li>Đăng Ký</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>