<?php if(preg_match("/MSIE/",getenv("HTTP_USER_AGENT")) || preg_match("/Internet Explorer/",getenv("HTTP_USER_AGENT"))){header('Location:http://localhost/xampp/tolansolar-v1/Complaints.php'); }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transistional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <title>Tolan Solar customer service </title>

 	
<meta name="description" content=" Tolan-solar , customer service and relations"/>
<meta name="keywords" content="Tolan-solar solar ","customer support", "support", "client support", "customer relations">
<meta name="author" content="L Jinad">
<meta charset="UTF-8">
<meta http-equiv="refresh" content="60">

<!--[if IE]><!-->	
 <link rel="stylesheet" href="main3_style.css" type="text/css" />
 <!--<![endif]-->
 <link rel="stylesheet" type="text/css" href="side_form.css" 
 
 

<script type-"text/javascript" src="jquerybrowserdetect.js">
</script>

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
<body id="contents3">


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
	  	   <img class="bottom" src="images/container_bg9.png" alt="solar panel"/>
           <img class="top" src="images/freeimage-6126418-1-rural.jpg" alt="rural village"/>	 
	</div>
	
	<div id="sidebar">
	    <div id="column1">

			<span id="contentsfaq">
		
	        <h3 class="grey">Customer Support </h3>
				<UL class="sidemenu">
					<LI><a href="Complaints.php">Make a complaint </a></LI>
					<LI><a href="Complaints.php">Product faults</a></LI>
					<LI><a href="Deliveries.php">Delivery queries</a></LI>
					<LI><a href="Repairs.php"> Servicing </a></LI>
				</UL>
				</br>
				<h3 class="grey_bottom"> Repairs and Replacements</h3>
				<UL class="sidemenu">
					<LI><a href="Repairs.php">Repairs</a></LI>
					<LI><a href="Repairs.php">Recycling</a></LI>
					<LI><a href="Repairs.php"> Returns Policy</a></LI>
					<LI><a href="Frequent_Questions.php">FAQ</a></LI>
					
				</UL>
			</blockquote>
				
				

			
				

			</span>
		
			
			
			
			<span id="contents2">
				<h3>Complaints</h3>
			</span>
			
			<span id="contents3">
				<p>
				    You can get in touch with our representatives for following complaints
					by filling the form below  
				    We will try to respond to you by email or contact you within 3 working days.
				     
				</p>
				<blockquote>
				<form class="complaint" action="Complaints-handler.php"  method="POST" >
				<fieldset class="left">
				<legend><h3 class="grey"> Complaints form </h3> </legend>

						<label for="title  "> Title </label></br>
	                    <input type="textfield" name="title" value=""/></br>
						<p>
					    <label for="name  "> Name </label></br>
						<input type="textfield" name="namefield" value=""/> 
						</br></p>
						<p>
						<label for="complaint"> Customer reference </label></br>
						<input type ="textfield" name="reference" value=""/></p>
						<p>
					    <label for="email  "> Email </label></br>
						<input type="textfield" name="emailfield" value=""/></br>
						<p><label for="contact">Contact No </label></br>
						<input type = "textfield" name="contactfield" value=""/></textarea></p>
						<label for = "address">Address </label></br>
						<textarea name ="addressfield" rows="3" cols="35"/></textarea></br></br>
						<label for = "Complaint"> Written complaint</label></br>
						<textarea  name = "detailsfield" rows="4" cols="35" /></textarea></br></br>
						
						<input type="hidden" name="stage" value="process">
						<input type="submit" name="submit" value="submit" />
				</fieldset>	

              </form>

				</blockquote>
				
				<p class="text3">

				</p>
			
			
			</span>
	    </div>

	
	</div>
  	<div id="footer">
	<span id="disclaimer" ><p>  This website is copyright of tolansolar limited 2012 (c).Tolan Solar is Uk Registered company.     Please visit our facebook page here  </p>
	<p>| <a href="Copyright.php">Copy right statement </a>| <a href="Cookie_Privacy.php">Cookies Policy</a> | <a href="Credit.php">Credits</a> | <a href="Policy.php"> Privacy Policy</a> | <a href="Conditions.php">Terms and Conditions</a> | <a href="sitemap.php"> Sitemap </a> | 
	</p> </span>
	</div>


	
</body>
</html>