<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div class="p-3 py-5 bg-white shadow rounded mt-5 ms-2 " style="width: 855px">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex flex-row align-items-center back"><i class="fa fa-long-arrow-left mr-1 mb-1"></i>
                    <h6>List thông tin của người đặt phòng</h6>
                </div>
                <h6 class="text-right">Edit Profile</h6>
            </div>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <td>id</td>
                        <td>loại phòng</td>
                        <td>số lượng phòng</td>
                        <td>giá cao nhất </td>
                        <td>giá thấp nhất</td>
                        <td>trung bình</td>
                        <td>thao tác</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($thongke as $sati) {
                        extract($sati);
                        $suaty = "index.php?url=sua_account&ma_p=" . $id_type_rooms;
                        $xoaty = "index.php?url=xoa_account&ma_p=" . $id_type_rooms;
                        echo "<tr>
                                <td>$id_type_rooms</td>
                                <td>$name</td>
                                <td>$COUNTsp</td>
                                <td>$minprice</td>
                                <td>$maxprice</td>
                                <td>$tb</td>
                    <td><a href=" . $suaty . "><input type='button' value='sửa'/></a><a href=" . $xoaty . "><input type='button' value='xóa'/></a></td>
        </tr>";
                    }
                    ?>
            </table>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <td>id</td>
                        <td>loại phòng</td>
                        <td>số lượng phòng</td>
                        <td>giá cao nhất </td>
                        <td>giá thấp nhất</td>
                        <td>trung bình</td>
                        <td>thao tác</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($thongke as $sati) {
                        extract($sati);
                        $suaty = "index.php?url=sua_account&ma_p=" . $id_type_rooms;
                        $xoaty = "index.php?url=xoa_account&ma_p=" . $id_type_rooms;
                        echo "<tr>
                                <td>$id_type_rooms</td>
                                <td>$name</td>
                                <td>$COUNTsp</td>
                                <td>$minprice</td>
                                <td>$maxprice</td>
                                <td>$tb</td>
                                <td><a href=" . $suaty . "><input type='button' value='sửa'/></a><a href=" . $xoaty . "><input type='button' value='xóa'/></a></td>
        </tr>";
                    }
                    ?>
            </table>
            <div id="piechart"></div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <script type="text/javascript">
                // Load google charts
                google.charts.load('current', {'packages': ['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                // Draw the chart and set the chart values
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                    <?php
                    foreach ($thongke as $bd_tk) {
                        extract($bd_tk);
                        echo "['" . $bd_tk['name'] . "'," . $bd_tk['COUNTsp'] . "],";
                    }
                    ?>
//                        ['Work', 8],
//                        ['Eat', 2],
//                        ['TV', 4],
//                        ['Gym', 2],
//                        ['Sleep', 8]
                    ]);

                    // Optional; add a title and set the width and height of the chart
                    var options = {'title': 'My Average Day', 'width': 550, 'height': 400};

                    // Display the chart inside the <div> element with id="piechart"
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    chart.draw(data, options);
                }
            </script>
            <?php
            // put your code here
            ?>
            <div id="piechart_price"></div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <script type="text/javascript">
                // Load google charts
                google.charts.load('current', {'packages': ['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                // Draw the chart and set the chart values
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                    <?php
                    foreach ($thongke as $bd_tk) {
                        extract($bd_tk);
                        echo "['" . $bd_tk['name'] . "','" . $bd_tk['COUNTsp'] . "'],";
                    }
                    ?>
//                        ['Work', 8],
//                        ['Eat', 2],
//                        ['TV', 4],
//                        ['Gym', 2],
//                        ['Sleep', 8]
//                    ]);

                    // Optional; add a title and set the width and height of the chart
                    var options = {'title': 'price', 'width': 550, 'height': 400};

                    // Display the chart inside the <div> element with id="piechart"
                    var chart = new google.visualization.PieChart(document.getElementById('piechart_price'));
                    chart.draw(data, options);
                    // thống kê số % người đặt phòng và doanh thu 
                }
            </script>
    </body>
</html>
