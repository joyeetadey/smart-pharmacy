<?php

//export.php
if (isset($_POST["export"])) {
    $connect = mysqli_connect("localhost", "root", "", "software_engg");
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=salesreport.csv');
    $output = fopen("php://output", "w");
    fputcsv($output, array('Date', 'Order NO', 'Total', 'Quantity'));
    $query = "SELECT date,order_no,total,count(qty) from orders where pid='p101' group by order_no";
    $result = mysqli_query($connect, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, $row);
    }
    fclose($output);
}
   ?>