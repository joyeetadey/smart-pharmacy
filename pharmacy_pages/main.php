<?php
$conn=mysqli_connect("localhost","root","","software_engg");
session_start();
$pid=$_SESSION['pharm_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
        body{
            background-color: whitesmoke;
        }
        nav{
            background-color: black;
            opacity: 85%;
        }
        a{
            font-size: 20px;
        }
        .card-counter{
            box-shadow: 2px 2px 10px #DADADA;
            margin: 5px;
            padding: 20px 10px;
            background-color: #fff;
            height: 100px;
            border-radius: 5px;
            transition: .3s linear all;
        }

        .card-counter:hover{
            box-shadow: 4px 4px 20px #DADADA;
            transition: .3s linear all;
        }

        .card-counter.primary{
            background-color: darkslategray;
            color: #FFF;
        }

        .card-counter.danger{
            background-color: #ef5350;
            color: #FFF;
        }

        .card-counter.success{
            background-color: teal;
            color: #FFF;
        }

        .card-counter.info{
            background-color: darkorange;
            color: #FFF;
        }

        .card-counter i{
            font-size: 5em;
            opacity: 0.2;
        }

        .card-counter .count-numbers{
            position: absolute;
            right: 35px;
            top: 20px;
            font-size: 32px;
            display: block;
        }

        .card-counter .count-name{
            position: absolute;
            right: 35px;
            top: 65px;
            font-style: italic;
            text-transform: capitalize;
            opacity: 0.5;
            display: block;
            font-size: 18px;
        }
        .card{
            box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2), 0 6px 8px 0 rgba(0, 0, 0, 0.19);
            padding: 30px;
        }
    </style>
<body>
<?php
$res=mysqli_query($conn,"Select * from products where pharmacy_id='$pid'");
$cnt_prod=mysqli_num_rows($res);
$today_month= date('m');
$res3=mysqli_query($conn,"Select Month(date), SUM(total_price), SUM(qty) FROM orders WHERE pid='$pid' GROUP BY Month(date)");
while ($row3=mysqli_fetch_array($res3)){
    if($row3['Month(date)']==$today_month){
        $current_money=$row3['SUM(total_price)'];
    }
    if($row3['Month(date)']==$today_month-1){
        $last_money=$row3['SUM(total_price)'];
    }
}

$res2=mysqli_query($conn,"Select SUM(med_qty) from products where pharmacy_id='$pid'");
while ($row2=mysqli_fetch_array($res2)){
    $totalprod=$row2['SUM(med_qty)'];
}
$capacity=100*$cnt_prod;
?>
<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Status', 'Count'],
            ['Full',     <?php echo $totalprod?>],
            ['Empty',      <?php echo $capacity-$cnt_prod?>]
        ]);

        var options = {
            title: 'Inventory status',
            pieHole: 0.4,
            slices: {
                0: { color: 'teal' },
                1: { color: 'orangered' }
            }
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
    }
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3" style=" ]height: 200px">
            <div class="card card-counter primary">
                <i class="fa fa-code-fork"></i>
                <span class="count-numbers">4</span>
                <span class="count-name">Companies</span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-counter danger">
                <i class="fa fa-users"></i>
                <span class="count-numbers">12</span>
                <span class="count-name">Product Types</span>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card card-counter success">
                <i class="fa fa-database"></i>
                <span class="count-numbers">3</span>
                <span class="count-name">Product Categories</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-counter info">
                <i class="fa fa-ticket"></i>
                <span class="count-numbers">4</span>
                <span class="count-name">Orders this month</span>
            </div>
        </div>
    </div><br><br>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
            <div class="pull-left" id="donutchart" style="height: 500px; width: 800px"></div>
        </div>
        </div>
        <div class="col-md-4 pull-right">
            <div class="card text-center">
            <h5>Avg Profit This Month</h5>
                <h4 class="text-success"><i class="fa fa-arrow-up" aria-hidden="true"></i>  &#8377; <?php echo $current_money?></h4>
                <h6>Compared to last month</h6>
                <h6 class="text-success"> &#8377; <?php echo $last_money?></i></h6>
            </div>
            <br>
            <div class="card">
                <h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Product alert!</h4><br>
                <?php
                /*
                $res6=mysqli_query($conn,"Select med_qty,med_name from products2 where pharmacy_id='$pid'");
                while ($row6=mysqli_fetch_array($res6)) {
                    if ($row6['med_qty'] < 20) {
                        $medname = $row6['med_name'];
                        $msg = "Very Few Quantity of Products Left!!! Please update stock soon";
                        $qty_left = $row6['med_qty'];
                    } else {
                        $medname = "";
                        $msg = "Stock looks good. No need to update";
                        $qty_left = "";
                    }
                }*/
                ?>
                <h5 class="text-danger">Very Few Products Left!!!</h5>
                <h6 class="text-dark">Product: Calpol 650 mg tablet</h6>
                <h6 class="text-dark">Qty left: 14</h6>
            </div>
        </div>
    </div>
</div>

<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/owl-carousel-thumb.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>
</body>

</html>
