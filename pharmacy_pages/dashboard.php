<?php
$conn=mysqli_connect("localhost","root","","software_engg");
session_start();
$pid=$_SESSION['pharm_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pharmacy Dashboard</title>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="images/icon.png">
    <link rel="icon" type="image" href="images/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Customer Dashboard</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
</head>
<body>
<?php
$sql=mysqli_query($conn,"select * from pharmacy where p_id='$pid'");
while ($row=mysqli_fetch_array($sql)){
    $name=$row['p_name'];
}
?>
<div class="wrapper">
    <div class="sidebar" data-image="../assets/img/sidebar-bg.jpg">
        <div class="sidebar-wrapper" style="background-color: teal">
            <div class="logo">
                <img src="images/logo.png" width="200px" height="80px">
                <h4><b><br></br>Hello, <?php echo $name ?></b></h4>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a class="nav-link" href="pharmacy_home.php" target="mainbody">
                        <i class="nc-icon nc-chart-pie-35"></i>
                        <h5>Home</h5>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="inventory.php">
                        <i class="nc-icon nc-bullet-list-67"></i>
                        <h5>Inventory</h5>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="insert.php">
                        <i class="nc-icon nc-atom"></i>
                        <h5>Add Medicines</h5>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="sales_report.php">
                        <i class="nc-icon nc-chart-bar-32"></i>
                        <h5>Sales Report</h5>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="profile.php">
                        <i class="nc-icon nc-circle-09"></i>
                        <h5>Profile</h5>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
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
        <div id="main">
            <iframe name="mainbody" id="frames" src="main.php" style="border: none; height:1500px; width:98%; margin:10px">
            </iframe>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="section">
                </div>
            </div>
        </div>
        <footer class="page-footer font-small unique-color-dark">

            <div style="background-color: #1a0033; color: white">
                <div class="container">
                    <div class="row py-4 d-flex align-items-center">
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <h5 class="mb-0">Get connected with us on social networks!</h5>
                        </div>
                        <div class="col-md-6 col-lg-7 text-center text-md-right" style="font-size: 24px">
                            <a class="fb-ic">
                                <i class="fa fa-facebook-official" aria-hidden="true">  </i>
                            </a>
                            <a class="tw-ic">
                                <i class="fa fa-twitter-square" aria-hidden="true">  </i>
                            </a>
                            <a class="gplus-ic">
                                <i class="fa fa-google-plus-square" aria-hidden="true"> </i>
                            </a>
                            <a class="ins-ic">
                                <i class="fa fa-instagram" aria-hidden="true"> </i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container text-center text-md-left mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Medi+</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>India's leading all-in-one medical website</p>

                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Services</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="#!">E-Pharmacy</a>
                        </p>
                        <p>
                            <a href="#!">Substitute Search</a>
                        </p>
                        <p>
                            <a href="#!">Disease Predictor</a>
                        </p>
                        <p>
                            <a href="#!">Medical Queries</a>
                        </p>

                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="#">Your Account</a>
                        </p>
                        <p>
                            <a href="#!">Sell Medicines online</a>
                        </p>
                        <p>
                            <a href="#!">Help</a>
                        </p>

                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase font-weight-bold"><a href="contact.html" target="mainbody">Contact</a></h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fas fa-home mr-3"></i> N</p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i>mediplus@gmail.com</p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p>
                            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

                    </div>

                </div>
            </div>
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="template.html"> Medi+</a>
            </div>
        </footer>
    </div>
</div>

</body>
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="../assets/js/plugins/chartist.min.js"></script>
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<script src="../assets/js/demo.js"></script>

</html>

