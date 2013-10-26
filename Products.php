<?php if(preg_match("/MSIE/",getenv("HTTP_USER_AGENT")) || preg_match("/Internet Explorer/",getenv("HTTP_USER_AGENT"))){header('Location:http://localhost/xampp/tolansolar-v1/Products.php'); }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transistional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<title>Tolan-Solar Products </title>
<meta name="description" content=" solar products on sale at Tolan at prices">
<meta name="keywords" content="Tolan-solar solar solutions","roofing installs", "Solar lights", "Solar rechargers", "Solar pannels"  />
<meta name="author" content="L Jinad">
<meta charset="UTF-8">


	
    <link rel="stylesheet" href="default.css" type="text/css" >
<!--[if IE]><!-->	
 <link rel="stylesheet" href="main3_style.css" type="text/css" >
 <!--<![endif]-->
 <link rel="stylesheet" type="text/css" href="side_form.css" >
 
<script type="text/javascript" src="jquery.min.js">
</script>
<!--<script type="text/javascript" src="jquery.validator.min.js"></script>-->
<script type="text/javascript" src="jquery.validate.min.js">
</script>

<script type="text/javascript">
$(document).ready(function(){
  $("p.text").click(function(){
    $(this).hide();
  });
});
</script>

<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#register-form").validate({
				rules: {
				 firstname: "required",
				 lastname: "required",
				 email: {
				   required:true,
				   email:true
				 },
				 contact: {
				   required: true,
				   minlength:9
				 },
				 agree: "required"
				 },
				 messages: {
				   firstname:"please enter firstname",
				   lastname:"please enter lastname",
				   contact: {
				      required:"please provide a number",
					  minlength: "phone must be at least 9 characters long" },
					  product: "please select product",
					  email: "please enter a valid email address",
					  agree:"please accept our policy"
					},
					submitHandler:function(form){
				             form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();

    });

})(jQuery, window, document);
</script>





</head>
<body>

<script>
 (function() {
   var cx = '016733281910472351058:azkatytop1i';
   var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
   gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
       '//www.google.com/cse/cse.js?cx=' + cx;
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
 })();
