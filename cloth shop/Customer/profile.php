<?php

include("usersession.php");
include("config.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title> Doyashop Group </title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
         <link rel="shortcut icon" href="images/favicon.png" />
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
	   
	 	<link rel="stylesheet" href="css/cart.css" type="text/css" media="all" />
	
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
						<li><a href="#" title="Login Email"> <span class="gale"><?php echo "Welcome as: ". "<i><b>".$login_session."</b></i>" ;?></span></a></li>
						
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
					<li class="active"><a href="home.php" title="index.php">Home</a></li>
					<li><a href="profile.php" title="Profile">Profile</a></li>
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

		<!-- Begin Main -->
		<div id="main" class="shell">

			<!-- Begin Content -->
			<div id="content">
				<div class="post">
					<h2>Welcome!</h2>
					<img src="images/logo.jpg" alt="Post Image" height="94" width="260"/>
					You can be confident when you're shopping online with Doyashop. Our Secure online shopping website encrypts your personal and financial information to ensure your order information is protected.We use industry standard 128-bit encryption. Our Secure online shopping website locks all critical information passed from you to us,
                   such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted.. <a href="#" class="more" title="Read More">Read More</a></p>
					
					


				  <div class="cl">&nbsp;</div>
				</div>
			</div>
			<!-- End Content -->
			<!-- Begin Sidebar -->
			
				<ul>
					<li class="widget">
						 <div class="cl">&nbsp;</div>
			<h2>Customer Information</h2>
						<div class="brands">
		 <div id="form_wrapper" class="form_wrapper">			
               <?php  
		$id = $_SESSION['login_username'];
		$query = mysqli_query($mysqli,"SELECT * FROM customer WHERE UserName = '$id'") or die (mysqli_error()); 
							$result = mysqli_fetch_array($query);	
														?>
			<table>	
               <form class="register active" action="custUpdate.php" method="POST" autocomplete="off">
			     <tr>
				 
                  <td><input name="username" type="hidden" id="namebox" value="<?php echo $result['Cust_Id']?>"/></td></tr>
				  <tr>
				 
                  <td>  <label>Full Name:</label><input name="firstname"  type="text" id="namebox" value="<?php echo $result['FullName']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>User Name:</label><input name="lastname"  type="text" id="namebox" value="<?php echo $result['UserName']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>Phone:</label><input name="phone"  type="text" id="namebox" value="<?php echo $result['Phone']?>"/></td></tr>
                   <tr>
				   
                  <td> <label>Email:</label><input name="Email" type="text" id="namebox" value="<?php echo $result['Email']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>Country:</label> <input name="country"  type="text" id="namebox" value="<?php echo $result['Country']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>City:</label> <input name="city"  type="text" id="namebox" value="<?php echo $result['City']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>Address:</label> <input name="address"  type="text" id="namebox" value="<?php echo $result['Adress']?>"/></td></tr>
				  <tr>
				  
                  <td> <label>Postal Code:</label> <input name="pcode"  type="text" id="namebox" value="<?php echo $result['PostalCode']?>"/></td></tr>
				  
			
						<td colspan="3">	
						
						<button type="submit"  name="submit" id="submit" value="Update" class="a-btn"><span class="a-btn-text"> Update</span> </button>
						
						</td>
					
			</form>
			</table>
		 </div>
			
		<div class="cl">&nbsp;</div>
						</div>
						
					</li>
				</ul>
		
			<!-- End Sidebar -->
			<div class="cl">&nbsp;</div>
			
			

			
				<!-- Begin Products Slider -->
			<div id="product-slider">
				<h2>Best Products</h2>
				<ul>
				
		  	<?php
			$result=mysqli_query($mysqli,"select * from product") or die (mysqli_error());
			while($row=mysqli_fetch_array($result)){
		?>
					<li>
						<a href="products.php" title="Product Link"><img src="images/<?php echo $row['Picture']?>" alt="IMAGES" /></a>
						<div class="info">
							<h4><b><?php echo $row['productName']?></b></h4>
							<span class="number"><span>Price:<big style="color:green">Birr<?php echo $row['Price']?></big></span></span>
					
							<div class="cl">&nbsp;</div>
							 
						</div>
					</li>
					 <?php } ?>
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Products Slider -->		

											             
<?php
   $ids = $_SESSION['login_username'];
		$qry = mysqli_query($mysqli,"SELECT * FROM customer WHERE Email = '$ids'") or die (mysqli_error()); 
							
?>



			
		</div>
		<!-- End Main -->

	</div>
	<!-- End Wrapper -->
</body>
</html>