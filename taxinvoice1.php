<?php
	if(!empty($_POST['submit']))
	{
		$billerName = $_POST['textnames'];
		$consigneeName = $_POST['consigneename'];
		$caddress = $_POST['caddress'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$spurchased = $_POST['spurchased'];
		$date = $_POST['date'];
		$quantity = $_POST['quantity'];
		$rservice = $_POST['rservice'];
		//$gst = $_POST['gst'];
		$pmode = $_POST['pmode'];
		$gst=$quantity*$rservice*18/100;
		//echo $billerName;

	require("fpdf.php");
	$pdf=new FPDF ();
	$pdf->AddPage ();
	$pdf->SetFont("Arial","",18);
	
	$pdf-> Cell(0,10,"Tax Invoice", 0,1,'C');
	$pdf-> Cell(0,7, "", 0,1,'L');

	$pdf->SetFont("Arial","",11);
	$pdf-> Cell(25,5, "Biller's Name:", 0,0,'L');
	$pdf-> Cell(0,5,$billerName, 0,1,'L');

	$pdf-> Cell(10,5, "Date:", 0,0,'L');
	$pdf-> Cell(0,5,$date, 0,1,'L');


	$pdf-> Cell(0,5, "Invoice Number: BF123", 0,1,'L');
	$pdf-> Cell(0,10, "", 0,1,'L');

	$pdf->SetFont("Arial","",13);
	$pdf-> Cell(0,10,"Summary", 0,1,'C');
	
	$pdf->SetFont("Arial","",11);
	$pdf-> Cell(0,5, "Bill To:", 0,1,'L');
	$pdf-> Cell(0,5,$consigneeName, 0,1,'L');
	$pdf-> Cell(0,5,$mobile, 0,1,'L');
	$pdf-> Cell(0,5,$email, 0,1,'L');
	$pdf-> Cell(0,5,$caddress, 0,1,'L');
	$pdf-> Cell(0,15, "", 0,1,'L');

	$pdf-> Cell(65,7, "Description", 1,0,'C');
	$pdf-> Cell(35,7, "Quantity", 1,0,'C');
	$pdf-> Cell(30,7, "Rate", 1,0,'C');
	$pdf-> Cell(25,7, "GST", 1,0,'C');
	$pdf-> Cell(0,7, "Total Amount (INR)", 1,1,'C');

	$pdf-> Cell(65,20,$spurchased, 1,0,'L');
	$pdf-> Cell(35,20,$quantity, 1,0,'C');
	$pdf-> Cell(30,20,$rservice, 1,0,'C');
	$pdf-> Cell(25,20,$gst, 1,0,'C');
	$pdf-> Cell(0,20,$quantity*$rservice+$gst, 1,1,'C');


	$pdf-> Cell(0,10, "", 0,1,'L');

	$pdf-> Cell(35,5, "Amount To be paid:",0,0,'L');
	$pdf-> Cell(0,5,$quantity*$rservice+$gst, 0,1,'L');
	
	$pdf-> Cell(0,5, "Terms and Conditions", 0,1,'L');

	$pdf-> Cell(28,5, "Payment Mode:", 0,0,'L');
	$pdf-> Cell(0,5,$pmode, 0,1,'L');

	$pdf-> Cell(0,5, "Payment Details (If Offline)", 0,1,'L');
	$pdf-> Cell(95,5, "Company PAN AIHPM817DE", 0,0,'L');
	$pdf-> Cell(95,5, "Authorised Signature", 0,1,'C');

	$pdf->output ();
	}
?>

