<?php
session_start();
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title> Doya shop Groups </title>
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
					<li class="active"><a href="home.php" title="index.php">Home</a></li>
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
								
								
							</ul>
						</div>
					</li>
					  <li><a href="about.php">About Us</a></li>
					  <li><a href="customer.php"> Free Sign Up</a> </li>
					  <li><a href="contact.php">Contact</a></li>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Navigation -->		<!-- Begin Slider -->
		<div id="slider">
		
			<!-- End Shell -->
		</div>
		<!-- End Slider -->
		<!-- Begin Main -->
		<div id="main" class="shell">
			<!-- Begin Content -->
			<div id="content">
           	
<script>
function checkPass()
{
    //Store the password field objects into variables ...
    var password1 = document.getElementById('password1');
    var password2 = document.getElementById('password2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(password1.value == password2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        password2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        password2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  
</script>					
<div id="form_wrapper" class="form_wrapper">
	 <table>
	 
					<form name="myForm" class="register active"  id="myForm" method="POST" onsubmit="return validateForm()" action="insertCustomer.php">

   
       <th colspan="3"><h2>CUSTOMER REGISTRATION:</h2> </th> 
						
						
						   
   
   <tr>
    <td>  

		<label> Email:</label>
		<input type="text" name="email" id="email"/>
		

	
	</td>
    <td>   



		<label> FullName:</label>
		<input type="text" name="name" id="name"/>
		
							
   </td>


   </tr>
   
    <tr>

<td>
<label>password :
  <input name="password1" id="password1" type="password" />
</label></td>
<td>
<label>confirm password:
  <input type="password" name="password2" id="password2" onkeyup="checkPass(); return false;" pattern="[a-z])(?=.*[A-Z]).{4,}"
  title="Must contain at least one uppercase and lowercase letter, and at least 4 or more characters" />
<span id="confirmMessage" class="confirmMessage"></span> 
 <span id='message'></span>
  
  
</label></td> </tr>
<tr>
   <td>   
     	  <label>UserName:</label>
			<input type="text" name="username" id="username"/>
			

	</td> 
   
   <td>   
     
			<label> Phone (format:09-2592-2030): </label>
			<input type="text" name="tell"  id="tell" />
			

   </td>
   
   
   </tr>
   
    <tr>
    <td>   
	
		<label> Country:</label>
        <script type="text/javascript" src="js/countries.js"></script>
        <select onchange="print_state('state',this.selectedIndex);" id="country" name ="country"></select>

   </td>
   
    <td>   

        <label>Address:</label>
		<input type="text" name="address" id="address" />
		
		

   </td>
   
   
   </tr>
   
   
   <tr>
      <td>   
  
            <label> City:</label>
			<select name ="City" id ="state" ></select>
		    <script language="javascript">print_country("country");</script>
			
    </td>
   
      <td>   
   
			<label>Postal code:</label>
			<input type="text" name="pcode" id="pcode" />
			

   </td>
   
   </tr>
   
   
  <tr>
						<div class="bottom">

						<td colspan="3">	
						<button  id="btnSubmit" type="submit" name="submit"> Register</button>
							
							<div class="clear"></div>
						</div>
						
		
   </tr>
					</form>
					</table>
<script type='text/javascript'>

function validateForm()
{
/* var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }  */
var x=document.forms["myForm"]["name"].value;

if (x==null || x=="")
    {
    alert("First name must be filled out");
    return false;
    }
var pass = document.getElementById("password1").value
var confPass = document.getElementById("password2").value
        if(pass != confPass) {
            alert('Wrong confirm password !');
        }
var x=document.forms["myForm"]["username"].value;

if (x==null || x=="")
    {
    alert("Username must be filled out");
    return false;
    }
var x=document.forms["myForm"]["tell"].value;
var pattern = /^\d{2}-\d{4}-\d{4}$/;

if (x==null || x=="")
    {
    alert("Phone must be filled out");
    return false;
    } else if (x.match(pattern)) {
    return true;
    } else {
    alert ("Not a valid phone number");
    return false;
    }
var x=document.forms["myForm"]["state"].value;

if (x==null || x=="")
    {
    alert("City name must be filled out");
    return false;
    }
var x=document.forms["myForm"]["address"].value;

if (x==null || x=="")
    {
    alert("Address must be filled out");
    return false;
    }
var x=document.forms["myForm"]["delivery"].value;

if (x==null || x=="")
    {
    alert("address must be filled out");
    return false;
    }


}
	</script>					
			


					
				</div>
	   			

			</div>
			<!-- End Content -->
			<!-- Begin Sidebar -->
			<div id="sidebar">
				<div class="col span_1_of_3">
					<div class="contact_info">
    	 				<h2>Find Us Here</h2>
					    	  <div class="map">
							   	   <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d2532.1710602707303!2d39.997232804246735!3d7.142430055547137!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x17ca074622243709%3A0x68807ba66bcb9c71!2sMadda+Walabu+University+Main+Campus!5e1!3m2!1sen!2set!4v1527199371919" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
							   	    </div>
      				</div>
      			<div class="company_address">
				     	<h2>Shop Information :</h2>
						    	<p><big> DoyaShop</big> Is A Online Sales System  Established In BALE ROBE</p>
						   		<p>  </p>
								<p>by MADA WALABU UNIVERSITY students</p>
						   		<p>BALE ROBE</p>
								<p>ROBE city</p>
								 <BIG>PHONE</BIG>
				   		          <p>+251 925922030</p>
								   <p>+251 962067743</p>
								   <p>+251 921210550</p>
								   <p>+251 922702972</p>
				   		          <BIG>EMAIL</BIG>
 	 	                         <p>Geletabegna@gmail.com</p>
				 	 	          <p> <BIG>FOLLOW US</BIG>
				   		            <span>Facebook</span>, <span>Twitter</span>
				   		            </p>
		                          </p>
 	 	          <p>DoyaShop@gmail.com</p>
				   </div>
				 </div>
			</div>
			<!-- End Sidebar -->
			<div class="cl">&nbsp;</div>
			<!-- Begin Products -->

			
	
		</div>
		<!-- End Main -->
		<!-- Begin Footer -->
		<div id="footer">
			<div class="boxes">
				<!-- Begin Shell -->
				<div class="shell">
					<div class="box post-box">
						<h2>About DoyaShop</h2>
						<div class="box-entry">
							<img src="images/logo.jpg" alt="DoyaShop" width="160" height="80"/>
							<p>You can be confident when you're shopping online with DoyaShop. Our Secure online shopping website encrypts your personal and financial information to ensure your order information is protected.We use industry standard 128-bit encryption. Our Secure online shopping website locks all critical information passed from you to us,
                             such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted. </p>
							<div class="cl">&nbsp;</div>
						</div>
					</div>
					<div class="box social-box">
						<h2>We are Social</h2>
						<ul>
							<li><a href="https://www.facebook.com/galoo19" title="Facebook"><img src="images/100.png" alt="Facebook" width="25" height="25" /><span>Facebook</span><span class="cl">&nbsp;</span></a></li>
							<li><a href="https://twitter.com/geleta22941534" title="Twitter"><img src="images/4 (3).png" alt="Twitter" width="25" height="25" /><span>Twitter</span><span class="cl">&nbsp;</span></a></li>							
							<li><a href="#" title="Pinterst"><img src="images/7 (2).png" alt="Pintrest" width="25" height="25"/><span>pinterst</span><span class="cl">&nbsp;</span></a></li>
							<li><a href="#" title="Blogger"><img src="images/6 (2).png" alt="what's up" width="23" height="24" /><span>what's up</span><span class="cl">&nbsp;</span></a></li>
						</ul>
						<div class="cl">&nbsp;</div>
					</div>
					<div class="box">
						<h2>Information</h2>
						<ul>
							<li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
							<li><a href="#" title="Contact Us">Contact Us</a></li>
							<li><a href="#" title="Log In">Log In</a></li>
							<li><a href="#" title="Account">Account</a></li>

						</ul>
					</div>
					<div class="box last-box">
							<h2>Categories</h2>
						<ul>
							<li><a href="warehouse_1.php" title="Jeans">Jeans</a></li>
							<li><a href="warehouse_2.php" title="Shirts">Shirts</a></li>
							<li><a href="warehouse_3.php" title="Dresses">Dresses</a></li>
							<li><a href="warehouse_4.php" title="Shoes">Shoes</a></li>
						</ul>
					</div>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- End Shell -->
			</div>
			<div class="copy">
				<!-- Begin Shell -->
				<div class="shell">
					<div class="carts">
					</div>	<p>&copy; Doyashop.com. <a href="home.php"><i><font color="fefefe"> Welcome To doyashop Online Shopping Site </font></i></a></p>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- End Shell -->
			</div>
		</div>
		<!-- End Footer -->

	</div>
	<!-- End Wrapper -->
</body>
</html>