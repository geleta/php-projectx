<?php
	include("includes/db.php");

  
 session_start();

$mail=$_SESSION['mail'];
//$mail=$_POST['mail'];
//$pass=$_POST['pass'];
if(isset($_SESSION['SESS_MEMBER_ID']))
 {
  $maill=$_SESSION['SESS_MEMBER_ID'];
 } else {
 ?>

 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<?php
//mag show sang information sang user nga nag login
$user_id=$_SESSION['mail'];
$result=mysql_query("select * from user where email='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['Name'];
$middleName=$row['Lname'];
$mobile=$row['Mobile'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Masiyas Electronic Shopping</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/ico" href="images/App Icon.ico"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link href="generic.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	
	<script type="text/javascript" src="js/datepicker.js"></script>
	<link href="css/datepicker.css" rel="stylesheet" type="text/css" />
	 <script type="text/javascript" src="js/jjj.js"></script>
	 
	 
	 
	<link href="4/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="4/js-image-slider.js" type="text/javascript"></script>
	<link rel="stylesheet" href="main.css" type="text/css" media="screen" charset="utf-8">
<script language="javascript" src="datetimepicker.js"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
 
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  

<script type="text/javascript">
function validateForm()
{
var x=document.forms["form1"]["total"].value;
if (x==null || x=="")
  {
  alert("Take Your Order first");
  return false;
  }
var con = confirm("Are You Sure? you want to order this product?");
if (con ==false)
{
return false;
}
}
</script>
<script type="text/javascript">
function validateForm1()
{


if (document.form1.checkbox.checked == false)
{
alert ('pls. agree the term and condition of this company');
return false;
}
else
{
return true;
}
}
function isdelete()
  {
   var d = confirm('Are you sure you want to Delete !!');
   if(!d)
   {
    alert(window.location='order.php');
   }
   else
   {
   return false;
    
   }
  }
function isConfirmlog()
  {
   var r = confirm('Are you sure you want to log out !!');
   if(!r)
   {
    return false;
   }
   else
   {
    alert(window.location='login.php');
   }
  }
</script>
<style>
a{
color:#fff;
text-decoration:none;
}</style>
</head>
<body> 

<table  width="910" id="table1" align=center style="border-bottom:1px solid #f6b45f;margin-top:1%; border:1px dotted #aaaaaa;">
<tr>
<td align="center" id="heder" width=900 height=30 >
<?php 
echo '<p align=right style="margin-right:3%;">'.'<img src="images1/User3.png" width=50px height=25px/>'."&nbsp;".'<font color=black>'.'Hi,'."&nbsp;".$FirstName."&nbsp;".$middleName." ".'<a href="logout.php" onClick="isConfirmloggg();">logout</a>'.'<a href="http://www.facebook.com" target=_blank ><img src="images/facebook.png">&nbsp;</a>'.
'<a href="http://www.twitter.com" target="_blank"><img src="images/twitter.png">&nbsp;'.'<a href="http://www.google.com" target="_blank"><img src="images/google.png">&nbsp;'.'</font>';

?>

</td>
</tr>
<tr>
<td id="td1" width=920px height=113px >

</td>
</tr>
<tr>
<td >

</td>
</tr>
<tr>
<td align="center" >

	
	<div id="sliderFrame">
        <div id="slider">
            <img src="images1/slide-img1.jpg" alt="" />
            <img src="images1/slide-img1.jpg" alt="" />
            <img src="image/slider-2.jpg" alt="" />
            <img src="image/slider-1.jpg" alt="" />
			<img src="images1/product-img1.jpg" alt="" />
			<img src="image/images1222.jpeg" alt="" />
        </div>
        <!--Custom navigation buttons on both sides-->
        <div class="group1-Wrapper">
            <a onclick="imageSlider.previous()" class="group1-Prev"></a>
            <a onclick="imageSlider.next()" class="group1-Next"></a>
        </div>
        <!--nav bar-->
        <div style="text-align:center;padding:20px;z-index:20;">
            <a onclick="imageSlider.previous()" class="group2-Prev"></a>
            <a id='auto' onclick="switchAutoAdvance()"></a>
            <a onclick="imageSlider.next()" class="group2-Next"></a>
        </div>
    </div>
	</td>
	</tr>
	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

<!-------------------Left Side    -------->	
	
<td  valign="top" height="600px" width="150px"   id="table2" style="background:url('images1/wrapper-bg1.png');" > 

<table id="menu-bar1" style="border:1px solid white;" height=100px>
<tr><td style="font-size:20px;color:black;background:tan;">AccountSetting</td></tr>
<tr><td><a href="changepassword.php"><img src="images1/widget-arrow.png" width="10" />Change Password</a><br>
	<a href="profile.php"><img src="images1/widget-arrow.png" width="10" />Profile Details</a>
	<br>
	<a href="feedback.php"><img src="images1/widget-arrow.png" width="10" />Feedback</a></td></tr></table>
	

</td>
	
	
	
		
		</div>
	
<td valign="top" id="tdd" >	








<style>
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:13px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:450px;
padding:14px;
}

/* ----------- stylized ----------- */
#stylized{

background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
color:black;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:left;
width:120px;
float:left;
color:black;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:110px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized select{
float:left;
font-size:18px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:20px;
width:115px;
height:31px;
background:#666666 url(images1/button.png) no-repeat;
text-align:left;
line-height:31px;
color:black;
font-size:19px;
font-weight:bold;
}
</style>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["form1"]["fname"].value;
if (x==null || x=="")
  {
  alert("Enter Firstname");
  return false;
  }
  var y=document.forms["form1"]["lname"].value;
if (y==null || y=="")
  {
  alert("Enter Lastname");
  return false;
  }
  var z=document.forms["form1"]["cnum"].value;
if (z==null || z=="")
  {
  alert("Enter Contact Number");
  return false;
  }
  var a=document.forms["form1"]["email"].value;
if (a==null || a=="")
  {
  alert("Enter Email Address");
  return false;
  }
    var b=document.forms["form1"]["paddress"].value;
if (b==null || b=="")
  {
  alert("Enter Address");
  return false;
  }
    var c=document.forms["form1"]["city"].value;
if (c==null || c=="")
  {
  alert("Enter City");
  return false;
  }
    var d=document.forms["form1"]["daddress"].value;
if (d==null || d=="")
  {
  alert("Enter Delivery Address");
  return false;
  }
  var con = confirm("Are You Sure? you want to proceed?");
if (con ==false)
{
return false;
}
}
</script>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
<div id="stylized" class="myform">
<form method="post" action="personalinfo.php" name="form1" onsubmit="return validateFormm()" onsubmit='return formValidation()'>
<input type="hidden" name="transnum" id="name" value="<?php echo $_POST['transnumber'] ?>" />
<input type="hidden" name="product" id="name" value="<?php echo $_POST['produ_id'] ?>" />

<?php
$rrrrr=$_POST['country'];
if($rrrrr==1){
$asas=$_POST['total'];
}
if($rrrrr==2){
$asas=$_POST['total'];
}
if($rrrrr==3){
$asas=$_POST['total']+100;
}
if($rrrrr==4){
$asas=$_POST['total']+600;
}
if($rrrrr==5){
$asas=$_POST['total']+600;
}
if($rrrrr==6){
$asas=$_POST['total']+500;
}
if($rrrrr==7){
$asas=$_POST['total']+400;
}
if($rrrrr==8){
$asas=$_POST['total']+300;
}
if($rrrrr==9){
$asas=$_POST['total']+700;
}
if($rrrrr==10){
$asas=$_POST['total']+260;
}
if($rrrrr==11){
$asas=$_POST['total']+400;
}
if($rrrrr==12){
$asas=$_POST['total']+800;
}
if($rrrrr==13){
$asas=$_POST['total']+180;
}
if($rrrrr==14){
$asas=$_POST['total']+200;
} 
 ?><!--
<input type="text" name="ototal" id="name" value="<?php echo $asas ?>" style="display:none;" />
<input type="hidden" name="sdsd" id="name" value="<?php 
$rrrrr=$_POST['country'];
if($rrrrr==1){
echo 'Cash On delivery';
}
if($rrrrr==2){
echo 'Debre Berhan';
}
if($rrrrr==3){
echo 'Addis Abeba';
}
if($rrrrr==4){
echo 'Mekelle';
}
if($rrrrr==5){
echo 'Bahr Dar';
}
if($rrrrr==6){
echo 'Jimma';
}
if($rrrrr==7){
echo 'Harer';
}
if($rrrrr==8){
echo 'Hawassa';
}
if($rrrrr==9){
echo 'Gonder';
}
if($rrrrr==10){
echo 'Dessie';
}
if($rrrrr==11){
echo 'ArbaMinch';
}
if($rrrrr==12){
echo 'Axum';
}
if($rrrrr==13){
echo 'Adama';
}
if($rrrrr==14){
echo 'Ambo';
}
?>

<input type="hidden" name="pmethod" id="name" value="<?php echo $_POST['state'] ?>" />
-->

<?php
$qtytotal=$_POST['totalqty'];
$wqwqwq=$_POST['country'];
if(($qtytotal>1000) && ($wqwqwq==2)){
$NewDate=Date('y:m:d', strtotime("+0 days"));
}
else if(($qtytotal<1000) && ($wqwqwq==2)){
$NewDate=Date('y:m:d', strtotime("+0 days"));
}
else if(($qtytotal<1000) && ($wqwqwq==3)){
$NewDate=Date('d:m:y', strtotime("+0 days"));
}
else if(($qtytotal<1000) && ($wqwqwq==4)){
$NewDate=Date('d:m:y', strtotime("+0 days"));
}
else if(($qtytotal<1000) && ($wqwqwq==5)){
$NewDate=Date('d:m:y', strtotime("+0 days"));
}
else if(($qtytotal<1000) && ($wqwqwq==6)){
$NewDate=Date('d:m:y', strtotime("+0 days"));
}
else if(($qtytotal<1000) && ($wqwqwq==7)){
$NewDate=Date('d:m:y', strtotime("+0 days"));
}
else if(($qtytotal<1000) && ($wqwqwq==8)){
$NewDate=Date('d:m:y', strtotime("+0 days"));
}
else if(($qtytotal<1000) && ($wqwqwq==9)){
$NewDate=Date('d:m:y', strtotime("+0 days"));
}
else if(($qtytotal<1000) && ($wqwqwq==10)){
$NewDate=Date('d:m:y', strtotime("+0 days"));
}
else if(($qtytotal<1000) && ($wqwqwq==11)){
$NewDate=Date('d:m:y', strtotime("+0 days"));
}
else if(($qtytotal<1000) && ($wqwqwq==12)){
$NewDate=Date('d:m:y', strtotime("+0 days"));
}
else if(($qtytotal<1000) && ($wqwqwq==13)){
$NewDate=Date('d:m:y', strtotime("+0 days"));
}
else if(($qtytotal<1000) && ($wqwqwq==14)){
$NewDate=Date('d:m:y', strtotime("+0 days"));
}
echo '<input type="hidden" name="date" id="name" value="'.$NewDate.'" />';
?>

<script type='text/javascript'>
function formValidation(){
//assign the fields
        var txt_name = document.getElementById('txt_name');
		var txt_last=document.getElementById('txt_last');
	var email= document.getElementById('email');
	
	
	var txt_mo = document.getElementById('txt_mo');
	var txt_ho = document.getElementById('txt_ho');
	var street = document.getElementById('street');
	var house = document.getElementById('house');
	var time = document.getElementById('time');
	
if(isAlphabet(txt_name, "please enter Your Fname in letters only")){
if(lengthRestriction(txt_name, 3, 30,"for your Fname")){
if(isAlphabet(txt_last, "please enter Your Lname in letters only")){
if(lengthRestriction(txt_last, 3, 30,"for your Lname")){
if(emailValidator(email,"check your e-mail format")){
	

if(isNumeric(txt_mo, "please enter Number only For Mobile Phone")){
if(isNumeric(txt_ho, "please enter Number only For Home Phone")){
if(isNumeric(street, "please enter Number only For street")){
if(isNumeric(house, "please enter Number only For house No.")){

if(madeSelection(time, "please select the time")){	

	return true;
	}}}
	
	}
	}
	}
	
	
return false;
		
}
	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function madeSelection(elem, helperMsg){
	if(elem.value ==""){
	alert(helperMsg);
		elem.focus();
		return false;
		}
	else{
		return true;
		
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter Above " +min+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

	</script>

<table border=0px>

<tr>
<td colspan=2>
<h1 align=center>Delivery Information form</h1>
</td></tr>
<tr><td>
<label>First Name

</label></td><td>
<input type="text" name="finame" id="txt_name" pattern="\D{1,15}"  required x-moz-errormessage="Please Enter First Name Only  Letter" title="Please Enter First Name Only  Letter" />
</td></tr>
<tr><td>
<label>Last Name

</label>
</td><td>
<input type="text" name="llname" id="txt_last" pattern="\D{1,15}" required x-moz-errormessage="Please Enter Last Name Only  Letter" title="Please Enter Last Name Only  Letter" />
</td></tr>
<tr><td>
<label>Email

</label>
</td><td>
<input type="text" name="email" id="email" value="<?php echo $mail ?>"  readonly />
</td></tr>

<tr><td>
<label>Kifle Ketema

</label>
</td><td>If you are select addis abeba city<br> you must be select Kifle Ketema
<select  name="ketema" id="ketama" >
<option selected=selected></option>
<option >Addis Ketema</option>
<option >Akaki Kaliti</option>
<option >Bole</option>
			<option >Gulelie</option>
			<option >Kirkos</option>
			<option >Lafto</option>
				<option >Ldeta</option>
				<option>Yeka</option>
				
		
</select>
</td></tr>
<tr><td>
<label>Kebele

</label>
</td><td>
<select  name="kebele" id="kebele" required="required">
<option selected=selected></option>
<option >01</option>
<option >02</option>
			<option >03</option>
			<option >04</option>
			<option >05</option>
				<option >06</option>
				<option>07</option>
				<option >08</option>
				<option >09</option>
				<option >10</option>
				<option >11</option>
				<option >12</option>
				<option >13</option>
				<option >14</option>
				<option >15</option>
				<option >16</option>
				<option >17</option>
				<option >18</option>
				<option >19</option>
				<option >20</option>
</select>
</td></tr>
<tr><td>
<label>Mobile No.

</label>
</td><td>
<input type="text" name="cnum" id="txt_mo" pattern="\d{10,15}" required x-moz-errormessage="Please Enter Check your Mobile Number" title="Please Enter Check your Mobile Number "   placeholder='Mobile No' />
</td></tr>
<tr><td>

<label>Home Phone No.

</label>
</td><td>
<input type="text" name="home" id="txt_ho" pattern="\d{10,15}" required x-moz-errormessage="Please Enter Check your Home Phone Number" title="Please Enter Check your Home Phone Number " placeholder='Home Phone No'/>
</td></tr>
<tr><td>
<label>Street No.

</label>
</td><td>
<input type="text" name="street" id="street" pattern="\d{1,10}" required x-moz-errormessage="Please Enter Check the street Number" title="Please Enter Check the street Number" placeholder='Street No'/>
</td></tr>
<tr><td>
<label>House No.

</label>
</td><td>
<input type="text" name="house" id="house" pattern="\d{1,10}" required x-moz-errormessage="Please Enter Check your house number" title="Please Enter Check your house number" placeholder='House No'/>
</td></tr>

<tr><td>
<label>Delivery Time

</label>
</td><td>
<select name="time" id="time"  required x-moz-errormessage="Please Select Time" title="Please Select Time">
<option selected=selected></option>
<option value="1:00pm">1:00am</option>
            <option value="1:15pm">1:15am</option>
            <option value="1:30pm">1:30am</option>
            <option value="1:45pm">1:45am</option>
            <option value="2:00pm">2:00am</option>
            <option value="2:15pm">2:15am</option>
            <option value="2:30pm">2:30am</option>
            <option value="2:45pm">2:45am</option>
            <option value="3:00pm">3:00am</option>
            <option value="3:15pm">3:15am</option>
            <option value="3:30pm">3:30am</option>
            <option value="3:45pm">3:45am</option>
            <option value="4:00pm">4:00am</option>
            <option value="4:15pm">4:15am</option>
            <option value="4:30pm">4:30am</option>
            <option value="4:45pm">4:45am</option>
            <option value="5:00pm">5:00am</option>
            <option value="5:15pm">5:15am</option>
            <option value="5:30pm">5:30am</option>
            <option value="5:45pm">5:45am</option>
            <option value="6:00pm">6:00am</option>
            <option value="6:15pm">6:15am</option>
            <option value="6:30pm">6:30am</option>
            <option value="6:45pm">6:45am</option>
            <option value="7:00pm">7:00am</option>
            <option value="7:15pm">7:15am</option>
            <option value="7:30pm">7:30am</option>
            <option value="7:45pm">7:45am</option>
            <option value="8:00pm">8:00am</option>
            <option value="8:15pm">8:15am</option>
            <option value="8:00am">8:00am</option>
            <option value="8:15am">8:15am</option>
            <option value="8:30am">8:30am</option>
            <option value="8:45am">8:45am</option>
            <option value="9:00am">9:00am</option>
            <option value="9:15am">9:15am</option>
            <option value="9:30am">9:30am</option>
            <option value="9:45am">9:45am</option>
            <option value="10:00am">10:00am</option>
            <option value="10:15am">10:15am</option>
            <option value="10:30am">10:30am</option>
            <option value="10:45am">10:45am</option>
            <option value="11:00am">11:00am</option>
            <option value="11:15am">11:15am</option>
            <option value="11:30am">11:30am</option>
            <option value="11:45am">11:45am</option>
            <option value="12:00pm">12:00pm</option>
            <option value="12:15pm">12:15pm</option>
            <option value="12:30pm">12:30pm</option>
            <option value="12:45pm">12:45pm</option>
            <option value="1:00pm">1:00pm</option>
            <option value="1:15pm">1:15pm</option>
            <option value="1:30pm">1:30pm</option>
            <option value="1:45pm">1:45pm</option>
            <option value="2:00pm">2:00pm</option>
            <option value="2:15pm">2:15pm</option>
            <option value="2:30pm">2:30pm</option>
            <option value="2:45pm">2:45pm</option>
            <option value="3:00pm">3:00pm</option>
            <option value="3:15pm">3:15pm</option>
            <option value="3:30pm">3:30pm</option>
            <option value="3:45pm">3:45pm</option>
            <option value="4:00pm">4:00pm</option>
            <option value="4:15pm">4:15pm</option>
            <option value="4:30pm">4:30pm</option>
            <option value="4:45pm">4:45pm</option>
            <option value="5:00pm">5:00pm</option>
            <option value="5:15pm">5:15pm</option>
            <option value="5:30pm">5:30pm</option>
            <option value="5:45pm">5:45pm</option>
            <option value="6:00pm">6:00pm</option>
            <option value="6:15pm">6:15pm</option>
            <option value="6:30pm">6:30pm</option>
            <option value="6:45pm">6:45pm</option>
            <option value="7:00pm">7:00pm</option>
            <option value="7:15pm">7:15pm</option>
            <option value="7:30pm">7:30pm</option>
            <option value="7:45pm">7:45pm</option>
            <option value="8:00pm">8:00pm</option>
            <option value="8:15pm">8:15pm</option>
            <option value="8:30pm">8:30pm</option>
            <option value="8:45pm">8:45pm</option>
            <option value="9:00pm">9:00pm</option>
            <option value="9:15pm">9:15pm</option>
            <option value="9:30pm">9:30pm</option>
            <option value="9:45pm">9:45pm</option>
            <option value="10:00pm">10:00pm</option>
            <option value="10:15pm">10:15pm</option>
            <option value="10:30pm">10:30pm</option>
            <option value="10:45pm">10:45pm</option>
            <option value="11:00pm">11:00pm</option>
            <option value="11:15pm">11:15pm</option>
            <option value="11:30pm">11:30pm</option>
            <option value="11:45pm">11:45pm</option>
            <option value="12:00am">12:00am</option>
          </select>
</td></tr>
<tr><td><label>Delivery Date

</label></td><td> 
<span style="margin-right: 5px;"  >
 <input type="text" class="w8em format-y-m-d highligssht-days-67 range-low-today" 
 
 placeholder="Delivery Date"  required x-moz-errormessage="Please Enter Delivery Date" title="Please Enter Delivery Date " name="ddate" id="sd" value=""  readonly 
 
 style="width:180px; margin-left:10px; border: 1px double #CCCCCC; padding:5px 10px;"/></span><br></td></tr>

<tr><td colspan=2 align=center>
<input type="submit" value="Confirm" name="submitMain" class="button_example" style="margin-left:130px;">
<div class="spacer"></div></td></tr>

<input type="hidden" name="produc_id" value="<?php echo $_POST['produ_id'] ?>" />



<?php
if(isset($_POST['submitMain']) )
{
$product=$_POST['product'];

$_SESSION['product']=$product;

$fname=$_POST['finame'];
$_SESSION['finame']=$fname;

$lname=$_POST['llname'];
$_SESSION['lname']=$lname;

$email=$_POST['email'];
$_SESSION['email']=$email;
$mobile=$_POST['cnum'];
$_SESSION['cnum']=$mobile;

$transnum=$_POST['transnum'];
$_SESSION['transnum']=$transnum;

$kebele=$_POST['kebele'];
$_SESSION['kebele']=$kebele;

$time=$_POST['time'];
$_SESSION['time']=$time;

$ddddddd=$_POST['date'];
$_SESSION['date']=$ddddddd;



$total=$_POST['ototal'];

$_SESSION['ototal']=$total;

$dmethod=$_POST['sdsd'];
$_SESSION['sdsd']=$dmethod;

$home=$_POST['home'];
$_SESSION['home']=$home;

$street=$_POST['street'];
$_SESSION['street']=$street;

$house=$_POST['house'];
$_SESSION['house']=$house;

$ketema=$_POST['ketema'];
$_SESSION['ketema']=$ketema;

$pmethod=$_POST['pmethod'];
$_SESSION['pmethod']=$pmethod;

$ddate=$_POST['ddate'];
$_SESSION['ddate']=$ddate;


 echo "<script>window.location='payment.php';</script>";
 

}


?>




</table>
</form>
</form>
</div>

</td>

</tr>
<tr>
</tr>
</table>

<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=910 height=40 >
<font color=white size=4px ><p align=center>Group 13&copy; 2006 COPY RIGHT RESERVED.</p>
</td>
</tr>

</table>
</body>
</html>