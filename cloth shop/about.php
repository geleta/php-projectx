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
					   <li><a href="products.php"> Products</a></li>
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
			<div id="content">
				<div class="post">
					<h2>Welcome!</h2>
					<img src="images/flag_256.jpg" alt="Post Image" height="160" width="260"/>
					You can be confident when you're shopping online with doyashop. Our Secure online shopping website encrypts your personal and financial information to ensure your order information is protected.We use industry standard 128-bit encryption. Our Secure online shopping website locks all critical information passed from you to us,
                   such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted.. <a href="#" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
				
				
				<div class="post">
				
					<h1 align="center"><font color="blue">About The Project Developers</font></h1><br>
					<h2>Developer</h2>
					<img src="images/IMG_19700105_044827.jpg" alt="Post Image" width="140" height="159" />
					<p>Geleta Begna issssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss
					gggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg</p>
					<p>. <a href="http://www.facebook.com/galoo19" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
				<div class="post">
					<h2>Developer</h2>
					<img src="images/IMG_19700105_044827.jpg" alt="Post Image" width="140" height="159" />
					<p>Hawii Feyisa. </p>
					<p>. <a href="http://www.facebook.com/galoo19" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
				<div class="post">
					<h2>Developer</h2>
					<img src="images/IMG_19700105_044827.jpg" alt="Post Image" width="140" height="159" />
					<p>Mustefa Kedir. </p>
					<p>. <a href="http://www.facebook.com/galoo19" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
				<div class="post">
					<h2>Developer</h2>
					<img src="images/IMG_19700105_044827.jpg" alt="Post Image" width="140" height="159" />
					<p>Asnaku . </p>
					<p>. <a href="http://www.facebook.com/galoo19" class="more" title="Read More">Read More</a></p>
					<div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- End Content -->
			
			
<!-- Begin Sidebar -->
			<div id="sidebar">
				<ul>
					<li class="widget">
						<h2>TOP Warehouse</h2>
						<div class="brands">
							<ul>
								<li><a href="warehouse_1.php" title="Brand 1"><img src="images/men jeans (9).jpg" width="45" height="65" alt="Brand 1" /></a></li>
								<li><a href="warehouse_2.php" title="Brand 2"><img src="images/women shirt (8).jpg" width="45" height="65" alt="Brand 2" /></a></li>
								<a href="warehouse_4.php" title="Brand 4"><img src="images/39.png" width="45" height="65" alt="Brand 4" /></a>
								<a href="warehouse_3.php" title="Brand 3"><img src="images/dress (11).jpg" width="45" height="65" alt="Brand 3" /></a>
								<li></li>
							</ul>
							<div class="cl">&nbsp;</div>
					  </div>
						<a href="products.php" class="more" title="More Brands">All Products</a>
					</li>
				</ul>
			</div>
			<!-- End Sidebar -->
			<div class="cl">&nbsp;</div>
	
		</div>
		<!-- End Main -->

			<div class="boxes">
			
			<div class="copy">
				<!-- Begin Shell -->
				<div class="shell">
					<div class="carts"></div>	<p align="center">&copy; doyashop.com. Groups <a href="index.php"><i><font color="fefefe"> Welcome To <strong> doyashop</strong> Online Shopping Site </font></i></a></p>
					<div class="cl">&nbsp;</div>
				</div>
				<!-- End Shell -->
			</div>
		</div>

	<!-- End Wrapper -->
</body>
</html>