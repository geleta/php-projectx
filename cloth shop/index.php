<?php
session_start();
include("config.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title> DoyaShop Groups </title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="images/favicon.png" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/proStyle.css" type="text/css" media="all" />
	   	<link rel="stylesheet" href="css/userlogin.css" type="text/css" media="all" />
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
	
<!--chattinga-->

<script type="text/javascript">
$(document).ready(function() {

	// load messages every 1000 milliseconds from server.
	load_data = {'fetch':1};
	window.setInterval(function(){
	 $.post('shout.php', load_data,  function(data) {
		$('.message_box').html(data);
		var scrolltoh = $('.message_box')[0].scrollHeight;
		$('.message_box').scrollTop(scrolltoh);
	 });
	}, 1000);
	
	//method to trigger when user hits enter key
	$("#shout_message").keypress(function(evt) {
		if(evt.which == 13) {
				var iusername = $('#shout_username').val();
				var imessage = $('#shout_message').val();
				post_data = {'username':iusername, 'message':imessage};
			 	
				//send data to "shout.php" using jQuery $.post()
				$.post('shout.php', post_data, function(data) {
					
					//append data into messagebox with jQuery fade effect!
					$(data).hide().appendTo('.message_box').fadeIn();
	
					//keep scrolled to bottom of chat!
					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					
					//reset value of message box
					$('#shout_message').val('');
					
				}).fail(function(err) { 
				
				//alert HTTP server error
				alert(err.statusText); 
				});
			}
	});
	
	//toggle hide/show shout box
	$(".close_btn").click(function (e) {
		//get CSS display state of .toggle_chat element
		var toggleState = $('.toggle_chat').css('display');
		
		//toggle show/hide chat box
		$('.toggle_chat').slideToggle();
		
		//use toggleState var to change close/open icon image
		if(toggleState == 'block')
		{
			$(".header div").attr('class', 'open_btn');
		}else{
			$(".header div").attr('class', 'close_btn');
		}
		 
		 
	});
});

</script>

<!-- chatting-->
</head>
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
		<!-- Begin Header -->
	  <div id="header">
			<!-- Begin Shell -->
			
				<h1><a class="notext" href="#" title="doya"><img src="images/header.png" width="1230" height="110">Doyacart</a>
				
				<a href="Sign In.php" title="Sign In"><img src="images/login-button.png" width="100" height="110"</a></h1>
		<div class="shell">
				
				<div class="cl">&nbsp;</div>
	<div class="shopping-cart"  id="cart" id="right" >
<dl id="acc">	
<dt class="active">								
<p class="shopping" >Shopping Cart &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
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
					 <li><a href="customer.php"> Free Sign Up</a> </li>
					 
					  <li><a href="ind.php">Rate products</a></li>
					  
				</ul>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Shell -->
		</div>
		<!-- End Navigation -->
<!-- Begin Slider -->
		<div id="slider">
			<!-- Begin Shell -->
			<div class="shell">
				<ul class="slider-items">
					<li>
					      <img src="images/slider cold.png" alt="Slide Image" />
					      <div class="slide-entry">
						  <h2>jackets for cold</h2>
						  <a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						     <img src="images/Slider men.png" alt="Slide Image" />
				      <div class="slide-entry">
							 <h4><span>Jeans</span><span class="small"></span> &nbsp; all type</h4>
							 <a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						    <img src="images/Men-Slider-Nike.jpg" alt="Slide Image" />
				      <div class="slide-entry">
							<h3><span>Nike</span></h3> 
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						    <img src="images/slider adidas.jpg" alt="Slide Image" />
				      <div class="slide-entry">
							<h3><span>Adidas</span></h3> 
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						    <img src="images/slider puma.jpg" alt="Slide Image" />
				      <div class="slide-entry">
							<h3><span>Puma</span></h3> 
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						    <img src="images/slider childsss.png" alt="Slide Image" />
				      <div class="slide-entry">
							<h3><span>Childs</span></h3> 
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						      <img src="images/slider boots.png" alt="Slide Image" />
				      <div class="slide-entry">
							  <h3><span>Best Boots</h3> 
							  <a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						    <img src="images/baby.png" alt="Slide Image" />
				      <div class="slide-entry">
							<h3><span>Everything you want</span></h3> 
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						    <img src="images/slider wboots.png" alt="Slide Image" />
				      <div class="slide-entry">
							<h2><span>Woman</span>Boots</h2>
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						    <img src="images/slider mens.jpg" alt="Slide Image" />
				      <div class="slide-entry">
							<h4><span>GENTLEMAN</span></h4>
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						    <img src="images/slider kids.jpg" alt="Slide Image" />
				      <div class="slide-entry">
							<h4><span>For your childs</span></h4>
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
					<li>
						    <img src="images/slider tshirt.png" alt="Slide Image" />
				      <div class="slide-entry">
							<h4 class="short"><span>Body t-shirts</span> </h4>
							<a href="products.php" class="button" title="Buy now"><span>Buy now</span></a>
						</div>
					</li>
				</ul>
				<div class="cl">&nbsp;</div>
				</div>
			<!-- End Shell -->
		</div>
		<!-- End Slider -->
		<!-- Begin Main -->
		<div id="main" class="shell">
			<!-- Begin Content -->
			<div id="content">
				<div class="post">
					<!-- Begin Search
				<div id="search">
					<form action="searchprod.php" method="post" accept-charset="utf-8">
						<input type="text"  title="Search..." class="blink field"  placeholder="Search Product"   name='search' size=60 maxlength=100 />
						<input class="search-button" type="submit" value="Submit" />
						<div class="cl">&nbsp;</div>
					</form>
					
				</div>
				<!-- End Search -->
					<h2>Welcome!</h2>
					<img src="images/Logo.jpg" alt="Post Image" height="100" width="180"/>
					You can be confident when you're shopping online with DoyaShop. Our Secure online shopping website encrypts your personal and financial information to ensure your order information is protected.We use industry standard 128-bit encryption. Our Secure online shopping website locks all critical information passed from you to us,
                   such as personal information, in an encrypted envelope, making it extremely difficult for this information to be intercepted.. <a href="#" class="more" title="Read More">Read More</a></p>
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
		 
			<!-- Begin Products -->
			<div id="products">
				<div class="cl">&nbsp;</div>
				<h2 align="left">Featured Products</h2>

	      <div class="section group">
		  
		 <?php
    //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM product ORDER BY 	Product_ID ASC");
    if ($results) { 
	
        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
			echo '<div class="grid_1_of_4 images_1_of_4">'; 
            echo '<form method="post" onsubmit="return validateForm()" action="cart_update.php">';
			echo '<div class="product-thumb"><img src="images/'.$obj->Picture.'"></div>';
            echo '<div class="product-content"><h2><b>'.$obj->productName.'</b> </h2>';
            echo '<div class="product-desc">'.$obj->Description.'</div>';
			////////echo '<p><div class="price">quantity left:'.$obj->quantity.'</div></p>';
			echo '<div class="price">Size:'.$obj->Model.'</div>';
            echo '<div class="product-info">';
			echo '<p><span class="price"> Price:<big style="color:green">'.$obj->Price.''.$currency.'</big></span></p>';
            
/* 			$result = $mysqli->query("SELECT quantity FROM product ORDER BY 	Product_ID ASC");
			$number_of_rows= @mysql_num_rows($result);
  if ($number_of_rows == 'quantity')
  {
    echo "Sorry out of stock";
  }
  else {
   echo 'Qty <input type="text" name="product_qty" value="'.$obj->quantity.'" size="3" />';
  } */ 
 			echo 'Qty <input type="number" name="product_qty" value="1" min="1" max='.$obj->quantity.' size="3" />';
			/* echo '<span><select name="id[1]" id="attrib-1">
<option selected="selected" value="0">Please Select Size</option>  <option value="8">XS</option>
  <option value="9">S</option>
  <option value="10">M</option>
  <option value="11">L</option>
  <option value="12">XL</option>
  <option value="13">2XL</option>
  <option value="14">3XL</option>
  <option value="15">4XL</option>
</select></span>';  */
			echo '<div class="button"><span><img src="images/cart.jpg" alt="" /><button class="cart-button"  class="add_to_cart">Add to Cart</button></span> </div>';
			echo '</div></div>';
			
            echo '<input type="hidden" name="Product_ID" value="'.$obj->Product_ID.'" />';
            echo '<input type="hidden" name="type" value="add" />';
			echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
            echo '</div>';
        }
    
    }
    ?>
	<script>
