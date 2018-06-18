<?php
	include("includes/bank.php");
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title> DoyaShop Groups </title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="images/favicon.png" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
	  
	 	<link rel="stylesheet" href="css/cart.css" type="text/css" media="all" />
	 <link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" /> 
	 
		<script>
			/*
				VIEWPORT BUG FIX
				iOS viewport scaling bug fix, by @mathias, @cheeaun and @jdalton
			*/
			(function(doc){var addEvent='addEventListener',type='gesturestart',qsa='querySelectorAll',scales=[1,1],meta=qsa in doc?doc[qsa]('meta[name=viewport]'):[];function fix(){meta.content='width=device-width,minimum-scale='+scales[0]+',maximum-scale='+scales[1];doc.removeEventListener(type,fix,true);}if((meta=meta[meta.length-1])&&addEvent in doc){fix();scales=[.25,1.6];doc[addEvent](type,fix,true);}}(document));
		</script>
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/Myriad_Pro_700.font.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
	 <!-- Linking scripts -->
    <script src="js/main.js" type="text/javascript"></script>
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
	<!-- Begin Header -->
		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">
			  <div id="top-nav">
				  <ul>
						<li><a href="#" title="Login Email"> <span class="gale"> WELCOME </span></a></li>
						
					<ul class="toggle">

			<li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
		</ul>		 	
					
					</ul>
				</div>
				<div class="cl">&nbsp;</div>
	<div class="shopping-cart"  id="cart" id="right" >
<dl id="acc">	
<dt class="active">								
<p class="shopping" >Shopping Cart &nbsp;&nbsp;</p>
</dt>
<dd class="active" style="display: block;">
<?php
   //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

