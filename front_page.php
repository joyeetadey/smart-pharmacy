<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>front page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <style>
        .jumbotron-fluid{
            background-image: url("images/vjv.png");
            height: 600px;
            padding:100px;
            text-align: left;
        }
        .scrolling-navbar{
            background-color:transparent;
            font-size: 24px;
            height: 70px;
        }
        h1{
            text-align: left;
            font-size: 100px;
        }
        li{
            margin-left: 10px;
            color: white;
        }
        button{
            width: 160px;
            height: 50px;
            margin: 10px;
            float: right;
            border-radius: 30px;
            border: none;
            background-color: #1DC7EA;
            color: midnightblue;
            font-size: 18px;
        }
        .edukit{
            font-size: 80px;
        }
        .media{
            height: 400px;
            font-size: 30px;
            padding: 100px;
        }
        .page-footer{
            background-color: midnightblue;
            color: white;
        }
        .scrolling-navbar img{
            top:10px;
            margin-top: 10px;
            width:200px;
            height: 70px;
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar">
        <img src="images/logo.png">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="front_page.html" style="color: white"><b>Home</b> <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <a id="bright" onclick="lightmode()" style="float: right; color: black; font-size: 30px"><i class="fa fa-sun-o"></i>&nbsp;&nbsp</a>
            <a id="dark" onclick="darkmode()" style="float: right; color:black; font-size: 30px"><i class="fa fa-moon-o"></i></a>
            <button><a href="customer_pages/customer_login.php" target="_blank" style="color: white"> <b>Sign In (Customer)</b></a></button>
            <button><a href="pharmacy_pages/login.php" target="_blank" style="color: white"> <b>Sign In (Pharmacy)</b></a></button>
        </div>
    </nav>
</header>
<div id="top">
    <div class="jumbotron-fluid">
        <div class="text text-center rgba-stylish-strong py-5 px-4">
            <div class="py-5" style="color: black" id="heading">
                <h1 class="card-title h2 my-4 py-2">Enhance your<br> Pharmacy Experience<br> with </h1>
                <h1 class="edukit">Medi+</h1>
            </div>
        </div>
    </div>
</div><br>
<h2>Services Offered</h2><br>
<div class="row">
    <div class="col-md-3">
    <div class="card">
        <div class="card-image">
            <img src="images/c1.jpg" height="380px" width="350px">
        </div>
        <div class="card-body" style="background-color: #943bea; color: white">
            <h2>Privacy</h2><br>
            <h5>All your purchases, account details and transactions are private</h5>
        </div>
    </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-image">
                <img src="images/c2.jpg" height="380px" width="350px">
            </div>
            <div class="card-body" style="background-color: #943bea; color: white">
                <h2>All Medicines</h2><br>
                <h5>From Allopathy to homeopathy we have it all!!</h5>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-image">
                <img src="images/c3.jpg" height="380px" width="350px">
            </div>
            <div class="card-body" style="background-color: #943bea; color: white">
                <h2>Health Care Services</h2><br>
                <h5>Basic Health care services, medical queries available</h5>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-image">
                <img src="images/c4.jpg" height="380px" width="350px">
            </div>
            <div class="card-body" style="background-color: #943bea; color: white">
                <h2>24/7 Services</h2><br>
                <h5>24/7 services available and fast delivery</h5>
            </div>
        </div>
    </div>
</div><br>
<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-image">
                <img src="images/c5.jpg" height="380px" width="350px">
            </div>
            <div class="card-body" style="background-color: #943bea; color: white">
                <h2>Order Management</h2><br>
                <h5>Get detailed invoice and easy order management</h5>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <div class="card-image">
                <img src="images/c6.jpg" height="380px" width="350px">
            </div>
            <div class="card-body" style="background-color: #943bea; color: white">
                <h2>Health Care Devices</h2><br>
                <h5>Wide range of health care devices also available</h5>
            </div>
        </div>
    </div>
    <div class="col-md-3">

    </div>
</div><br><br>
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
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
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
<script>
    function darkmode() {
        document.body.style.backgroundColor="#000d1a";
        document.body.style.color='white';
        document.getElementById("dark").style.color="white";
        document.getElementById("bright").style.color="white";
        document.getElementById("heading").style.color="white";
    }
    function lightmode() {
        document.body.style.backgroundColor='white';
        document.getElementById("bright").style.color="black";
        document.getElementById("dark").style.color="black";
        document.body.style.color='black';

    }
</script>
</body>
</html>