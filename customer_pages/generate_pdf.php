<?php
require('fpdf/fpdf182/fpdf.php');
$conn=mysqli_connect("localhost","root","","software_engg");
session_start();
$cid=$_SESSION['cust_id'];

$res=mysqli_query($conn,"select * from orders where cust_id='$cid'");
while($row=mysqli_fetch_array($res)){
    $addr=$row['address'];
    $date=$row['date'];
    $orderno=$row['order_no'];
    $name=$row['customer_name'];
}
$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();
$pdf->SetFont('Arial','B',20);

$pdf->Cell(71 ,10,'',0,0);
$pdf->Cell(59 ,5,'Invoice',0,0);
$pdf->Cell(59 ,10,'',0,1);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(71 ,5,'Customer Address',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->Cell(59 ,5,'Details',0,1);

$pdf->SetFont('Arial','',10);

$pdf->Cell(130 ,5,$addr,0,0);
$pdf->Cell(25 ,5,'Customer ID:',0,0);
$pdf->Cell(34 ,5,$cid,0,1);

$pdf->Cell(130 ,5,'Delhi, 751001',0,0);
$pdf->Cell(25 ,5,'Invoice Date:',0,0);
$pdf->Cell(34 ,5,$date,0,1);

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Order No:',0,0);
$pdf->Cell(34 ,5,$orderno,0,1);


$pdf->SetFont('Arial','B',15);
$pdf->Cell(130 ,5,'Bill To',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(189 ,10,'',0,1);
$pdf->Cell(150 ,8,$name,0,1);


$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10 ,6,'Sl',1,0,'C');
$pdf->Cell(80 ,6,'Description',1,0,'C');
$pdf->Cell(23 ,6,'Qty',1,0,'C');
$pdf->Cell(30 ,6,'Unit Price',1,0,'C');
$pdf->Cell(45 ,6,'Total',1,1,'C');

$pdf->SetFont('Arial','',10);
if(!empty($_SESSION["cart"])){
$total = 0;
$i=1;
foreach ($_SESSION["cart"] as $key => $value) {
    $item_total=number_format($value["item_quantity"] * $value["product_price"]);
    $no_items=count($_SESSION['cart']);
    {
        $pdf->Cell(10 ,6,$i,1,0);
        $pdf->Cell(80 ,6,$value['item_name'],1,0);
        $pdf->Cell(23 ,6,$value['item_quantity'],1,0,'R');
        $pdf->Cell(30 ,6,$value["product_price"],1,0,'R');
        $pdf->Cell(45 ,6,$item_total,1,1,'R');
        $total = $total + ($value["item_quantity"] * $value["product_price"]);
    }
    $i++;
}

}

$pdf->Cell(118 ,6,'',0,0);
$pdf->Cell(25 ,6,'Subtotal',0,0);
$pdf->Cell(45 ,6,$total,1,1,'R');


$pdf->Output();

?>
