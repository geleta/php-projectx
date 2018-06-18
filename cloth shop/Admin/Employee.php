<?php
include("../session.php");
include("../config.php");

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Doya shop Admin </title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

<div id="container">

	  
	  
	   <div id="header">
 
         
		<div id="logo-banner">
		   
				<div id="logo">
					<a href="index.php"><img src="images/headerbg.png" alt="" align="center"/></a>
				</div>
				
				<div id="banner">
                
				</div>
		
		</div>
		</div> <!--HEADER-->
		
	
	<div id="content-wrap">	
	
	<section id="secondary_bar">

             <nav><!-- Defining the navigation menu -->
                <ul>
                    <li class="selected"><a href="index.php">Home</a></li>
                  <li><a href="add_warehouse.php">Manage Warehouse</a></li>
				  <li><a href="add_customer.php">Manage Customer</a></li>
                    <li><a href="add_product.php">Manage Product</a></li>
                    <li><a href="Employee.php">Manage Employee</a></li>
                   <li><a href="add_category.php">Categories</a></li><li><a href="Contacts.php">Comments</a></li><li><a href="rate.php">Ratings</a></li>
                    <li class="logout"> <span class="check"> <?php echo "Welcome Mr/Miss:   ". "<font color='##fa5400'><i><b>".$login_session."</b></i></font>" ;?> </span></li>
					
                </ul>
				
            </nav>
				
            </nav>

	</section><!-- end of secondary bar -->
	   	
<aside id="sidebar" class="column">
			<!-- Begin Search -->
				<div id="search">
					<form action="searchemplo.php" method="post" accept-charset="utf-8">
						<input type="text"  title="Search..." class="blink field"  placeholder="Search Employee"  name='search' size=60 maxlength=100/>
						<input class="search-button" type="submit" value="Submit" />
						<div class="cl">&nbsp;</div>
					</form>
					
				</div>
				<!-- End Search -->
		<hr/>
		<h3> Doya shop Database Backup:</h3>
		<ul class="toggle">
		    <li class="icn_folder"><a href="Backup.php">Backup Database</a></li>
		</ul>
		
		<h3>Reports:</h3>
		<ul class="toggle">
		    <li class="icn_settings"><a href="OrderReports.php">Order Report</a></li>
			<li class="icn_settings"><a href="EmployeeReport.php">Employee Report</a></li>
			<li class="icn_settings"><a href="CustomerReport.php">Customer Report</a></li>
			<li class="icn_settings"><a href="ProductReport.php"> Product Report</a></li>
     		
		</ul>


		
		<h3>Administrator:</h3>
		<ul class="toggle">
		    <li class="icn_add_user"><a href="Employee.php">Manage Employee</a></li>
			<li class="icn_photo"><a href="add_product.php">Manage Product</a></li>
				<li class="icn_tags"><a href="add_warehouse.php">Manage Warehouse</a></li> <li class="icn_tags"><a href="add_customer.php">Manage Customer</a></li>
			<li class="icn_new_article"><a href="add_category.php">Manage Category</a></li>
		
		</ul>
		
        <h3>Tables:</h3>
		<ul class="toggle">
		    <li class="icn_categories"><a href="order.php">Order Detial</a></li>
     		<li class="icn_categories"><a href="customerTable.php">Customer Detail</a></li>
		</ul>

		<h3>Admin</h3>
		<ul class="toggle">

			<li class="icn_jump_back"><a href="../logout.php">Logout</a></li>
		</ul>
	
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
	
	<h4 class="alert_info">Welcome To <strong>"Doya shop"</strong> Admin Panel As: <?php echo "  ". "<font color='#f90'><big><b>".$login_session."</b></big></font>" ;?>  </h4>

