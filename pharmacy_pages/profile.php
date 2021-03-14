<?php
$conn=mysqli_connect("localhost","root","","software_engg");
session_start();
$pid=$_SESSION['pharm_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <script src="js/sweetalert.min.js"></script>
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <style>
        #myTabMD{
            background-color: #1DC7EA;
        }
        a{
            font-size: 20px;
            color: black;
        }
        a:hover{
            color: white;
        }
        .swal-overlay {
            background-color:  #33cccc;
        }
        #mainbody{
            padding: 20px;
        }
        #jumboheader{
            background-color:  #33cccc;
            height:120px;
            width: 100%;
            padding: 20px;
            color: white;
        }
    </style>
</head>
<body style="background-color: transparent">
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
                    <a class="dropdown-item" href="substitute_search.php">Substitute Search</a>
                    <a class="dropdown-item" href="disease_predictor.php">Disease Predictor</a>
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
                                <h4><?php echo "<a class='text-danger' href='products.php?type=general_purpose' target='_parent'>General Purpose Medicines</a>"?></h4>
                                <ul class="list-unstyled">
                                    <li>Cold And Cough</li>
                                    <li>Anti Allergic</li>
                                    <li>Pain Analgesics</li>
                                    <li>Gastro Intestinal</li>
                                    <li>Fever</li>
                                    <li>First Aid</li>
                                    <li>Gynacological</li>
                                    <li>Vitamins Minerals Nutrients</li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h4><?php echo "<a class='text-danger' href='products.php?type=personal_care' target='_parent'>Personal Care</a>"?></h4>
                                <ul class="list-unstyled">
                                    <li>Skin Care</li>
                                    <li>Hair Care</li>
                                    <li>Baby Care</li>
                                </ul>
                                <h4><?php echo "<a class='text-danger' href='products.php?type=health_conditions' target='_parent'>Health Conditions</a>"?></h4>
                                <ul class="list-unstyled">
                                    <li>Stomach Care</li>
                                    <li>Heart Care</li>
                                    <li>Eye Care</li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <h4><?php echo "<a class='text-danger' href='products.php?type=medical_equipments' target='_parent'>Medical Equipments</a>"?></h4>
                                <ul class="list-unstyled">
                                    <li>Masks</li>
                                    <li>Diabetes Monitors</li>
                                    <li>Thermometers</li>
                                </ul>
                                <h4><?php echo "<a class='text-danger' href='products.php?type=homeopathy' target='_parent'>Homeopathy</a>"?></h4>
                                <ul class="list-unstyled">
                                    <li>Drops</li>
                                    <li>Dilutions</li>
                                    <li>Biochemics</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
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
<div class="container-fluid" id="jumboheader">
    <h4><a style="color: white" href="dashboard.php">Home</a>/<a style="color: lightsteelblue" href="profile.php.php">Profile</a> </h4>
</div>
<div id="mainbody">
    <?php
    $res=mysqli_query($conn, "select * from pharmacy where p_id='$pid'");
    while($row=mysqli_fetch_array($res)){
        $uid=$row['p_username'];
        $pname=$row['p_name'];
        $email=$row['p_email'];
        $add=$row['p_address'];
        $phno=$row['p_phno'];
        $city=$row['p_city'];
        $zipcode=$row['p_zipcode'];
        $pwd=$row['p_password'];
    }
    if(isset($_POST['update'])){
        $add2=$_POST['addr'];
        $phnno2=$_POST['phnno'];
        $city2=$_POST['city'];
        $zipcode2=$_POST['zipcode'];
        $res2=mysqli_query($conn,"UPDATE pharmacy SET p_address='$add2', p_phno='$phnno2', p_city='$city2',p_zipcode='$zipcode2' where p_id='$pid' ");
        if($res2){
            echo "<script>swal(\"Success\",\"Profile Has Been Updated\", \"success\");</script>";
            echo "<meta http-equiv=\"refresh\" content=\"1\">";
        }
        else{
            echo "<script>swal(\"Error\",\"Profile not updated\", \"error\");</script>";
        }
    }
    if(isset($_POST['change'])){
        $newpwd=$_POST['newpwd'];
        $confirmpwd=$_POST['confirm_newpwd'];
        if($newpwd==$confirmpwd){
            $res3=mysqli_query($conn,"update pharmacy set p_password='$newpwd' where p_id='$pid'");
            if($res3){
                echo "<script>swal(\"Success\",\"Password Has Been Changed\", \"success\");</script>";
                echo "<meta http-equiv=\"refresh\" content=\"1\">";
            }
            else{
                echo "<script>swal(\"Error\",\"Password not changed\", \"error\");</script>";
            }
        }
        else{
            echo "<script>swal(\"Sorry\",\"Passwords Do Not Match\", \"info\");</script>";
        }
    }
    ?>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>User Id (disabled)</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Pharmacy Id" value="<?php echo $uid?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label >Email address</label>
                                                    <input type="email" class="form-control" disabled="" placeholder="Email" value="<?php echo $email?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Pharmacy Name</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Pharmacy Name" value="<?php echo $pname?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 px-1">
                                                <div class="form-group">
                                                    <label>Phone No.</label>
                                                    <input type="text" class="form-control" placeholder="Pnone No." name="phnno" value="<?php echo $phno?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" placeholder="Pharmacy Address" name="addr" value="<?php echo $add?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="City" name="city" value="<?php echo $city?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Postal Code</label>
                                                    <input type="number" class="form-control" placeholder="ZIP Code" name="zipcode" value="<?php echo $zipcode?>">
                                                </div>
                                            </div>
                                        </div>
                                        <input name="update" type="submit" class="btn btn-outline-danger pull-right" value="Update Profile">
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-header">
                                    <h4 class="card-title">Change Password</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <label>Current Password</label>
                                        <input type="password" name="pwd" class="form-control" placeholder="Current Password" value="<?php echo $pwd?>"><br>
                                        <label>New Password</label>
                                        <input type="password" name="newpwd" class="form-control" placeholder="New Password" value=""><br>
                                        <label>Confirm Password</label>
                                        <input type="password" name="confirm_newpwd" class="form-control" placeholder="Confirm Password" value=""><br>
                                        <input name="change" type="submit" class="btn btn-outline-danger pull-right" value="Change Password">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</body>
</html>