if(isset($_SESSION["cart_session"]))
{
    $total = 0;
    echo '<ul>';
    foreach ($_SESSION["cart_session"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>'."</br>";
        echo '<h3  style="color: green" ><big> '.$cart_itm["name"].' </big></h3>';
        echo '<div class="p-code"><b><i>ID:</i></b><strong style="color: #d7565b" ><big> '.$cart_itm["code"].' </big></strong></div>';
		echo '<span><b><i>Shopping Cart</i></b>( <strong style="color: #d7565b" ><big> '.$cart_itm["ProductItem"].'</big></strong>) </span>';
        echo '<div class="p-price"><b><i>Price:</b></i> <strong style="color: #d7565b" ><big>'.$currency.$cart_itm["Amount"].'</big></strong></div>';
        echo '</li>';
        $subtotal = ($cart_itm["Amount"]*$cart_itm["ProductItem"]);
        $total = ($total + $subtotal) ."</br>"; 
    }
    echo '</ul>';
    echo '<span class="check-out-txt"><strong style="color:green" ><i>Total:</i> <big style="color:green" >'.$currency.$total.'</big></strong> <a   class="a-btngale"  href="view_cart.php"> <span class="a-btn-text">Check Out</span></a></span>';
	echo '&nbsp;&nbsp;<a   class="a-btngale"  href="cart_update.php?emptycart=1&return_url='.$current_url.'"><span class="a-btn-text">Clear Cart</span></a>';
}else{
    echo ' <h4>(Your Shopping Cart Is Empty!!!)</h4>';
}
?>

</dd>
</dl>
</div>
 <div class="clear"></div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Header -->
		<!-- Begin Navigation -->
		<div id="navigation">
			<!-- Begin Shell -->
			<div class="shell">
				<ul>
					<li class="active"><a href="index.php" title="index.php">Home</a></li>
					<li>
						<a href="products.php">Category</a>
						<div class="dd">
							<ul>
						<li>
									 <a href="warehouse_1.php"> Jeans</a>
									<div class="dd">
										<ul>
											<li><a href="warehouse_1w.php">women's</a></li>
                                            <li><a href="warehouse_1.php">mens</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									 <a href="warehouse_2.php"> Shirts</a>
									<div class="dd">
										<ul>
											  <li><a href="warehouse_2.php">Mens</a></li>
                                             <li><a href="warehouse_2w.php">Women's</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									<a href="warehouse_3.php"> Dresses</a>
									<div class="dd">
										<ul>
											<li><a href="warehouse_3.php">Men's</a></li>
                                            <li><a href="warehouse_3w.php">Women's</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									<a href="warehouse_4.php"> Shoes</a>
									<div class="dd">
										<ul>
											  <li><a href="warehouse_4w.php">Women's</a></li>
                                              <li><a href="warehouse_4.php">Men's</a></li>
										</ul>
									</div>
								</li>
								<li>
									<a href="warehouse_childs.php"> childs</a>
									<div class="dd">	
								    </div>
								</li>
							</ul>
						</div>
					</li>
					   <li><a href="products.php"> Products </a></li>
					   	   <li>
						<a href="products.php">Warehouse</a>
						<div class="dd">
							<ul>
								<li>
									 <a href="warehouse_1.php">Doya Jeans store</a>
									
								</li>
								
								<li>
									 <a href="warehouse_2.php">Doya Shirts store</a>
									
								</li>
								
								<li>
									<a href="warehouse_3.php">Doya Dress store</a>
									
								</li>
								
								<li>
									<a href="warehouse_4.php">Doya Shoes store</a>
									
								</li>
								<li>
									<a href="warehouse_childs.php">Doya Childs store</a>
									
								</li>
								
							</ul>
						</div>
					</li>
					  <li><a href="about.php">About Us</a></li>
					  
					  <li><a href="contact.php">Contact</a></li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Navigation -->
		<!-- Begin Slider -->
		<div id="slider">
		
			<!-- End Shell -->
		</div>
		<!-- End Slider -->
		<!-- Begin Main -->
		<div id="main" class="shell">
				<!-- Begin Main -->
		<div id="main" class="shell">
			<!-- Begin Content -->
			<div id="content">
				<div class="post">
					<h2 align="center">Welcome!</h2>
					<img src="images/logo.png" alt="Post Image" height="89" width="316"/>
					You can be confident when you're shopping online with DoyaShop. Our Secure online shopping website encrypts your personal and financial information to ensure your order information is protected.We use industry standard 128-bit encryption. Our Secure online shopping website locks all critical information passed from you to us,
                   such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted.. <a href="#" class="more" title="Read More">Read More</a></p>
				  <div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- End Content -->
<tr>
<td align="center" >
<font color=white size=15>Commercial Bank of Ethiopia</font>
	
	
	</td>
	</tr>
	</table>
		
	<table  width="910" id="table1" align="center" style="border-bottom:1px solid #f6b45f;margin-top:0.5%; border:1px dotted #aaaaaa;margin-top:1%;">
	<tr>

	
	<td  valign="top" height="700" width="180"  id="menu-bar" id="table2" > 

</td>

		
		</div>
	</td>
<td valign="top" id="idd" style=" background-color:white;">	
<form name="form1">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>
<div align="center">
<script type='text/javascript'>
function formValidation(){
//assign the fields
        var txt_fname = document.getElementById('txt_fname');
		var txt_l=document.getElementById('txt_l');
	var txt_co=document.getElementById('txt_co');
	var txt_mo = document.getElementById('txt_mo');
	var city = document.getElementById('city');
	
if(isAlphabet(txt_fname, "please enter Your Fname in letters only")){
if(lengthRestriction(txt_fname, 3, 30,"for your Fname")){
if(isAlphabet(txt_l, "please enter Your Lname in letters only")){
if(lengthRestriction(txt_l, 3, 30,"for your Lname")){

if(isNumeric(txt_mo, "please enter Number only For Mobile Phone")){
if(isAlphabet(city, "please enter Your City in letters only")){
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
	if(elem.value =="-select-"){
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
<form  method='POST' action='bank.php' >

<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:10px 20px 10px black;" width="500" height="550px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=black>(<font color=red>*</font>)Require</td></tr><tr>
<tr><td colspan=3 align=center><font color=black> Bank Information 
</td></tr>
<tr><td>
<font color=red> * </font> <font color=black>First Name :</td><td><input type="text" name="fname" required="required" value="" size='20%' id="txt_fname" placeholder='Fname'></input></td></tr>
<tr><td><font color=red> * </font><font color=black>Last Name :
	</td><td><input type="text" name="lname" value="" size='20%' id="txt_l" placeholder='Lname' required="required"></input></td></tr><br>
<tr><td>
<font color=red> * </font> <font color=black>Account No :</td><td><input type="password" name="mobile" value="" size='20%' required="required" id="txt_mo" placeholder='Account No'/></td></tr>
<tr><td><font color=red> * </font><font color=black>Amount Birr:</td><td><input type="text" name="cou"  size='20%' required="required" id="txt_co" placeholder="Amount Birr" /></td></tr>
<tr><td><font color=red> * </font><font color=black>Secret Key</td><td><input type="password" name="city" id="city" size='20%' required="required"  placeholder='Secret Key'/></td></tr>


<tr><td colspan="2" align="center"><input type='submit' class="button_example" value='Submit' name='submitMain' Onclick="return check(this.form);"/>
<input type='reset'class="button_example"  value='clear'/></td></tr>
	
</form>
<?php
if(isset($_POST['submitMain']) )
{
$fname=$_POST['fname'];
$date=$_POST['lname'];
$mo=$_POST['mobile'];
$cou=$_POST['cou'];
$cit=$_POST['city'];
$query="INSERT INTO bank(fname,lname,accountnumber,amountbirr,security)";
$query.="VALUES ('{$fname}','{$date}','{$mo}','{$cou}','{$cit}');";
$result=mysql_query($query);
if(!$result){
echo"<p  class='wrong'> This E-Mail Is Ordey Existing!!!</p>";
}
else{
echo"<p  class='success'>Congra</p>";
}


mysql_close($conn1);
}
?>
</fieldset>
</table>
	

</div>
</div>

</td>
<td  valign="top" height="700" width="150"  id="td2" > 

</td>
</tr>
<tr>
</tr>
</table>

<table width=910 border=1 align="center" cellpadding="0px" id="table2">
<tr>
<td style="background:url('images1/background.png');" width=900 height=40 >
<font color=white size=4px ><p align=center>Group 13&copy; 2006 COPY RIGHT RESERVED.</p>
</td>
</tr>

</table>
</body>
</html>