</script>


    <div id="Header">
	     <div id="menu"> 
		    <ul class="topmenu">
			  <li class="search">
			 <gcse:searchbox-only></gcse:searchbox-only>
              </li>
			</ul>
			
 		 </div>
		 
		 <div id="logo">
		   <span id="imag">
			<img src="images/Tolan-Logo.jpg" alt="tolansolar logo"/> 
		   </span>
		 </div>


    
		 <ul class="navigate">
		    <li><a class="nav" href="home.php"> Home </a>
				<ul>
					<li><a href="About_us.php">Who we are</a></li>
					<li><a href="Charity.php">Community Support</a></li>
					<li><a href="Case_study.php">Case Study</a></li>
				</ul>
			</li>			
			<li><a class="nav" href="Contact.php"> Contact  </a></li>
			<li><a class="nav" href="Products.php"> Products</a>
				<ul>
					<li><a href="House.php">Home Products </a></li>
					<li><a href="Lighting.php">Lighting Products</a></li>
				
				</ul>
			</li>
			<li><a class="nav" href="PV-Installation.php">Installation</a>

			</li>
			<li><a class="nav" href="Support.php">Support</a>
				<ul>
					<li><a href="Frequent_Questions.php">FAQ </a></li>
					<li><a href="Repairs.php">Repairs</a></li>
					<li><a href="Manuals.php">Manuals</a></li>
					<li><a href="Deliveries.php">Deliveries</a></li>
				</ul>
			</li>
		 </ul>
	 
		 
	</div>	
	
	
    <div id="cf">
	  	   <img class="bottom" src="images/container_bg9.jpg"/>
           <img class="top" src="images/container_bg3.jpg"/>	
	</div>
	
	<div id="sidebar">
	    <div id="column1">
		<div id="column_left">
			<span id="contentsfaq_update">
		
	        <h3 class="grey">Customer Support </h3>
				<UL class="sidemenu">
					<LI><a href="Complaints.php">Make a complaint </a></LI>
					<LI><a href="complaints.php">Product faults</a></LI>
					<LI><a href="Deliveries.php">Delivery queries</a></LI>
					<LI><a href="repairs.php"> Servicing </a></LI>
				</UL>
				</br>
				</br>
				<h3 class="grey_bottom"> Repairs and Replacements</h3>
				<UL class="sidemenu">
					<LI><a href="repairs.php">Repairs</a></LI>
					<LI><a href="repairs.php">Recycling</a></LI>
					<LI><a href="repairs.php"> Returns Policy</a></LI>
					
				</UL>
				
				

			</span>
			</div>

		<div id="column_small">	
		
			<span id="contentsX">
			<h2 class="blue">Products</h2>
			<p class="text">
				<b>Home Products </b></br>
				Tolan has range of products for home, designed to be affordable but
				quality. Our product ranges include , USB chargers, solar-panels, power-storage
				devices, Adapters, disposable batteries.</p>
				<p class="text">
				<b>Other</b></br>
	            We also have a range of products for Lighting for the house hold, which include
				rechargeable solar-lamp, <abbr title="light emitting diode">LED</abbr>-AA fitted battery lamp, <abbr title="light emitting diode">LED</abbr> Touches, Flood lamps,
				bicycle break lamps, emergency flood lights. Please follow link for further details
				on product range and availablilty.
				</p>
			<p class="text"> We accept online payments and delivery for some of our products </p>
				<div id="googleCheckoutLogo"></div><script src='https://checkout.google.com/buttons/logos?merchant_id=146701109927099&loc=en&f=png' >
				</script>
			</span></div>
			
			<div id="column_right">
			
					<form action="" method="post" id="register-form"  novalidate="novalidate"  >
			
			<h2>Quick Order</h2>
			
			<div id="form-content">
				<fieldset>
                    
					    <div class="fieldgroup">
					    <label for="name">Firstname</label>
						<input type="text" name="firstname" size="20" required />
						</div>
						<div class="fieldgroup">
						 <label for="lastname">Lastname</label>
						 <input type="text" name="lastname" size="20" required />
						</div>
						<div class="fieldgroup">
						<label for="email">Email</label>
						<input type="text" name="email"  size="20" required />
						</div>
						
					    <div class="fieldgroup">
						<label for="contact">Contact </label>
						<input type="text" name="contact" size="20" required />
						</div>
						
						<div class="fieldgroup">
						<label for="product">Product Selection </label>
						<select name="product" size="30"/>
						  <option value="none" selected> </option>
						  <option value="solar">solar array</option>
						  <option value="roofing" >roof install</option>
						  <option value="single">single room </option>
						  <option value="double">double room</option>
						  <option value="mobile">mobile panels</option>
						  <option value="commercial">commercial install</option>
				        </select></br>
						</div>
	
						<div class="fieldgroup">
						<p class="right">By clicking submit you agree to our <a target="_blank" href="Policy.php">policy</a>.</p>
						<input type="submit" value="Submit" class="submit" >
						</div>
						
						
						
						
				</fieldset>		
				</div>
				</form>	
		    
			</div>
			</div>
			

	</div>
  	<div id="footer">
<span id="disclaimer" ><p> This website is copyright of tolansolar limited 2012 (c).Tolan Solar is Uk Registered company. Please visit our facebook page here <p>
	<p>| <a href="Copyright.php">Copy right statement </a>| <a href="Cookie_Privacy.php">Cookies Policy</a> | <a href="Credit.php">Credits</a> | <a href="Policy.php"> Privacy Policy</a> | <a href="Conditions.php">Terms and Conditions</a> | <a href="sitemap.php"> Sitemap </a> |<p><script src='https://checkout.google.com/buttons/logos?merchant_id=146701109927099&loc=en&f=png' ></script></p>
	</p> </span>	
	</div>


	
</body>
</html>