function validateForm(){
    alert('are you sure to add this product to CART!!!');  
    return true;
} 
</script>
    </div>
				<div class="cl">&nbsp;</div>
			</div>
			<!-- End Products -->
			
			
      <!-- Begin Products Slider -->
			
				
				
		  <!-- End Products Slider -->
			
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
							<li><a href="contact.php" title="Contact Us">Contact Us</a></li>
							<li><a href="Sign In.php" title="Log In">Log In</a></li>
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
				<div class="shell" align="center">
					<div class="carts">
					</div>	<p>&copy; DoyaShop. Groups <a href="index.php"><i><font color="fefefe"> Welcome To DoyaShop Online Shopping Site </font></i></a></p>
					<div class="cl">&nbsp;</div>
					Copyright © 2018 Info systems All Rights Reserved | designed by IS students Madda walabu University 
				</div>
				<!-- End Shell -->
			</div>
		</div>
		<!-- End Footer
               <div class="shout_box">
      <div class="header"> live Discussion of Somstore <div class="close_btn">&nbsp;</div></div>
     <div class="toggle_chat">
     <div class="message_box">
    </div>
    <div class="user_info">
    <input name="shout_username" id="shout_username" type="text" placeholder="Your Name" maxlength="15" />
   <input name="shout_message" id="shout_message" type="text" placeholder="Type Message Hit Enter" maxlength="100" /> 
    </div>
    </div>
	</div> */
	<!-- End Wrapper -->
</body>
</html>