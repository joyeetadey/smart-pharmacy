<?php

include 'conn.php';

if(isset($_POST['done'])){

 $name = $_POST['a_name'];
 $act = $_POST['a_ct'];

 $q = " INSERT INTO editorial(a_name, a_ct) VALUES ( '$name', '$act')";

 $query = mysqli_query($con,$q);

 header('location:editor.php');
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
      body {
    font-family: "Lato", sans-serif;
    background-image: url("bee.jpg");
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
}
      </style>
      
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">Add article</h1>
 </div><br>

 <label> Article Name: </label>
 <input type="text" name="a_name" class="form-control"> <br>

 <label> Article content: </label>
 <input type="text" name="a_ct" class="form-control"> <br>
 


 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>