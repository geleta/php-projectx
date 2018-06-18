<?php 

//include config.php to connect to the database
	include("config.php"); 
	
	//start session
    session_start();
{
		// Define $myusername and $mypassword
	$uname=$_POST['uname'];
	$password=$_POST['password'];
	
	// To protect MySQL injection
	$uname= mysqli_real_escape_string( $mysqli,$uname);
	$password = mysqli_real_escape_string( $mysqli, $password);

    $fetch=mysqli_query( $mysqli, "select Cust_Id from customer where UserName='$uname' and Password= '$password'");
    $count=mysqli_num_rows($fetch);
    if($count!="")
    {
    $_SESSION['login_username']=$uname;
	 header("location:home.php");
    }
    else
    {
	   header('Location: Sign In.php');
	}

}
?>
