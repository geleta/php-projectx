<?php
//index.php
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Doya Shop Star Rating System by using Ajax JQuery</title>
  <script src="js/jquery-3.3.1.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/bootstrap.min.js"></script>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="images/favicon.png" />
	
 </head>
 <body>
  <div class="container" style="width:800px;">
   <h2 align="center">Star Rating System of Doya shop by using Ajax JQuery</h2>
   <br />
   <span id="business_list"></span>
   <br />
   <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 load_business_data();
 
 function load_business_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#business_list').html(data);
   }
  });
 }
 
 $(document).on('mouseenter', '.rating', function(){
  var index = $(this).data("index");
  var product_id = $(this).data('product_id');
  remove_background(product_id);
  for(var count = 1; count<=index; count++)
  {
   $('#'+product_id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 function remove_background(product_id)
 {
  for(var count = 1; count <= 5; count++)
  {
   $('#'+product_id+'-'+count).css('color', '#ccc');
  }
 }
 
 $(document).on('mouseleave', '.rating', function(){
  var index = $(this).data("index");
  var product_id = $(this).data('product_id');
  var rating = $(this).data("rating");
  remove_background(product_id);
  //alert(rating);
  for(var count = 1; count<=rating; count++)
  {
   $('#'+product_id+'-'+count).css('color', '#ffcc00');
  }
 });
 
 $(document).on('click', '.rating', function(){
  var index = $(this).data("index");
  var product_id = $(this).data('product_id');
  $.ajax({
   url:"insert_rating.php",
   method:"POST",
   data:{index:index, product_id:product_id},
   success:function(data)
   {
    if(data == 'done')
    {
     load_business_data();
     alert("You have rate "+index +" out of 5");
    }
    else
    {
     alert("There is some problem in System");
    }
   }
  });
  
 });

});
</script>
