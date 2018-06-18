<?php
require('../fpdf.php');
$d=date('d_m_Y');
include("config.php");
include("usersession.php");
class PDF extends FPDF
{

function Header()
{
    $this->SetFont('Helvetica','',25);
	$this->SetFontSize(40);
    //Move to the right
    $this->Cell(80);
    //Line break
    $this->Ln();
}

//Page footer
function Footer()
{
   
}

//Load data
function LoadData($file)
{
	//Read file lines
	$lines=file($file);
	$data=array();
	foreach($lines as $line)
		$data[]=explode(';',chop($line));
	return $data;
}

//Simple table
function BasicTable($header,$data)
{ 

$this->SetFillColor(200,255,255);
//$this->SetDrawColor(255, 0, 0);
$w=array(15,40,20,15,20,38,30,20,18,15,15,15,15);
	
	
	//Header
	$this->SetFont('Arial','B',8);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],11,$header[$i],1,0,'L',true);
	$this->Ln();
	
	//Data
	$this->SetFont('Arial','',12);
	foreach ($data as $eachResult) 
	{ //width
	    $this->Cell(15,6,$eachResult["order_ID"],1);
		$this->Cell(40,6,$eachResult["Full_Name"],1);
		$this->Cell(20,6,$eachResult["Kebele"],1);
		$this->Cell(15,6,$eachResult["Country"],1);
		$this->Cell(20,6,$eachResult["City"],1);
		$this->Cell(38,6,$eachResult["Phone_number"],1);
		$this->Cell(30,6,$eachResult["Dilivery_Address"],1);
		$this->Cell(20,6,$eachResult["Delivery_time"],1);
		$this->Ln();
		 	 	 	 	
	}
}

//Better table
}



$pdf=new PDF();

	

$header=array('Order ID','Full_Name','Kebele','Country','City','Phone', 'Delivery Address', 'Delivery Time');
//Data loading
//*** Load MySQL Data ***//
//db settings
$db_username = 'root';
$db_password = '';
$db_name = 'database';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);

$currMonth = date('m');
$strSQL = "SELECT * FROM orders WHERE Full_Name='".$login_session."'";
$objQuery = mysqli_query($mysqli,$strSQL);
$resultData = array();
for ($i=0;$i<mysqli_num_rows($objQuery);$i++) {
	$result = mysqli_fetch_array($objQuery);
	array_push($resultData,$result);

}
//************************//

//***********************///	
//*** Table 1 ***//
$pdf->AddPage();
	
	$pdf->SetFont('Helvetica','b',14);
	$pdf->Cell(50);
	$pdf->Write(5, 'Doya shop Order Detail Management');
	$pdf->Ln();
	
	$pdf->SetFont('Helvetica','b',12);
	$pdf->Cell(70);
	$pdf->Write(7, 'ORDER REPORTS');
	$pdf->Ln();
	
	$pdf->Cell(22);
	$pdf->SetFontSize(7);
	$pdf->Cell(57);
	$result=mysqli_query($mysqli,"select date_format(now(), '%W, %M %d, %Y') as date");
	while( $row=mysqli_fetch_array($result) )
	{
		$pdf->Write(5,$row['date']);
	}
	$pdf->Ln();
	
	$pdf->Cell(0);
	$pdf->SetFontSize(10);
	$pdf->Cell(54);
	//$get_user = $_GET['username'];
	//$pdf->Write(5, 'Printed By: '.$get_user.'');
	$pdf->Ln(-1);
	
	//display numbers of reports
	//$sql = "SELECT name, email FROM users WHERE username = '" . $_SESSION['username'] . "'";
	$result=mysqli_query($mysqli,"SELECT * FROM orders WHERE Full_Name='".$login_session."'") or die ("Database query failed: $query" . mysql_error());
	
	$count = mysqli_num_rows($result);
	$pdf->Cell(0);
	$pdf->Write(5, ' All Total Customer Orders : '.$count.'');
	$pdf->Ln();

	$pdf->Ln(5);

$pdf->Ln(0);
$pdf->BasicTable($header,$resultData);
//forme();
//$pdf->Output("$d.pdf","F");
$pdf->Output();

?>

