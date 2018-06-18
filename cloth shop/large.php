<div style="color:#000000;">
<?php 
include("config.php");
?>

<?php

				  if (isset($_GET['Product_ID']))
			{
	
	
			
		
			$id=$_GET['Product_ID'];
			$result = mysql_query("SELECT * FROM product WHERE Product_ID = $id");

			$row3 = mysql_fetch_array();
			echo '<div style="font-size:30px;"><b>'.$row3['productName'].'</b></div><br>';
			echo '<h3><b>Description</b></h3>'.'<div style="font-size:18px;">'.$row3['Description'].'</div><br>';
				echo '<img  src="images'.$row3['Picture'].'" width="300" height="300"  />';
  			
	
			}
			?>
<table width="191"  style="border:3px solid #FFFFFF;" cellpadding="5px" cellspacing="1px">
  <tr> 
   <td><b><div align="center">Model</div></td>
    <td><b><div align="center">BrandName</div></td>
    <td><b><div align="center">Price</div></td>
  </tr>

			<?php

				  if (isset($_GET['Product_ID']))
			{
	
	
			
		
			$id=$_GET['Product_ID'];
			$result = mysql_query("SELECT * FROM product WHERE Product_ID = $id");

			while($row3 = mysql_fetch_array())
  			{
			echo '<tr>';
				echo '<td><b><div  align="center">'.$row3['Model'].'</div></td>';
				echo '<td><b><div   align="center">'.$row3['productName'].'</div></td>';
				echo '<td><b><div  align="center">'.$row3['Price'].'</div></td>';
			echo '</tr>';
  			}
	
			}
			?>
			 
</table>
			</div>