<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/AnimateLogo.css" />
		<link rel="stylesheet" type="text/css" href="../css/animate-custom.css" />

	   	<link rel="stylesheet" href="css/userlogin.css" type="text/css" media="all" />

	
    </head>
    <body>
	
        <div class="container">


			<header>

					

				 <h1>
				   <p align="center">DOYA S M A R T<strong>    Login Form    </strong> Please Login Or Sign Up</p> </h1>
				
				
			</header>

			<div class="codrops-top">
            <header>

			    <p align="center" align="center"><b> <a href="#toregister"  class="a-btn"><span class="a-btn-text">Admin Login</span></a>  </b>	<b> <a href="#tologin"  class="a-btn"> <span class="a-btn-text">Customer Login</span> </a> </b>
				<a href="Customer.php" class="a-btn"><strong><span class="a-btn-text">Create New Account</span></strong></a><a href="../index.php" class="a-btn"><strong> <span class="a-btn-text">Back To Home</span></strong></a> </p>
            </header>
			 <div class="clr"></div>
			 </div> <br><br>
            <section>				
                <script>			
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}	</script>		
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="userValidate.php" method="post" autocomplete="on"> 
                                <h1>Customer Login:</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your UserName </label>
                                    <input type="text" name="uname" required="required" type="text" placeholder="geletabegna@gmail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p" > Your Password </label>
                                    <input type="password" id="myInput" name='password' required="required" type="password" placeholder="eg. *********" /><br><br>
                                    <input type="checkbox" onclick="myFunction()">Show Password									
                                </p>
                                <!-- <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p> -->
                                <p class="login button"> 
                                    <input type="submit"  name="submit"  value =" Login">
								</p>

                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="employeeValidate.php" method="post" autocomplete="on"> 
                             <h1>Admin Login</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your User Name </label>
                                    <input type="text" name="uname" required="required" type="text" placeholder="myusername "/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your Password </label>
                                    <input type="password" name='password' required="required" type="password" placeholder="eg. *******" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>

								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html
\\