<script type="text/javascript">
function validateForm()
{
var a=document.forms["addemployee"]["fullname"].value;
if (a==null || a=="")
  {
  alert("Pls. Employee Full Name IS Missing !!!");
  return false;
  }
var b=document.forms["addemployee"]["username"].value;
if (b==null || b=="")
  {
  alert("Pls. Your User Name Is Missing !!!");
  return false;
  }
  
   var c=document.forms["addemployee"]["password"].value;
if (c==null || c=="")
  {
  alert("Pls. Your Password Is MIsssing !!!");
  return false;
  }

}
</script>	


	
    <script type="text/javascript">
        $(function() {
            $('#empValid').keyup(function() {
			
                if (this.value.match(/[^a-zA-Z]/g)) {
                    this.value = this.value.replace(/[^a-zA-Z ]/g, '');
					
                }
				Alart("Numbers IS NOT Allowed Sir!!!!!! !!!");
            });
        });
    </script>
		

				
				
	<div id="form_wrapper" class="form_wrapper">
	
		 <table>
					<form class="register active" id="myForm"action="empRegistration.php"  method="POST" >

					<th colspan="3"><h2>Add Employee</h2> </th> 
						

        <tr>
       <td>  

	  <label>Full Name:</label>
		
		<input type="text" id="empValid" name="fullname" placeholder="Full name" />
		<span class="error">This is an error</span>
	  </td>
      <td>   

	     <label>Username:</label>

		<input type="text" id="username" name="username" placeholder="User name" />
		<span class="error">This is an error</span>
      </td>
		</tr>
    <tr>
         <td>  

		<label> Selelct Employee image :</label>
		<input type="file" name="picture" id="picture"  required>
		<span id="pass-info"> </span>
                               
	    </td>
		
       <td>  

		<label> Enter Password:</label>
		
		<input type="password" id="password" name="password" placeholder="*****" >
		<span id="pass-info"> </span>
                               
	</td>

   </tr>



						<div class="bottom">

						<td colspan="3">	
						
						<button name="submit" id="submit" title="Click to Save"  class="a-btn"> <span class="a-btn-text"> Manage Employee</span></button>
						
						</td>
							
							<div class="clear"></div>
						</div>
						
		

	</form>
					
	</table>
	</div>


						<script>
<script type="text/javascript">

$(document).ready(function(){ 
    $("#submit").click(function() { 
    
        $.ajax({
        cache: false,
        type: 'POST',
        url: 'empRegistration.php',
        data: $("#myForm").serialize(),
        success: function(d) {
            $("#someElement").html(d);
        }
        });
    }); 
});

</script>
		
	





<?php
$result = mysqli_query($mysqli,"SELECT * FROM employee");
?>
      <div id="tab1" class="tab_content">
  <table class="tablesorter" cellspacing="0"> 

			
			<thead><tr> <th colspan="7"> Employee Data Record</th>  </tr> <thead>
		<thead>
			<tr>
   		    <th>Check</th> 
    	      <th>Employee ID</th>
              <th> Employee Name</th>			  
    		<th>User Name</th>
		    <th>Password</th>
           <th>Picture</th>			
    		<th>Actions</th>
			</tr>
		</thead>
		<tbody>
<?php while($row = mysqli_fetch_array($result))
  {?>

      <tr>
    <td><input type="checkbox"></td>
    <td><?Php echo $row['Employee_ID']; ?></td>
    <td><?php echo $row['Employee_Name']; ?></td>
   <td><?php echo $row['Username']; ?></td>
	<td><?php echo $row['Password']; ?></td>
	<td><img src="../images/<?php echo $row['Picture']; ?>" width="40" height="40"></td>
    <td> <a href="empViewUpdate.php?update=<?php echo $row['Employee_ID']; ?>"  onClick="edit(this);" title="empEdit" >  <input type="image" src="images/icn_edit.png" title="Edit"> </a>
     <a href="empDelete.php?delete=<?php echo $row['Employee_ID']; ?>" onClick="del(this);" title="Delete"><input type="image" src="images/icn_trash.png" title="Trash"/>  </a></td>
    </tr>

  <?php }mysqli_close($mysqli);?>
      </tbody>
</table>
	  
 </div> 

	</section>
          </div>
   </div>
    
</body>

</html>