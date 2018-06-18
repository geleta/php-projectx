<?php
session_start();
include("../config.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title> Doya Groups </title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	    <link rel="shortcut icon" href="images/favicon.png" />
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" href="../css/proStyle.css" type="text/css" media="all" />
	   	<link rel="stylesheet" href="../css/userlogin.css" type="text/css" media="all" />
	 	<link rel="stylesheet" href="../css/cart.css" type="text/css" media="all" />
	
	<script src="../js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>

	<script src="../js/cufon-yui.js" type="text/javascript"></script>
	<script src="../js/Myriad_Pro_700.font.js" type="text/javascript"></script>
	<script src="../js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="../js/functions.js" type="text/javascript" charset="utf-8"></script>
	
		 <!-- Linking scripts -->
     <script src="../js/jquery.js" type="text/javascript"></script>  
    <script src="../js/main.js" type="text/javascript"></script>
	
	
	        <link rel="stylesheet" href="../css/PaymentStyle.css" type="text/css" media="screen"/>
		   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
          <script type="text/javascript" src="../js/sliding.form.js"></script>
</head>

<style>
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
			text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        h1{
            color:#4E909B;
            font-size:36px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
        }
    </style>
	
<body>
	<!-- Begin Wrapper -->
	<div id="wrapper">
	<!-- Begin Header -->
		<div id="header">
			<!-- Begin Shell -->
			<div class="shell">
			  <div id="top-nav">
				  <ul>
						<li><a href="#" title="Login Email"> <span class="gale"> WELCOME to Payment page </span></a></li>

					</ul>
				</div>
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
    echo '<ol>';
    foreach ($_SESSION["cart_session"] as $cart_itm)
    {
        echo '<li class="cart-itm">';
        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>'."</br>";
        echo '<h3>'.$cart_itm["name"].'</h3>';
        echo '<div class="p-code">ID: '.$cart_itm["code"].'</div>';
		echo '<span>Shopping Cart ( '.$cart_itm["ProductItem"].') </span>';
        echo '<div class="p-price">Price :'.$currency.$cart_itm["Amount"].'</div>';
        echo '</li>';
        $subtotal = ($cart_itm["Amount"]*$cart_itm["ProductItem"]);
        $total = ($total + $subtotal) ."</br>"; 
    }
    echo '</ol>';
   // echo '<span class="check-out-txt"><strong style="color:green" >Total <big style="color:green" >: '.$currency.$total.'</big></strong> <a   class="a-btnjanan"  href="view_cart.php"> <span class="a-btn-text">Check Out</span></a></span>';
	echo ' <span class="empty-cart"><a   class="a-btnjanan"  href="cart_update.php?emptycart=1&return_url='.$current_url.'"><span class="a-btn-text">Clear Cart</span></a></span>';
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
					<li class="active"><a href="../index.php" title="index.php">Home  </a></li>
					<li>
						<a href="../products.php">Category</a>
						<div class="dd">
							<ul>
						<li>
									 <a href="../warehouse_1.php"> Jeans</a>
									<div class="dd">
										<ul>
											<li><a href="../warehouse_1w.php">women's</a></li>
                                            <li><a href="../warehouse_1.php">mens</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									 <a href="../warehouse_2.php"> Shirts</a>
									<div class="dd">
										<ul>
											  <li><a href="../warehouse_2.php">Mens</a></li>
                                             <li><a href="../warehouse_2w.php">Women's</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									<a href="../warehouse_3.php"> Dresses</a>
									<div class="dd">
										<ul>
											<li><a href="../warehouse_3.php">Men's</a></li>
                                            <li><a href="../warehouse_3w.php">Women's</a></li>
										</ul>
									</div>
								</li>
								
								<li>
									<a href="../warehouse_4.php"> Shoes</a>
									<div class="dd">
										<ul>
											  <li><a href="../warehouse_4w.php">Women's</a></li>
                                              <li><a href="../warehouse_4.php">Men's</a></li>
										</ul>
									</div>
								</li>
								<li>
									<a href="../warehouse_childs.php"> childs</a>
									<div class="dd">	
								    </div>
							</ul>
						</div>
					</li>
					   <li><a href="../products.php"> Products  </a></li>
					   <li><a href="../products.php"> View Status  </a></li>
					  <li><a href="../about.php">About Us  </a></li>
					  <li><a href="../contact.php">Contact</a></li>
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

			        <div id="kcontent">
            <h1> Pay cash on delivery Service </h1>
             <div id="wwrapper">
                <div id="steps">
                    <form name="myForm" onsubmit="return validateForm()" action="InsertPayment.php" method="POST" ">
                        <fieldset class="step">
                            <legend>Account
							<?php
   //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
if(isset($_SESSION["cart_session"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["cart_session"] as $cart_itm)
    {
    
        $subtotal = ($cart_itm["Amount"]*$cart_itm["ProductItem"]);
        $total = ($total + $subtotal) ."</br>"; 
    }
    echo '</ol>';
     echo '<h4 Align="right" name="Amount" id="Amount">Total : <big style="color:green">'.$currency.$total.'</big></h4>';

}else{

}
?>
	
							</legend>
                            <p>
                                <label for="username">Full Name</label>
                                <input id="fullname" name="fullname"  />
                            </p>
                            <p>
                                <label for="email">Email</label>
                                <input id="email" name="email" placeholder="geletabegna@gmail.com" type="text" AUTOCOMPLETE=on />
                            </p>
                            <p>
                                <label for="country">Postal Code</label>
                                <input id="pcode" name="pcode" type="op" AUTOCOMPLETE=OFF />
                            </p>
<p>
                                <label for="country">Country</label>
                                		<select name="country" id="select">
	
		  <option value="AF" countrynum="93">Afghanistan</option>
		  <option value="ALA" countrynum="358">Aland Islands</option>
		  <option value="AL" countrynum="355">Albania</option>
		  <option value="GBA" countrynum="493">Alderney</option>
		  <option value="DZ" countrynum="213">Algeria</option>
		  <option value="AS" countrynum="684">American Samoa</option>
		  <option value="AD" countrynum="376">Andorra</option>
		  <option value="AO" countrynum="244">Angola</option>
		  <option value="AI" countrynum="1-264">Anguilla</option>
		  <option value="AQ" countrynum="672">Antarctica</option>
		  <option value="AG" countrynum="1-268">Antigua and Barbuda</option>
		  <option value="AR" countrynum="54">Argentina</option>
		  <option value="AM" countrynum="374">Armenia</option>
		  <option value="AW" countrynum="297">Aruba</option>
		  <option value="ASC" countrynum="247">Ascension Island</option>
		  <option value="AU" countrynum="61">Australia</option>
		  <option value="AT" countrynum="43">Austria</option>
		  <option value="AZ" countrynum="994">Azerbaijan</option>
		  <option value="BS" countrynum="1-242">Bahamas</option>
		  <option value="BH" countrynum="973">Bahrain</option>
		  <option value="BD" countrynum="880">Bangladesh</option>
		  <option value="BB" countrynum="1-246">Barbados</option>
		  <option value="BY" countrynum="375">Belarus</option>
		  <option value="BE" countrynum="32">Belgium</option>
		  <option value="BZ" countrynum="501">Belize</option>
		  <option value="BJ" countrynum="229">Benin</option>
		  <option value="BM" countrynum="1-441">Bermuda</option>
		  <option value="BT" countrynum="975">Bhutan</option>
		  <option value="BO" countrynum="591">Bolivia</option>
		  <option value="BA" countrynum="387">Bosnia and Herzegovina</option>
		  <option value="BW" countrynum="267">Botswana</option>
		  <option value="BV" countrynum="47">Bouvet Island</option>
		  <option value="BR" countrynum="55">Brazil</option>
		  <option value="IO" countrynum="1-284">British Indian Ocean Territory</option>
		  <option value="BN" countrynum="673">Brunei Darussalam</option>
		  <option value="BG" countrynum="359">Bulgaria</option>
		  <option value="BF" countrynum="226">Burkina Faso</option>
		  <option value="BI" countrynum="257">Burundi</option>
		  <option value="KH" countrynum="855">Cambodia</option>
		  <option value="CM" countrynum="237">Cameroon</option>
		  <option value="CA" countrynum="1">Canada</option>
		  <option value="CV" countrynum="238">Cape Verde</option>
		  <option value="KY" countrynum="1-345">Cayman Islands</option>
		  <option value="CF" countrynum="236">Central African Republic</option>
		  <option value="TD" countrynum="235">Chad</option>
		  <option value="CL" countrynum="56">Chile</option>
		  <option value="CX" countrynum="61">Christmas Island</option>
		  <option value="CC" countrynum="61">Cocos (Keeling) Islands</option>
		  <option value="CO" countrynum="57">Colombia</option>
		  <option value="KM" countrynum="269">Comoros</option>
		  <option value="ZR" countrynum="243">Congo, The Democratic Republic Of The</option>
		  <option value="CG" countrynum="242">Congo, The Republic of Congo</option>
		  <option value="CK" countrynum="682">Cook Islands</option>
		  <option value="CR" countrynum="506">Costa Rica</option>
		  <option value="CI" countrynum="225">Cote D'Ivoire</option>
		  <option value="HR" countrynum="385">Croatia (local name: Hrvatska)</option>
		  <option value="CU" countrynum="53">Cuba</option>
		  <option value="CY" countrynum="357">Cyprus</option>
		  <option value="CZ" countrynum="420">Czech Republic</option>
		  <option value="DK" countrynum="45">Denmark</option>
		  <option value="DJ" countrynum="253">Djibouti</option>
		  <option value="DM" countrynum="1-767">Dominica</option>
		  <option value="DO" countrynum="1-809">Dominican Republic</option>
		  <option value="TP" countrynum="670">East Timor</option>
		  <option value="EC" countrynum="593">Ecuador</option>
		  <option value="EG" countrynum="20">Egypt</option>
		  <option value="SV" countrynum="503">El Salvador</option>
		  <option value="GQ" countrynum="240">Equatorial Guinea</option>
		  <option value="ER" countrynum="291">Eritrea</option>
		  <option value="EE" countrynum="372">Estonia</option>
		  <option value="ET" countrynum="251" selected="">Ethiopia</option>
		  <option value="FK" countrynum="500">Falkland Islands (Malvinas)</option>
		  <option value="FO" countrynum="298">Faroe Islands</option>
		  <option value="FJ" countrynum="679">Fiji</option>
		  <option value="FI" countrynum="358">Finland</option>
		  <option value="FR" countrynum="33">France</option>
		  <option value="FX" countrynum="33">France Metropolitan</option>
		  <option value="GF" countrynum="594">French Guiana</option>
		  <option value="PF" countrynum="689">French Polynesia</option>
		  <option value="TF" countrynum="33">French Southern Territories</option>
		  <option value="GA" countrynum="241">Gabon</option>
		  <option value="GM" countrynum="220">Gambia</option>
		  <option value="GE" countrynum="995">Georgia</option>
		  <option value="DE" countrynum="49">Germany</option>
		  <option value="GH" countrynum="233">Ghana</option>
		  <option value="GI" countrynum="350">Gibraltar</option>
		  <option value="GR" countrynum="30">Greece</option>
		  <option value="GL" countrynum="299">Greenland</option>
		  <option value="GD" countrynum="1-473">Grenada</option>
		  <option value="GP" countrynum="590">Guadeloupe</option>
		  <option value="GU" countrynum="1-671">Guam</option>
		  <option value="GT" countrynum="502">Guatemala</option>
		  <option value="GGY" countrynum="44">Guernsey</option>
		  <option value="GN" countrynum="224">Guinea</option>
		  <option value="GW" countrynum="245">Guinea-Bissau</option>
		  <option value="GY" countrynum="592">Guyana</option>
		  <option value="HT" countrynum="509">Haiti</option>
		  <option value="HM" countrynum="61">Heard and Mc Donald Islands</option>
		  <option value="HN" countrynum="504">Honduras</option>
		  <option value="HK" countrynum="852">Hong Kong</option>
		  <option value="HU" countrynum="36">Hungary</option>
		  <option value="IS" countrynum="354">Iceland</option>
		  <option value="IN" countrynum="91">India</option>
		  <option value="ID" countrynum="62">Indonesia</option>
		  <option value="IR" countrynum="98">Iran (Islamic Republic of)</option>
		  <option value="IQ" countrynum="964">Iraq</option>
		  <option value="IE" countrynum="353">Ireland</option>
		  <option value="IM" countrynum="44">Isle of Man</option>
		  <option value="IL" countrynum="972">Israel</option>
		  <option value="IT" countrynum="39">Italy</option>
		  <option value="JM" countrynum="1-876">Jamaica</option>
		  <option value="JP" countrynum="81">Japan</option>
		  <option value="JEY" countrynum="44">Jersey</option>
		  <option value="JO" countrynum="962">Jordan</option>
		  <option value="KZ" countrynum="7">Kazakhstan</option>
		  <option value="KE" countrynum="254">Kenya</option>
		  <option value="KI" countrynum="686">Kiribati</option>
		  <option value="KS" countrynum="381">Kosovo</option>
		  <option value="KW" countrynum="965">Kuwait</option>
		  <option value="KG" countrynum="996">Kyrgyzstan</option>
		  <option value="LA" countrynum="856">Lao People's Democratic Republic</option>
		  <option value="LV" countrynum="371">Latvia</option>
		  <option value="LB" countrynum="961">Lebanon</option>
		  <option value="LS" countrynum="266">Lesotho</option>
		  <option value="LR" countrynum="231">Liberia</option>
		  <option value="LY" countrynum="218">Libya</option>
		  <option value="LI" countrynum="423">Liechtenstein</option>
		  <option value="LT" countrynum="370">Lithuania</option>
		  <option value="LU" countrynum="352">Luxembourg</option>
		  <option value="MO" countrynum="853">Macau</option>
		  <option value="MK" countrynum="389">Macedonia</option>
		  <option value="MG" countrynum="261">Madagascar</option>
		  <option value="MW" countrynum="265">Malawi</option>
		  <option value="MY" countrynum="60">Malaysia</option>
		  <option value="MV" countrynum="960">Maldives</option>
		  <option value="ML" countrynum="223">Mali</option>
		  <option value="MT" countrynum="356">Malta</option>
		  <option value="MH" countrynum="692">Marshall Islands</option>
		  <option value="MQ" countrynum="596">Martinique</option>
		  <option value="MR" countrynum="222">Mauritania</option>
		  <option value="MU" countrynum="230">Mauritius</option>
		  <option value="YT" countrynum="269">Mayotte</option>
		  <option value="MX" countrynum="52">Mexico</option>
		  <option value="FM" countrynum="691">Micronesia</option>
		  <option value="MD" countrynum="373">Moldova</option>
		  <option value="MC" countrynum="377">Monaco</option>
		  <option value="MN" countrynum="976">Mongolia</option>
		  <option value="MNE" countrynum="382">Montenegro</option>
		  <option value="MS" countrynum="1-664">Montserrat</option>
		  <option value="MA" countrynum="212">Morocco</option>
		  <option value="MZ" countrynum="258">Mozambique</option>
		  <option value="MM" countrynum="95">Myanmar</option>
		  <option value="NA" countrynum="264">Namibia</option>
		  <option value="NR" countrynum="674">Nauru</option>
		  <option value="NP" countrynum="977">Nepal</option>
		  <option value="NL" countrynum="31">Netherlands</option>
		  <option value="AN" countrynum="599">Netherlands Antilles</option>
		  <option value="NC" countrynum="687">New Caledonia</option>
		  <option value="NZ" countrynum="64">New Zealand</option>
		  <option value="NI" countrynum="505">Nicaragua</option>
		  <option value="NE" countrynum="227">Niger</option>
		  <option value="NG" countrynum="234">Nigeria</option>
		  <option value="NU" countrynum="683">Niue</option>
		  <option value="NF" countrynum="672">Norfolk Island</option>
		  <option value="KP" countrynum="850">North Korea</option>
		  <option value="MP" countrynum="1670">Northern Mariana Islands</option>
		  <option value="NO" countrynum="47">Norway</option>
		  <option value="OM" countrynum="968">Oman</option>
		  <option value="Other" countrynum="">Other Country</option>
		  <option value="PK" countrynum="92">Pakistan</option>
		  <option value="PW" countrynum="680">Palau</option>
		  <option value="PS" countrynum="970">Palestine</option>
		  <option value="PA" countrynum="507">Panama</option>
		  <option value="PG" countrynum="675">Papua New Guinea</option>
		  <option value="PY" countrynum="595">Paraguay</option>
		  <option value="PE" countrynum="51">Peru</option>
		  <option value="PH" countrynum="63">Philippines</option>
		  <option value="PN" countrynum="872">Pitcairn</option>
		  <option value="PL" countrynum="48">Poland</option>
		  <option value="PT" countrynum="351">Portugal</option>
		  <option value="PR" countrynum="1-787">Puerto Rico</option>
		  <option value="QA" countrynum="974">Qatar</option>
		  <option value="RE" countrynum="262">Reunion</option>
		  <option value="RO" countrynum="40">Romania</option>
		  <option value="RU" countrynum="7">Russian Federation</option>
		  <option value="RW" countrynum="250">Rwanda</option>
		  <option value="BLM" countrynum="590">Saint Barthelemy</option>
		  <option value="KN" countrynum="1">Saint Kitts and Nevis</option>
		  <option value="LC" countrynum="1">Saint Lucia</option>
		  <option value="MAF" countrynum="590">Saint Martin</option>
		  <option value="VC" countrynum="1">Saint Vincent and the Grenadines</option>
		  <option value="WS" countrynum="685">Samoa</option>
		  <option value="SM" countrynum="378">San Marino</option>
		  <option value="ST" countrynum="239">Sao Tome and Principe</option>
		  <option value="SA" countrynum="966">Saudi Arabia</option>
		  <option value="SCT" countrynum="">Scotland</option>
		  <option value="SN" countrynum="221">Senegal</option>
		  <option value="SRB" countrynum="381">Serbia</option>
		  <option value="SC" countrynum="248">Seychelles</option>
		  <option value="SL" countrynum="232">Sierra Leone</option>
		  <option value="SG" countrynum="65">Singapore</option>
		  <option value="SK" countrynum="421">Slovakia (Slovak Republic)</option>
		  <option value="SI" countrynum="386">Slovenia</option>
		  <option value="SB" countrynum="677">Solomon Islands</option>
		  <option value="SO" countrynum="252">Somalia</option>
		  <option value="SOM" countrynum="252" >Somaliland</option>
		  <option value="ZA" countrynum="27">South Africa</option>
		  <option value="SGS" countrynum="44">South Georgia and the South Sandwich Islands</option>
		  <option value="KR" countrynum="82">South Korea</option>
		  <option value="SS" countrynum="">South Sudan</option>
		  <option value="ES" countrynum="34">Spain</option>
		  <option value="LK" countrynum="94">Sri Lanka</option>
		  <option value="SH" countrynum="290">St. Helena</option>
		  <option value="PM" countrynum="508">St. Pierre and Miquelon</option>
		  <option value="SD" countrynum="249">Sudan</option>
		  <option value="SR" countrynum="597">Suriname</option>
		  <option value="SJ" countrynum="47">Svalbard and Jan Mayen Islands</option>
		  <option value="SZ" countrynum="268">Swaziland</option>
		  <option value="SE" countrynum="46">Sweden</option>
		  <option value="CH" countrynum="41">Switzerland</option>
		  <option value="SY" countrynum="963">Syrian Arab Republic</option>
		  <option value="TW" countrynum="886">Taiwan</option>
		  <option value="TJ" countrynum="992">Tajikistan</option>
		  <option value="TZ" countrynum="255">Tanzania</option>
		  <option value="TH" countrynum="66">Thailand</option>
		  <option value="TLS" countrynum="670">Timor-Leste</option>
		  <option value="TG" countrynum="228">Togo</option>
		  <option value="TK" countrynum="690">Tokelau</option>
		  <option value="TO" countrynum="676">Tonga</option>
		  <option value="TT" countrynum="1-868">Trinidad and Tobago</option>
		  <option value="TN" countrynum="216">Tunisia</option>
		  <option value="TR" countrynum="90">Turkey</option>
		  <option value="TM" countrynum="993">Turkmenistan</option>
		  <option value="TC" countrynum="1-649">Turks and Caicos Islands</option>
		  <option value="TV" countrynum="688">Tuvalu</option>
		  <option value="UG" countrynum="256">Uganda</option>
		  <option value="UA" countrynum="380">Ukraine</option>
		  <option value="AE" countrynum="971">United Arab Emirates</option>
		  <option value="UK" countrynum="44">United Kingdom</option>
		  <option value="US" countrynum="1">United States</option>
		  <option value="UM" countrynum="1">United States Minor Outlying Islands</option>
		  <option value="UY" countrynum="598">Uruguay</option>
		  <option value="UZ" countrynum="998">Uzbekistan</option>
		  <option value="VU" countrynum="678">Vanuatu</option>
		  <option value="VA" countrynum="39">Vatican City State (Holy See)</option>
		  <option value="VE" countrynum="58">Venezuela</option>
		  <option value="VN" countrynum="84">Vietnam</option>
		  <option value="VG" countrynum="1284">Virgin Islands (British)</option>
		  <option value="VI" countrynum="1340">Virgin Islands (U.S.)</option>
		  <option value="WF" countrynum="681">Wallis And Futuna Islands</option>
		  <option value="EH" countrynum="685">Western Sahara</option>
		  <option value="YE" countrynum="967">Yemen</option>
		  <option value="YU" countrynum="381">Yugoslavia</option>
		  <option value="ZM" countrynum="260">Zambia</option>
		  <option value="EAZ" countrynum="255">Zanzibar</option>
		  <option value="ZW" countrynum="263">Zimbabwe</option>
	
</select>    

                        </p>
                        </fieldset>
						
                        <fieldset class="step">

                         <legend>Personal Details
						 
						 													<?php
   //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
if(isset($_SESSION["cart_session"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["cart_session"] as $cart_itm)
    {
    
        $subtotal = ($cart_itm["Amount"]*$cart_itm["ProductItem"]);
        $total = ($total + $subtotal) ."</br>"; 
    }
    echo '</ol>';
     echo '<h4 Align="right" name="Amount" id="Amount">Total: <big style="color:green">'.$currency.$total.'</big></h4>';

}else{

}
?>
						 
						 </legend>
						              
						  <p>
                                <label for="phone"> City:</label>
                                <input id="city" name="city" placeholder="e.g. robe" type="text" AUTOCOMPLETE=OFF />
                            </p>
                           <p>
                                <label for="phone"> Kebele:</label>
                                <input id="address" name="address"  placeholder="e.g.mwu" type="text" AUTOCOMPLETE=OFF />
                            </p>
               
                           														 

					<p> 
								 <label for="Address"> Phone:</label>
								 
                                <input id="phone" name="phone" onkeypress="return isNumberKey(event)" placeholder="e.g. +251-925-92-2030" type="tel" />
                            </p>	
<p>
                                
                                 <?php
									
										$name= mysqli_query($mysqli,"select * from warehouse");

										echo '<input type="hidden"  name="warehouse" value="12" id="ml" class="ed">';
										
										?>
                            </p>							
                        </fieldset>
                        <fieldset class="step">
                            <legend>Payment
							
																				<?php
   //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
if(isset($_SESSION["cart_session"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["cart_session"] as $cart_itm)
    {
    
        $subtotal = ($cart_itm["Amount"]*$cart_itm["ProductItem"]);
        $total = ($total + $subtotal) ."</br>"; 
    }
    echo '</ol>';
    echo '<h4 Align="right" name="Amount" id="Amount">Total: <big style="color:green">'.$currency.$total.'</big></h4>';

}else{

}
?>
							
							</legend>
							
							<p>
                                <label for="phone">Delivery Address</label>
                                <input id="delivery" name="delivery" placeholder="e.g. Donsa" type=" text" AUTOCOMPLETE=OFF />
                            </p>
							<p>
<label>Delivery Time</label>

<select name="time" id="time"  required x-moz-errormessage="Please Select Time" title="Please Select Time">
<option selected=selected></option>
<option value="1:00pm">1:00am</option>
            <option value="1:15pm">1:15am</option>
            <option value="1:30pm">1:30am</option>
            <option value="1:45pm">1:45am</option>
            <option value="2:00pm">2:00am</option>
            <option value="2:15pm">2:15am</option>
            <option value="2:30pm">2:30am</option>
            <option value="2:45pm">2:45am</option>
            <option value="3:00pm">3:00am</option>
            <option value="3:15pm">3:15am</option>
            <option value="3:30pm">3:30am</option>
            <option value="3:45pm">3:45am</option>
            <option value="4:00pm">4:00am</option>
            <option value="4:15pm">4:15am</option>
            <option value="4:30pm">4:30am</option>
            <option value="4:45pm">4:45am</option>
            <option value="5:00pm">5:00am</option>
            <option value="5:15pm">5:15am</option>
            <option value="5:30pm">5:30am</option>
            <option value="5:45pm">5:45am</option>
            <option value="6:00pm">6:00am</option>
            <option value="6:15pm">6:15am</option>
            <option value="6:30pm">6:30am</option>
            <option value="6:45pm">6:45am</option>
            <option value="7:00pm">7:00am</option>
            <option value="7:15pm">7:15am</option>
            <option value="7:30pm">7:30am</option>
            <option value="7:45pm">7:45am</option>
            <option value="8:00pm">8:00am</option>
            <option value="8:15pm">8:15am</option>
            <option value="8:00am">8:00am</option>
            <option value="8:15am">8:15am</option>
            <option value="8:30am">8:30am</option>
            <option value="8:45am">8:45am</option>
            <option value="9:00am">9:00am</option>
            <option value="9:15am">9:15am</option>
            <option value="9:30am">9:30am</option>
            <option value="9:45am">9:45am</option>
            <option value="10:00am">10:00am</option>
            <option value="10:15am">10:15am</option>
            <option value="10:30am">10:30am</option>
            <option value="10:45am">10:45am</option>
            <option value="11:00am">11:00am</option>
            <option value="11:15am">11:15am</option>
            <option value="11:30am">11:30am</option>
            <option value="11:45am">11:45am</option>
            <option value="12:00pm">12:00pm</option>
            <option value="12:15pm">12:15pm</option>
            <option value="12:30pm">12:30pm</option>
            <option value="12:45pm">12:45pm</option>
            <option value="1:00pm">1:00pm</option>
            <option value="1:15pm">1:15pm</option>
            <option value="1:30pm">1:30pm</option>
            <option value="1:45pm">1:45pm</option>
            <option value="2:00pm">2:00pm</option>
            <option value="2:15pm">2:15pm</option>
            <option value="2:30pm">2:30pm</option>
            <option value="2:45pm">2:45pm</option>
            <option value="3:00pm">3:00pm</option>
            <option value="3:15pm">3:15pm</option>
            <option value="3:30pm">3:30pm</option>
            <option value="3:45pm">3:45pm</option>
            <option value="4:00pm">4:00pm</option>
            <option value="4:15pm">4:15pm</option>
            <option value="4:30pm">4:30pm</option>
            <option value="4:45pm">4:45pm</option>
            <option value="5:00pm">5:00pm</option>
            <option value="5:15pm">5:15pm</option>
            <option value="5:30pm">5:30pm</option>
            <option value="5:45pm">5:45pm</option>
            <option value="6:00pm">6:00pm</option>
            <option value="6:15pm">6:15pm</option>
            <option value="6:30pm">6:30pm</option>
            <option value="6:45pm">6:45pm</option>
            <option value="7:00pm">7:00pm</option>
            <option value="7:15pm">7:15pm</option>
            <option value="7:30pm">7:30pm</option>
            <option value="7:45pm">7:45pm</option>
            <option value="8:00pm">8:00pm</option>
            <option value="8:15pm">8:15pm</option>
            <option value="8:30pm">8:30pm</option>
            <option value="8:45pm">8:45pm</option>
            <option value="9:00pm">9:00pm</option>
            <option value="9:15pm">9:15pm</option>
            <option value="9:30pm">9:30pm</option>
            <option value="9:45pm">9:45pm</option>
            <option value="10:00pm">10:00pm</option>
            <option value="10:15pm">10:15pm</option>
            <option value="10:30pm">10:30pm</option>
            <option value="10:45pm">10:45pm</option>
            <option value="11:00pm">11:00pm</option>
            <option value="11:15pm">11:15pm</option>
            <option value="11:30pm">11:30pm</option>
            <option value="11:45pm">11:45pm</option>
            <option value="12:00am">12:00am</option>
          </select>
</p>
<p>
<label>Delivery Date</label>

 <select name="ddate" id="ddate"  required x-moz-errormessage="Please Select Time" title="Please Select Time">
<option selected=selected></option>
<option value="Monday">Monday</option>
           
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thrusday">Thrusday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
          
          </select>
                            </p>

                            
								<?php
								   //current URL of the Page. cart_update.php redirects back to this URL
									$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
									
								if(isset($_SESSION["cart_session"]))
								{
									$total = 0;

									foreach ($_SESSION["cart_session"] as $cart_itm)
									{
									
										$subtotal = ($cart_itm["Amount"]*$cart_itm["ProductItem"]);
										$total = ($total + $subtotal); 
									}

									echo ' <p> <label>Total Amount:</label><input name="Amount" id="Amount" class="tAmount"   value=" '.$currency.$total.'"  type="text" AUTOCOMPLETE=OFF disabled></p>';

								}else{

								}
								?>
                        </fieldset>

						<fieldset class="step">
                            <legend>Confirm
																				<?php
   //current URL of the Page. cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
if(isset($_SESSION["cart_session"]))
{
    $total = 0;
    echo '<ol>';
    foreach ($_SESSION["cart_session"] as $cart_itm)
    {
    
        $subtotal = ($cart_itm["Amount"]*$cart_itm["ProductItem"]);
        $total = ($total + $subtotal); 
    }
    echo '</ol>';
    echo '<h4 Align="right" name="Amount" Id="Amount">Your Total Amount: <big style="color:green">'.$currency.$total.'</big></h4>';

}else{

}
?>
<input type="hidden" id="amount" name="amount" value="<?php echo $total; ?>" />
							</legend>
							<p>
							Thankyou for buying and COME AGAIN!!
							Proceed it Now
							</p>
                            <p class="submit">
                                <button id="registerButton" type="submit"   name="submit"  title="Click On to Proceed"  alert('are you sure to proced')> Proceed </button>
                            </p>
                        </fieldset>
                    </form>
                </div>
                <div id="nav" style="display:none;">
                    <ul>
                        <li class="doortay">
					
                            <a href="#">Account</a>
                        </li>
                        <li>
                            <a href="#">Personal Details</a>
                        </li>
                        <li>
                            <a href="#">Payment and Delivery</a>
                        </li>
                        <li>
                            <a href="#">Confirm</a>
                        </li>
						
                    </ul>
                </div>
            </div>
        </div>
		
	<script>

</script>	
		
 <script type='text/javascript'>

function validateForm()
{
var x=document.forms["myForm"]["fullname"].value;

if (x==null || x=="")
    {
    alert("First name must be filled out");
    return false;
    }
var x=document.forms["myForm"]["city"].value;

if (x==null || x=="")
    {
    alert("City name must be filled out");
    return false;
    }
var email = document.getElementById('email');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
    alert('Please provide a valid email address');
    email.focus;
    return false;
 }
var x=document.forms["myForm"]["address"].value;

if (x==null || x=="")
    {
    alert("Kebele must be filled out");
    return false;
    }
var x=document.forms["myForm"]["delivery"].value;

if (x==null || x=="")
    {
    alert("address must be filled out");
    return false;
    }

var x=document.forms["myForm"]["phone"].value;
var pattern = /^\d{2}-\d{4}-\d{4}$/;

if (x==null || x=="")
    {
    alert("Phone must be filled out");
    return false;
    } else if (x.match(pattern)) {
    return true;
    } else {
    alert ("Not a valid phone number");
    return false;
    } 
}
	</script>
		
			</div>
			<!-- End Content -->
	
			<!-- Begin Sidebar -->
			<div id="sidebar">
				<ul>
					<li class="widget">
						<h2>TOP Brands</h2>
						<div class="brands">
							<ul>
								<li><a href="#" title="Brand 1"><img src="../images/brand-img1.jpg" alt="Brand 1" /></a></li>
								<li><a href="#" title="Brand 2"><img src="../images/brand-img2.jpg" alt="Brand 2" /></a></li>
								<li><a href="#" title="Brand 3"><img src="../images/brand-img3.jpg" alt="Brand 3" /></a></li>
								<li><a href="#" title="Brand 4"><img src="../images/brand-img4.jpg" alt="Brand 4" /></a></li>
							</ul>
							<div class="cl">&nbsp;</div>
						</div>
						<a href="#" class="more" title="More Brands">More Brands</a>
					</li>
				</ul>
			</div>
			<!-- End Sidebar -->

	<!-- End Wrapper -->
</body>
</html>