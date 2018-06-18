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
			
				<h1><a class="notext" href="#" title="doya"><img src="images/header.png" width="1200" height="110">Doyacart</a>
				
				<a href="Sign In.php" title="Sign In"><img src="images/login-button.png" width="100" height="110"</a></h1>
		<div class="shell">
				
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
		<!-- End Navigation -->

		<!-- Begin Main -->
		<div id="main" class="shell">
			<!-- Begin Content -->
		<!-- Begin Slider -->
		<div id="slider">
		
			<!-- End Shell -->
		</div>
		<!-- End Slider -->
		<!-- Begin Main -->
		<div id="main" class="shell">
			<!-- Begin Content -->
			<div id="content">
              <div class="support_desc">
  				<h2>Live Support</h2>
				<img src="images/Animated flag of Ethiopia flag animation (7).GIF" ALIGN="RIGHT" alt="Post Image" height="100" width="180"/>
  				<p><span>24 hours | 7 days a week | 365 days a year &nbsp;&nbsp; Welcome To Live Technical Support</span></p>
  				<p> Admin On behalf on <b>DoyaShop</b>  we have welcome you 24/7 live support 
				  you can ask what ever you think about our Company.</p>
  			</div>

				<div id="form_wrapper" class="form_wrapper">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form method="POST" action="feedback_process.php" id="frmcontact">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="name" id="name"value=""></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="text" name="email" id="email"value=""></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" name="phone" id="phone"value=""></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="text"  id="textarea"> </textarea   maxlength="100"></span>
						    </div>
						   <div>
						   		<span><input type = "submit" name = "submit" id = "submit" value="SUBMIT"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				
									
<script type="text/javascript">

$(document).ready(function(){ 
    $("#submit").click(function() { 
 
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'feedback_process.php',
        data: $("#frmcontact").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }
        });
    }); 
});

</script>
				

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
	<!-- End Main --></div>
	<!-- End Wrapper -->	
</body>
</html>