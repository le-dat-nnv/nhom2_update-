<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--<link rel="stylesheet" href="designer/style_1_1.css"/>-->
        <!-- CSS only -->
        <!--<link rel="stylesheet" href="designer/style.css"/>-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <style>
            .tde{
                background-color: red;
                height: 80px;
            }
            .test{

                /*                width:200px;*/
                height:600px;
                overflow-x:hidden;
                overflow-y:auto;
            }
            .spacing{
                margin-top: 100px;
            }
        </style>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 bg-dark ">
                    <div style="height: 700px;"class=" w-100">
                        <div class="card bg-dark  border-0" style="max-height: 250px;">
                            <img src="../Designer/image/wifi.svg" class="w-50 ms-5" alt="">
                            <div class="card-body ms-5 text-white">
                                <h5>Lê Huy Đạt</h5>
                                <p>management</p>
                            </div>
                        </div>
                        <div class=" justify-center ">
                            <div class="container mx-auto">
                                <div class="">
                                    <div class="">
                                        <ul class="ms-2">
                                            <a style="text-decoration: none;" href="index.php?url=type_room"><li  class="list-group-item rounded-sm px-3 py-3 text-white ">Quản lý phòng</li></a>
                                            <a style="text-decoration: none;" href="index.php?url=phong"><li class="list-group-item list-none rounded-sm px-3 py-3 cursor-pointer text-white " style='border-bottom-width:0'>Quản lý đặt phòng</li></a>
                                            <a style="text-decoration: none;" href="index.php?url=detail_room"><li class="list-group-item list-none rounded-sm px-3 py-3 cursor-pointer text-white " style='border-bottom-width:0'>Chi Tiết đặt phòng</li></a>
                                            <a style="text-decoration: none;"><li class="list-group-item bg-dark list-none rounded-sm px-3 py-3 cursor-pointer text-white " style='border-bottom-width:0'>Loại phòng</li></a>
                                            <a style="text-decoration: none;" href="index.php?url=ldichvu"><li class="list-group-item bg-dark list-none rounded-sm px-3 py-3 cursor-pointer text-white ">Loại dịch vụ</li></a>
                                            <a style="text-decoration: none;" href="index.php?url=service"><li class="list-group-item list-none rounded-sm px-3 py-3 cursor-pointer text-white " style='border-bottom-width:0'>Dịch vụ</li></a>
                                            <a style="text-decoration: none;"><li class="list-group-item list-none rounded-sm px-3 py-3 cursor-pointer text-white " style='border-bottom-width:0'>Stting</li></a>
                                            <a href="index.php?url=gallery_room"><li class="list-group-item bg-dark list-none rounded-sm px-3 py-3 cursor-pointer text-white " style='border-bottom-width:0'>Gallery</li></a>
                                            <!--<a><li class="list-group-item bg-dark list-none rounded-sm px-3 py-3 cursor-pointer text-white ">List Item 5</li>Loại dịch vụ</a>-->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> 
                <!--</div>-->
                <div class="col-lg-9 bg-white shadow tde ">
                    <div style="height: 600px;"class=" border-1-light w-100 mt-5">
                        