<?php
$conn = mysqli_connect("localhost", "root", "", "software_engg");
session_start();

if(isset($_POST['insert'])){
    $medid=$_POST['medid'];
    $name = $_POST['med_name'];
    $qty_type = $_POST['med_qty_type'];
    $qty = $_POST['med_qty_type'];
    $type = $_POST['med_type'];
    $price=$_POST['price'];
    $company=$_POST['company'];
    $chemicals=$_POST['chemicals'];
    $description=$_POST['description'];
    $mfd_date=$_POST['mfd_date'];
    $category=$_POST['category'];
    $file=$_FILES["file"];
    $filename= $_FILES["file"]["name"];
    $file_path="../customer_pages/medicine_images/" .$file["name"];
    $res2=move_uploaded_file($file["tmp_name"], "../customer_pages/medicine_images/" .$file["name"]);
    $res = mysqli_query($conn," INSERT INTO products (med_name, med_qty_type,med_qty,med_type,price,company,chemicals,description, mfd_date, category,image_name) VALUES ( '$name', '$qty_type','$qty', '$type', '$price', '$company', '$chemicals', '$description', '$mfd_date','$category','$filename')");
    if($res){
        echo "<h1>done</h1>";
    }
    else{
        echo "<h1>not done</h1>";
    }
}
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
            background-color: #936cd4;
        }
        #mainbody{
            padding: 20px;
        }
        #jumboheader{
            background-color: #33cccc;
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
    <h4><a style="color: white" href="dashboard.php">Home</a>/<a style="color: #0c5460" href="update.php">Add Products</a> </h4>
</div>
<div id="mainbody">
    <div class="card">
        <div class="card-header" style="background-color: teal">
            <h4 class="card-title" style="color: white">Add New Product</h4><br>
        </div>
        <div class="card-body" style="background-color:whitesmoke">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-3 pr-1">
                        <div class="form-group">
                            <label>Medicine id</label>
                            <input type="text" name="medid"  class="form-control" placeholder="Medicine Id" value="">
                        </div>
                    </div>
                    <div class="col-md-5 pl-1">
                        <div class="form-group">
                            <label >Medicine Qty. Type</label>
                            <input type="text" name="med_qty_type" class="form-control" placeholder="Medicine Qty Type" value="">
                        </div>
                    </div>
                    <div class="col-md-4 pl-1">
                        <div class="form-group">
                            <label >Medicine Qty</label>
                            <input type="text" name="qty" class="form-control" placeholder="Medicine Qty" value="">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 px-1">
                    <div class="form-group">
                        <label>Medicine Name</label>
                        <input type="text" name="med_name" class="form-control" placeholder="Medicine Name" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 pr-1">
                        <div class="form-group">
                            <label>Type</label>
                            <input type="text" name="med_type" class="form-control" placeholder="Medicine Type" value="">
                        </div>
                    </div>
                    <div class="col-md-4 pl-1">
                        <div class="form-group">
                            <label>Price</label>
                            &#8377;<input type="number" name="price" class="form-control" placeholder="Price" value="">
                        </div>
                    </div>
                    <div class="col-md-4 pl-1">
                        <div class="form-group">
                            <label>Mfd. Date</label>
                            <input type="date" name="mfd_date" class="form-control" placeholder="Manufacturing Date" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" name="company" class="form-control" placeholder="Company" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Categories</label>
                            <input type="text" name="category" class="form-control" placeholder="Category" value="">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pr-1">
                    <div class="form-group">
                        <label>Chemicals</label>
                        <input type="text" name="chemicals" class="form-control" placeholder="Chemicals" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" name="description" value="">
                </div>
                <div class="form-group">
                    <label>Product Image</label>
                    <input type="file" class="form-control" name="file">
                </div>
                <input type="submit" name="insert" class="btn btn-outline-danger pull-right" value="insert">
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
</body>
</html>


