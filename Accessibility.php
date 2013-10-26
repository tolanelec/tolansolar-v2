<?php if(preg_match("/MSIE/",getenv("HTTP_USER_AGENT")) || preg_match("/Internet Explorer/",getenv("HTTP_USER_AGENT"))){header('Location:http://localhost/xampp/tolansolar-v1/Condidtions.php'); }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transistional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <title>Tolan-Solar : Accessbility and support  </title>
		
<meta name="description" content=" Tolan-solar , consumer terms and conditions "/>
<meta name="keywords" content="Tolan-solar solar solutions","accessibility">
<meta name="author" content="L Jinad">
<meta charset="UTF-8">
<meta http-equiv="refresh" content="60">

<!--[if IE]><!-->	
 <link rel="stylesheet" href="main3_style.css" type="text/css" >
 <!--<![endif]-->
<link rel="stylesheet" type="text/css" href="side_form.css" >
 
<script type="text/javascript" src="jquery.min.js">
</script>
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
				   firstname:"please enter your firstname",
				   lastname:"please enter your lastname",
				   contact: {
				      required:"please provide a number",
					  minlength: "your phone must be atleast 7 characters long" },
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

<script>
 (function() {
   var cx = '016733281910472351058:azkatytop1i';
   var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
   gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
       '//www.google.com/cse/cse.js?cx=' + cx;
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
 })();
</script>
</head>
<body>


    <div id="Header">
	     <div id="menu"> 
		    <ul class="topmenu">
			  <li class="search">
			  <gcse:searchbox-only></gcse:llsearchbox-only> 
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
	  	   <img class="bottom" src="images/container_bg9.jpg" alt="sunset off docks"/> 
           <img class="top" src="images/container_bg3.jpg"  alt="solar panel"/>	 
	</div>
	
	<div id="sidebar" style="height:auto">
	    <div id="column1" style="height:auto">
		<div id="column_left" style="height:1600px">
			<span id="contentsfaq_update">
		
	        	        <h3 class="grey">Customer Support </h3>
				<UL class="sidemenu">
					<LI><a href="Complaints.php">Make a complaint </a></LI>
					<LI><a href="complaints.php">Product faults</a></LI>
					<LI><a href="Deliveries.php">Delivery queries</a></LI>
					<LI><a href="Repairs.php"> Servicing </a></LI>
				</UL>
				</br>
				<h3 class="grey_bottom"> Support & Repairs</h3>
				<UL class="sidemenu">
					<li><a href="Repairs.php">Repairs</a></li>
					<li><a href="Repairs.php">Recycling</a></li>
					<li><a href="Repairs.php"> Returns Policy</a></li>
					<li><a href="Frequent_Questions.php">FAQ</a></li>
				</ul>
				

			</span>
			</div>
			
			
		<div id="column_small">	
			<span id="contents5">
				<h3 class="grey"> Accessibility statement</h3>
				<p class="text">
				We try to maintain WAI Level AA accessibility

				Tolan-solar recognises the need to provide support for users with particular needs- We have therefore made an effort to ensure our website 
				tries to meet the W3C's guidelines on accessibility where possible.
				</p>
				<hr>
				<h3 class="blue">Support</h3><p class="text"> We have tried to provide support as suggested under the Disability Discrimination Act (DDA), by including
				features that support users of the website who may have visual  impairments. We have provided alternative text to images
				used on this site. We have also ensured the user is not disadvantaged by colour design of the website and ensured
				the content meets the WCA guidelines on Accessiblity. We have also provided alternative links to support users here
				we are unable to support their needs on this site.<br>
				
				Thank you
				</p><hr>
				</br></p>
				
 
				

			</span></div>
			
			<div id="column_right">
			
		    <span id="span#contentsfaq_right">
	<form action="" method="post" id="register-form"  novalidate="novalidate"  >
			
			<h2>Quick Order</h2>
			
			<div id="form-content">
				<fieldset>
                    
					    <div class="fieldgroup">
					    <label for="name">Firstname</label>
						<input type="text" name="name" size="20" required />
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
						<label for="contact">contact </label>
						<input type="text" name="contact" size="20" required />
						</div>
						
						<div class="fieldgroup">
						<label for="product">select product </label>
						<select name="products" size="20"/>
						  <option>solar array</option>
						  <option>roof install</option>
						  <option>single room </option>
						  <option>double room</option>
						  <option>commercial install</option>
				        </select></br>
						</div>
	
						<div class="fieldgroup">
						<p class="right">By clicking register you agree to our <a target="_blank" href="Policy.php">policy</a>.</p>
						<input type="submit" value="Register" class="submit" >
						</div>
						
						
						
						
				</fieldset>		
				</div>
				</form>	
				

			</span>
			</div>
			</div>
			

	</div>
  	<div id="footer" >
	<span id="disclaimer" ><p>  This website is copyright of tolansolar limited 2012 (c).Tolan Solar is Uk Registered company.     Please visit our facebook page here  </p>
	<p>| <a href="Copyright.php">Copy right statement </a>| <a href="Cookie_Privacy.php">Cookies Policy</a> | <a href="Credit.php">Credits</a> | <a href="Policy.php"> Privacy Policy</a> |
     <a href="Conditions.php">Terms and Conditions</a> | <a href="Accessibility.php"> Accessibility  </a> |
	</p> </span>
	</div>


	
</body>
</html>