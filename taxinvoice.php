<?php
	if(isset($_POST['submit']))
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
		$mpayment = $_POST['mpayment'];
		$billno = $_POST['bill'];
		$gst = $_POST['gst'];
		$pmode = $_POST['pmode'];
		$pdetails = $_POST['pdetails'];
		
	}
?>

<html>
<head>
<title>Invoice</title>
<style type="text/css">
	#page-wrap {
		width: 700px;
		margin: 0 auto;
	}
	.center-justified {
		text-align: justify;
		margin: 0 auto;
		width: 30em;
	}
	table.outline-table {
		border: 1px solid;
		border-spacing: 0;
	}
	tr.border-bottom td, td.border-bottom {
		border-bottom: 1px solid;
	}
	tr.border-top td, td.border-top {
		border-top: 1px solid;
	}
	tr.border-right td, td.border-right {
		border-right: 1px solid;
	}
	tr.border-right td:last-child {
		border-right: 0px;
	}
	tr.center td, td.center {
		text-align: center;
		vertical-align: text-top;
	}
	td.pad-left {
		padding-left: 5px;
	}
	tr.right-center td, td.right-center {
		text-align: right;
		padding-right: 50px;
	}
	tr.right td, td.right {
		text-align: right;
	}
	.grey {
		background:grey;
	}
</style>
</head>
<body>
	<div id="page-wrap">
		<table width="100%">
			<tbody>
				<tr>
					<td width="30%">
						<img src="images/MDDlogo.png"> <!-- your logo here -->
					</td>
					<td width="70%">
						<h2>Tax Invoice</h2><br>
						<strong>Date:</strong> <?php echo $date;?><br>
						<strong>Invoice Number:</strong> BF123<br>
					</td>
				</tr>
				<tr>
					<td colspan="2">&nbsp;</td>
				</tr>
			</tbody>
		</table>
		
		<table width="100%" class="outline-table">
			<tbody>
				<tr class="border-bottom border-right grey">
					<td colspan="3" class="center"><strong>Summary</strong></td>
				</tr>
				<tr class="border-bottom border-right center">
					<td width="45%"><strong>Consignee Name</strong></td>
					<td width="25%"><strong>Address</strong></td>
				</tr>
				<tr class="border-right">
					<td class="pad-left"><?php echo $consigneeName;?></td>
					<td class="center"><?php echo $caddress;?></td>					
				</tr>
				<tr class="border-right">
					<td class="pad-left">&nbsp;</td>
					<td class="right "></td>
				</tr>
				<tr class="border-right">
					<td class="pad-left">&nbsp;</td>
					<td class="right"></td>
				</tr>
				<tr class="border-right">
					<td class="pad-left">&nbsp;</td>
					<td class="right"></td>
				</tr>
			</tbody>
		</table>
		<p>&nbsp;</p>
		<table width="100%" class="outline-table">
			<tbody>
				
				<tr class="border-bottom border-right center">
					<td width="35%"><strong>Description</strong></td>
					<td width="25%"><strong>Quantity</strong></td>
					<td width="25%"><strong>Rate</strong></td>
					<td width="30%"><strong>Amount (INR)(Rate + GST)</strong></td>
				</tr>
				
				<tr class="border-right">
					<td class="pad-left">&nbsp;</td>
					<td class="center"><?php echo $quantity;?></td>
					<td class="center"><?php echo $rservice;?></td>
					<td class="center"></td>
				</tr>
				
			</tbody>
		</table>
		<p>&nbsp;</p>
		
		<table width="100%">
			<tbody>
				<tr>
					<td width="50%">
						<div class="center-justified"><br>
							<strong>Amount(In Words)</strong><br>
							<strong>Terms and Conditions</strong><br>
							<strong>Payment Mode: </strong><?php echo $mpayment;?><br>
							<strong>Payment Details (If Online)</strong><br>
						</div>
					</td>
					<td width="50%">
						<div class="center-justified"><br><br><br><br><br>
							<strong>Authorised Signature</strong>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<p>&nbsp;</p>	
		<table>
			<tbody>
				<tr>
					<td>
						Company's PAN: AIHPM817DE
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<a href="downloadpdf.php?file=taxinvoice">Download PDF Now</a>
</body>
</html>