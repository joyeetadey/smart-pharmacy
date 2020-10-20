<?php
session_start();
if(isset($_GET['orders'])){
    unset($_SESSION['cart']);
}
header('location:cart.php');
?>