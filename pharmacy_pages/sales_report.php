<?php
$conn=mysqli_connect("localhost","root","","software_engg");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order History</title>
    <link rel="icon" type="image" href="images/icon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        #myTab{
            background-color: teal;
        }
        #mainbody{
            padding: 15px;
        }
        .container-fluid{
            background-color: #33cccc;
            height:120px;
            width: 100%;
            padding: 20px;
            color: white;
        }
        table{
            font-size: 18px;
        }
    </style>
    <script>
        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                <?php
                $res3=mysqli_query($conn,"SELECT item_name, SUM(total_price), SUM(qty) FROM orders WHERE pid='p101' GROUP BY item_name order by SUM(total_price) desc limit 15");
            while ($row3=mysqli_fetch_array($res3)){
                    ?>
                ["<?php echo $row3['item_name']?>", <?php echo $row3['SUM(total_price)']?>, "teal"],
                <?php
                }
                ?>
            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                { calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation" },
                2]);

            var options = {
                title: "Total Profit in Products",
                width: 800,
                height: 500,
                bar: {groupWidth: "90%"},
                legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
        }
        google.charts.load("current", {packages:['corechart']});
        google.charts.setOnLoadCallback(drawbarChart);
        function drawbarChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", { role: "style" } ],
                <?php
                $res5=mysqli_query($conn,"SELECT  Monthname(date), SUM(total_price), SUM(qty) FROM orders WHERE pid='p101' GROUP BY Monthname(date)");
                while ($row5=mysqli_fetch_array($res5)){
                ?>
                ["<?php echo $row5['Monthname(date)']?>", <?php echo $row5['SUM(total_price)']?>, "teal"],
                <?php
                }
                ?>
            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                { calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation" },
                2]);

            var options = {
                title: "Total Profit Per Month",
                width: 800,
                height: 500,
                bar: {groupWidth: "90%"},
                legend: { position: "none" },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("monthchart_values"));
            chart.draw(view, options);
        }
    </script>
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color:#1a0033; color: white">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="basicExampleNav">
        <ul class="navbar-nav mr-auto" style="font-size: 20px">
            <li class="nav-item active">
                <a class="nav-link" href="about.php" style="color: white">About
                    <span class="sr-only">(current)</span>
                </a>
            </li>
        </ul>
        <form class="form-inline">
            <div class="md-form my-0">
                <i class="nc-icon nc-zoom-split"></i>
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
        </form>
        <div class="nav-item dropdown" style="float: right">
            <a href="cart.php"<i class="nc-icon nc-cart-simple"></i></a>
        </div>
        <div class="nav-item dropdown" style="float: right">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false"><i class="nc-icon nc-single-02"></i></a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
        </div>
    </div>

</nav>
<div class="container-fluid">
    <h4><a style="color: white" href="dashboard.php">Home</a> / <a style="color:darkslategray" href="order_history.php">Inventory</a> </h4>
</div>
<div id="mainbody">
<form method="post" action="csv.php" align="center">
    <input type="submit" name="export" value="CSV Export" class="btn btn-success" />
</form><br>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
           aria-selected="true" ><h4>By Products</h4></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" style="color: white" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
           aria-selected="false"><h4>By Month</h4></a>
    </li>
</ul><br><br>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="container">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h2 class="card-title">Inventory</h2>
                </div>
                <div class="card-body table-full-width">
                    <table class="table table-hover table-striped">
                        <thead style="font-size: 30px;">
                        <th>Medicine Name</th>
                        <th>Total Profit</th>
                        <th>Qty of Medicine Sold</th>
                        </thead>
                        <tbody>
                        <?php
                        $res=mysqli_query($conn,"SELECT item_name, SUM(total_price), SUM(qty) FROM orders WHERE pid='p101' GROUP BY item_name");
                        while ($row=mysqli_fetch_array($res)){
                            ?>
                            <tr>
                                <td> <?php echo $row['item_name'];  ?> </td>
                                <td> <?php echo $row['SUM(total_price)'];  ?> </td>
                                <td> <?php echo $row['SUM(qty)'];  ?> </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    <br>
                    <?php $res4=mysqli_query($conn," SELECT SUM(total_price) FROM orders WHERE pid='p101';");
                            while ($row4=mysqli_fetch_array($res4)){
                                $total=$row4['SUM(total_price)'];
                            }
                    ?>
                    <h4 class="text-info">&nbsp;&nbsp;&nbsp;Total Profit: &#8377;<?php echo $total?></h4>
                    <div id="columnchart_values" style="width: 1200px; height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="container">
            <div class="card strpied-tabled-with-hover">
                <div class="card-header ">
                    <h2 class="card-title">Inventory</h2>
                </div>
                <div class="card-body table-full-width">
                    <table class="table table-hover table-striped">
                        <thead style="font-size: 30px;">
                        <th>Month Name</th>
                        <th>Qty of Medicine Sold</th>
                        <th>Total Profit</th>
                        </thead>
                        <tbody>
                        <?php
                        $res2=mysqli_query($conn,"SELECT  Monthname(date), SUM(total_price), SUM(qty) FROM orders WHERE pid='p101' GROUP BY Monthname(date)");
                        while ($row2=mysqli_fetch_array($res2)){
                            ?>
                            <tr>
                                <td> <?php echo $row2['Monthname(date)'];  ?> </td>
                                <td> <?php echo $row2['SUM(qty)'];  ?> </td>
                                <td> <?php echo $row2['SUM(total_price)'];  ?> </td>

                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    <br>
                    <div id="monthchart_values" style="width: 1200px; height: 500px;"></div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</body>
</html>


