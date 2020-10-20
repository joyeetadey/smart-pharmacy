<?php
$conn=mysqli_connect("localhost","root","","software_engg");
session_start();
$cid=$_SESSION['cust_id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Customer Dashboard</title>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image" href="images/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Customer Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
<df-messenger
    intent="WELCOME"
    chat-title="MediBot"
    agent-id="e08f473b-d0f7-41ed-b6bc-388d06577fbf"
    language-code="en"
></df-messenger>
<body>
<?php
$sql=mysqli_query($conn,"select * from customer where c_email='$cid'");
while ($row=mysqli_fetch_array($sql)){
    $name=$row['c_fname'];
}
?>
<div class="wrapper">
    <div class="sidebar" data-image="../assets/img/sidebar-bg.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <img src="images/logo.png" width="200px" height="80px">
                <h4><b>Hello, <?php echo $name ?></b></h4>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.html" target="mainbody">
                        <i class="nc-icon nc-chart-pie-35"></i>
                        <h5>Home</h5>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="medical_queries.html">
                        <i class="nc-icon nc-ambulance"></i>
                        <h5>Medical Queries</h5>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="covid_corner.html">
                        <i class="nc-icon nc-atom"></i>
                        <h5>Covid Corner</h5>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="order_history.html">
                        <i class="nc-icon nc-delivery-fast"></i>
                        <h5>Orders</h5>
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="user_profile.html">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" style="color: white">Features</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="substitute_search.html">Substitute Search</a>
                            <a class="dropdown-item" href="#">Disease Predictor</a>
                            <a class="dropdown-item" href="#">Doctor Appointements</a>
                        </div>
                    </li>
                    <li class="nav-item">

                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" style="color: white">Products</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink" style="width: 500px">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h4>General Health Medicines</h4>
                                        <ul class="list-unstyled">
                                            <li><a href="gp_products.php">Cold And Cough</a> </li>
                                            <li><a href="#">Anti Allergic</a> </li>
                                            <li><a href="#">Pain Analgesics</a></li>
                                            <li><a href="#">Gastro Intestinal</a></li>
                                            <li><a href="#">Fever</a></li>
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Gynacological</a></li>
                                            <li><a href="#">Vitamins Minerals Nutrients</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4>Personal Care</h4>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Skin Care</a> </li>
                                            <li><a href="#">Hair Care</a> </li>
                                            <li><a href="#">Baby Care</a></li>
                                        </ul>
                                        <h4>Health Conditions</h4>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Stomach Care</a> </li>
                                            <li><a href="#">Heart Care</a> </li>
                                            <li><a href="#">Eye Care</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4">
                                        <h4>Health Care Devices</h4>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Masks</a> </li>
                                            <li><a href="#">Diabetes Monitors</a> </li>
                                            <li><a href="#">Thermometers</a></li>
                                        </ul>
                                        <h4>Homeopathy</h4>
                                        <ul class="list-unstyled">
                                            <li><a href="#">Drops</a> </li>
                                            <li><a href="#">Dilutions</a> </li>
                                            <li><a href="#">Biochemics</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#" style="color: white">About
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
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </div>
            </div>

        </nav>
        <div id="main">
            <iframe name="mainbody" id="frames" src="customer_home.php" style="border: none; height:1500px; width:98%; margin:10px">
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

