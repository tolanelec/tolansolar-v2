<?php if(preg_match("/MSIE/",getenv("HTTP_USER_AGENT")) || preg_match("/Internet Explorer/",getenv("HTTP_USER_AGENT"))){header('Location:http://localhost/xampp/tolansolar-v1/Condidtions.php'); }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transistional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <title>Tolan Terms and conditions  </title>
		
<meta name="description" content=" Tolan-solar , consumer terms and conditions "/>
<meta name="keywords" content="Tolan-solar solar solutions","terms", "conditions", "disclaimer notes">
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
					<LI><a href="Repairs.php">Repairs</a></LI>
					<LI><a href="Repairs.php">Recycling</a></LI>
					<LI><a href="Repairs.php"> Returns Policy</a></LI>
					<LI><a href="Frequent_Questions.php">FAQ</a></LI>
				</ul>
				

			</span>
			</div>
			
			
		<div id="column_small" style="height:1200px">	
			<span id="contents5">
				<h3 class="grey"> Terms and Conditions </h3>
				<p class="text">
				The contents of this website and the products sold or advertised are protected under EU trade legislation and by
				intellectual property rights. You are not allowed to use any images, content or company content without permission.
				We have the right to persue compensation for damages legally if any material is used without prior consent </p>
				<p class="text"><h3 class="blue"> Service and Consumer </h3>
				<p><b>VAT</b> The contract price listed on our website includes of taxes unless stated otherwise</p>
				<hr>
				<p><b>Delivery charges</b> Where delivery costs are incurred, we will clearly include this our pricing. Transaction and completion of 
				   trade will be only considered complete when cost of delivery is also paid in such circumstance </p> 
				<p>Payment and delivery arrangement will be explained in detail for each transaction</p><hr>
				<p><b>Right of Cancellation </b>Under UK consumer legislation you have the right of cancellation for products or services purchased 
				   on website. We advise that extends to transactions made on our website. With products already purchased
				   you have right to return goods (provided item is not altered and provided it is still reasonable condition)
				   within seven working days from the day after you receive goods or seven working days from the day after the order is provided
				   provided  no prior agreement of contract was made in person. </p>
				<hr>
				<h3 class="blue">Defamation:</h3><p class="text"> We have the right to remove any defamatory or any remarks viewed as inapropriate in our products review page
				</p><hr>
				<h3 class="blue">Conditions of use of website </h3>
				<p class="text"><b>Misuse or Abuse of Service: </b><br> We are allowed to take neccessary action to avoid damanges or
				seek compensation for damages in following acts.<br>
				
				<b>Email and Prohibited content</b><br>
				The use of this website is subject to policy , Tolan-Solar has zero tolerance of spam mail, we therefore ensure
				that all marketing information provides option to unsubscribe.<br>
				<b>Use of Emails</b><br> We forbid use of our website for sending unsolicited emails or correspondence, evidence of
				this may lead to restricting us of our services and rewards from damages we may have incurred.<br>
				We prohibit use of any spamware on any of our services by customers and staff.</br>
				
				We also have to right to bar you from use of your services if we feel you have conceived to commit the following acts </br>
				<ul>
				<li>Sending or posting discriminatory, harassing, or threatening messages or images on the Internet or via email service </li>
				<li>Introducing malicious software onto the company network and/or jeopardizing the security of the organization's electronic communications systems </li>
				<li>Sending or posting information that is defamatory to the company, its products/services, colleagues and/or customers</li>
				</ul>
				<hr>
				<p class="text"><strong>Jurisdiction:  </strong> This website only covers purchase and ordering from United Kingdom and
				countries in West-Africa . We are unable to ship to any EU countries at the moment.</p>
				<hr>
				<p class="text">
				<strong>Disclaimer:</strong> The responsibility for all material in this page including the information, pictorial content, views and opinions, and for any scripts activated by this page including documents, product images, content and articles, rests wholly on a personal basis with the Tolan.
				Tolan solar is responsible for liability for loss, liability for hypertext links, liability for defamation and for compliance with relevant acts of Parliament including the Copyright, Designs and Patents Act 1988, the Obscene Publications Act 1959, Protection of Children Act 1978, Criminal Justice Act 1988, Telecommunications Act 1984, 
                 Indecent Displays (Control) Act 1981, and the Computer Misuse Act 1990.</p>
				</div><script src='https://checkout.google.com/buttons/logos?merchant_id=146701109927099&loc=en&f=png' ></script> 
				

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
  	<div id="footer" style="margin-top:100px">
	<span id="disclaimer" ><p>  This website is copyright of tolansolar limited 2012 (c).Tolan Solar is Uk Registered company.     Please visit our facebook page here  </p>
	<p>| <a href="Copyright.php">Copy right statement </a>| <a href="Cookie_Privacy.php">Cookies Policy</a> | <a href="Credit.php">Credits</a> | <a href="Policy.php"> Privacy Policy</a> |
     <a href="Conditions.php">Terms and Conditions</a> | <a href="Accessibility.php"> Accessibility  </a> |
	</p> </span>
	</div>


	
</body>
</html>