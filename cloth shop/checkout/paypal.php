<?php
session_start();
?>
<h1>please wait, we are transfering you to PayPal....</h1>
<?php
$paypal_url = 'https://www.sandbox.paypal.com/';
$product=$_SESSION["cart_session"];
?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="geletabegna@gmail.com">
<input type="hidden" name="item_name_1" value="Item Name 1">
<input type="hidden" name="amount_1" value="1.00">
<input type="hidden" name="shipping_1" value="1.75">
<input type="hidden" name="item_name_2" value="Item Name 2">
<input type="hidden" name="amount_2" value="2.00">
<input type="hidden" name="shipping_2" value="2.50">
<input type="submit" value="click here">
<INPUT TYPE="hidden" NAME="return" value="checkout/products.php?emptycart=1&return_url='.$current_url.;">
</form>
<script type="text/javascript">
    document.getElementById("buyCredits").submit();
</script>